<?php

namespace App\Http\Controllers\User;

use App\GatewayTraits\GatewayTraits;
use App\GatewayTraits\StatusTraits;
use App\Models\Payout;
use App\Models\Customer;
use App\Models\PayoutTransaction;
use App\Models\Wallet;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Support\Facades\Mail;
use App\Mail\PayoutMail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\WalletTransaction;
use Illuminate\Auth\Events\Failed;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;

class PayoutController extends Controller
{
    use GatewayTraits;
    use StatusTraits;

    public function payout(Request $request)
    {
        $validateData = Validator::make($request->all(), [
            'payment_type' => 'required',
            'amount' => 'required',
            'upi_id' => 'required_if:payment_type,upi',
            'bank' => 'required_if:payment_type,bank',
            'bank_ac' => 'required_if:payment_type,bank',
            'ifsc' => 'required_if:payment_type,bank',
            'phone' => 'required|numeric|digits:10',
            'customer_name' => 'required',
        ]);


        if ($validateData->fails()) {
            $message = $validateData->errors();
            return response()->json(responseData(null, $message, false));
        } else {
            $id = auth('sanctum')->user()->id;
            $data = Customer::where('id', $id)->first();
            $currentDate = date('Ymd');
            $randomNumber = str_pad(mt_rand(1, 9999), 4, '0', STR_PAD_LEFT);
            $ref_no = substr($currentDate, 0, 5) . $request->amount . $randomNumber;

            try {
                DB::transaction(function () use ($ref_no, $id, $request, $data) {
                    Payout::create([
                        'ref_no' => $ref_no,
                        'cus_id' => $id,
                        'amount' => $request->amount,
                        'payment_type' => $request->payment_type,
                        'upi_id' => $request->upi_id,
                        'bank' => $request->bank,
                        'bank_ac' => $request->bank_ac,
                        'ifsc' => $request->ifsc,
                        'phone' => $request->phone,
                        'customer_name' => $request->customer_name,
                        'status' => "pending",
                    ]);

                    $data = Wallet::where('customer_id', $id)->first();
                    $balance = $data->balance - $request->amount;
                    $life_debit = $data->lifetime_debit + $request->amount;

                    Wallet::where('customer_id', $id)->update([
                        'balance' => $balance,
                        'lifetime_debit' => $life_debit,
                    ]);

                    WalletTransaction::create([
                        'wallet_id' => $data->id,
                        'transactiontype' => 'dr',
                        'amount' => $request->amount,
                        'description' => 'This is a payout',
                        'date' => Carbon::now(),
                        'refference_no' => $ref_no,
                        'status' => "processing",
                        'source' => "tobank",
                    ]);

                    Notification::create([
                        'customer_id' => $id,
                        'message' => "payout request is process",
                        'date_time' => Carbon::now(),
                        'is_read' => "unread",
                        'notification_type' => "system_gen",
                    ]);

                    if ($data->email_id) {
                        $this->payoutMail($data->email_id);
                    }
                });
                $customer = Payout::select('cus_id', 'customer_name', 'amount', 'payment_type', 'ref_no')->where('cus_id', $id)->first();

                // If the transaction completes without exceptions, return success
                return response()->json(responseData($customer, 'Payout Request is process ', true));
            } catch (\Exception $e) {
                // If an exception occurs, rollback the transaction and return failure
                DB::rollBack();
                return response()->json(responseData(null, $e->getMessage(), false));
            }
        }
    }

    public function bankupi()
    {
        $arr = [
            'x_priority' => '1000',
        ];
        return  $this->upi($arr);
    }

    public function bankimps()
    {
        $arr = [
            'x_priority' => '0100',
        ];
        return $this->imps($arr);
    }

    public function upistatus()
    {
        $arr = [
            'x_priority' => '1000',
        ];
        return $this->upistatuscheck($arr);
    }

    public function impsstatus()
    {
        $arr = [
            'x_priority' => '0100',
        ];
        return $this->impsstatuscheck($arr);
    }

    // public function bank()
    // {
    //     $data = Payout::where('status', 'pending')->get();
    //     $randomString = Str::random(10);
    //     foreach ($data as $payout) {
    //         $payout->status = 'approved';
    //         $payout->bank_ref = Str::random(10);
    //         $payout->save();

    //         $generatedData[] = [
    //             'id' => $payout->id,
    //             'status' => $payout->status,
    //         ];
    //     }
    //     $this->callback($generatedData);

    //     return response()->json(responseData($generatedData,"success"));
    // }

    // public function callback($generatedData)
    // {
    //     foreach($generatedData as $data){
    //         $ref_no = Payout::select('ref_no')->where('id',$data['id']);
    //         if($data->status == 'approved'){
    //             $transaction = WalletTransaction::where('refference_no',$ref_no)->first();
    //             $transaction->status = "approve";
    //             $transaction->save();
    //         }
    //     }
    //     return;
    // }

    public function bank(Request $request)
    {
        $data = Payout::where('ref_no', $request->ref_no)->first();

        $randomString = Str::random(10);
        $data->status = $request->status;
        $data->bank_ref = $randomString;
        $data->save();
        if ($data->save()) {
            $id = $data->cus_id;
            $timestamp = Carbon::now();
            $entity = new Notification();
            $entity->customer_id = $id;
            if ($request->status == 'approved') {
                $entity->message = 'Payment Successful';
            } else {
                $entity->message = 'payment Not Successful';
            }
            $entity->date_time = $timestamp;
            $entity->is_read = 'unread';
            $entity->notification_type = 'system_gen';
            $entity->save();
            if ($entity->save()) {
                $entity1 = new PayoutTransaction();
                $entity1->ref_no = $request->ref_no;
                $entity1->amount = $data->amount;
                if ($request->status == 'approved') {
                    $entity1->status = "approved";
                    $entity1->message = "payment successfull";
                } else {
                    $entity1->status = "rejected";
                    $entity1->message = "payment not successfull";
                }
                $entity1->bank_ref = $randomString;
                $entity1->payout_id = $data->id;
                $entity1->transaction_no = $randomString;
                $entity1->save();
            }
            if ($entity1->save()) {
                return response()->json(responseData(null, "success"));
            } else {
                return response()->json(responseData(null, "success", false));
            }
        }
    }

    public function callback(Request $request)
    {
        $data = Payout::where('ref_no', $request->ref_no)->first();

        if ($data->status == "approved") {
            $transaction = WalletTransaction::where('refference_no', $request->ref_no)->first();
            $transaction->status = "approve";
            $transaction->save();
        } elseif ($data->status == "reject") {
            $transaction2 = WalletTransaction::where('refference_no', $request->ref_no)->first();
            $transaction2->status = "rejected";
            $transaction2->save();
            if ($transaction2->save()) {
                $wallet = Wallet::where('customer_id', $data->cus_id)->first();
                $wallet->balance = $wallet->balance + $data->amount;
                $wallet->lifetime_debit = $wallet->lifetime_debit - $data->amount;
                $wallet->save();
            }
        }

        if (isset($transaction) && $transaction->save()) {
            return response()->json(responseData(null, "Transaction successful"));
        }

        if (isset($wallet) && $wallet->save()) {
            return response()->json(responseData(null, "Transaction declined", false));
        }
    }

    public function payouttransaction()
    {
        $id = auth('sanctum')->user()->id;
        $data = Payout::with('transaction')->where('cus_id', $id)->orderBy('created_at', 'desc')->get();
        if ($data) {
            return response()->json(responseData($data, "transaction retrive successfully"));
        } else {
            return response()->json(responseData(null, "something went wrong", false));
        }
    }


    public function payoutMail($email)
    {
        if ($email) {
            $maildata = [
                'title' => "Your Payment is under process!",
                'body' => "This is for Payout Mail"
            ];

            Mail::to($email)->send(new PayoutMail($maildata));
        }
    }
}
