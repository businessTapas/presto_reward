<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Wallet;
use App\Models\RedemptionRequest;
use App\Models\WalletTransaction;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\BaseController;

class RedeemtionController extends Controller
{
    public function index(Request $request)
    {

        // $datas = RedemptionRequest::with('customer','coupon.couponRequest.company')->where('status','pending')->latest('created_at')->get();
        // return view('admin.redeemption.index',compact('datas'));


        if ($request->ajax()) {
            $data =  RedemptionRequest::with('customer', 'coupon.couponRequest.company')->where('status', 'pending')->latest('created_at')->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('check', function ($row) {
                    return '<input type="checkbox" value="' . $row->id . '" name="redeemption" />';
                })
                ->addColumn('action', function ($row) {
                    //$downloadUrl = route('request.rejected', ['id' => $row->id]);
                    //$viewUrl = route('request.approved', ['id' => $row->id]);
                    //$buttons = [
                        //'<a href="' . $viewUrl . '" class="edit btn btn-primary btn-sm">Approve</a>',
                        //'<a href="' . $downloadUrl . '" class="btn btn-primary btn-sm">Reject</a>',
                        // '<input type="checkbox" value="' . $row->id . '" name="redeemption" />',
                        // '<a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#reject">Reject</a>',

                    // ];
                    // return implode(' ', $buttons);
                    $actionBtn = view('admin.redeemption.button',['item' => $row]);
                    return $actionBtn;
                })
                ->rawColumns(['check','action'])
                ->make(true);
        }
        return view('admin.redeemption.index');
    }

    public function approve($id)
    {
        $user_id = auth()->user()->id;
        $redemption = RedemptionRequest::where('id', $id)->first();

        $balanceData = Wallet::where('customer_id', $redemption->customer_id)
            ->select('balance', 'lifetime_credit')
            ->first();

        if ($balanceData) {
            $wallet = Wallet::where('customer_id', $redemption->customer_id)->first();
            $originalBalance = $balanceData->balance;
            $originalLifetimeCredit = $balanceData->lifetime_credit;

            $wallet->balance = $originalBalance + $redemption->amount;
            $wallet->lifetime_credit = $originalLifetimeCredit + $redemption->amount;
            $wallet->save();
            if ($wallet->save()) {
                $transsaction = new WalletTransaction();
                $transsaction->wallet_id = $wallet->id;
                $transsaction->transactiontype = 'cr';
                $transsaction->amount = $redemption->amount;
                $transsaction->description = "this is coupon redemption";
                $transsaction->date = Carbon::now()->format('Y-m-d');
                $transsaction->created_by = $user_id;
                $transsaction->save();
            }

            if ($transsaction->save()) {
                $redemption->status = 'approved';
                $redemption->save();

                if ($redemption->save()) {

                    $timestamp = Carbon::now();

                    $entity = new Notification();
                    $entity->message = "Your coupan redeemed";
                    $entity->customer_id = $redemption->customer_id;
                    $entity->date_time = $timestamp;
                    $entity->notification_type = "system_gen";
                    $entity->is_read = "unread";

                    $entity->save();
                }
                return redirect()->route('redeemption');
            }
        }
    }

    public function reject(Request $request)
    {
        $id = $request->input('itemId');
        $redemption = RedemptionRequest::where('id', $id)->first();
        if($redemption){
            $redemption->status = "rejected";
            $redemption->admin_comment = $request->rejectionReason;
            $redemption->save();
            if($redemption->save())
            {
                $timestamp = Carbon::now();

                    $entity = new Notification();
                    $entity->message = "Sorry Your coupan rejected";
                    $entity->customer_id = $redemption->customer_id;
                    $entity->date_time = $timestamp;
                    $entity->notification_type = "system_gen";
                    $entity->is_read = "unread";

                    $entity->save();
            }
        }
        return redirect()->route('redeemption');
    }

    public function ajaxAllApproved(Request $request)
    {
        $user_id = auth()->user()->id;
        $id_arr = json_decode($request->redeemptionReq, true);
         for ($i = 0; $i < count($id_arr); $i++) {
            
            $redemption = RedemptionRequest::where('id', $id_arr[$i])->first();

            $balanceData = Wallet::where('customer_id', $redemption->customer_id)
                ->select('balance', 'lifetime_credit')
                ->first();

            if ($balanceData) {
                $wallet = Wallet::where('customer_id', $redemption->customer_id)->first();
                $originalBalance = $balanceData->balance;
                $originalLifetimeCredit = $balanceData->lifetime_credit;

                $wallet->balance = $originalBalance + $redemption->amount;
                $wallet->lifetime_credit = $originalLifetimeCredit + $redemption->amount;
                $wallet->save();
                if ($wallet->save()) {
                    $transsaction = new WalletTransaction();
                    $transsaction->wallet_id = $wallet->id;
                    $transsaction->transactiontype = 'cr';
                    $transsaction->amount = $redemption->amount;
                    $transsaction->date = Carbon::now()->format('Y-m-d');
                    $transsaction->created_by = $user_id;
                    $transsaction->save();
                }

                if ($transsaction->save()) {
                    $redemption->status = 'approved';
                    $redemption->save();

                    if ($redemption->save()) {

                        $timestamp = Carbon::now();

                        $entity = new Notification();
                        $entity->message = "Your coupan redeemed";
                        $entity->customer_id = $redemption->customer_id;
                        $entity->date_time = $timestamp;
                        $entity->notification_type = "system_gen";

                        $entity->save();
                    }
                }
            }
        }  //end of foor loop
        
        $return_data = array("message" => "Approved Successfully", "status" => "success");
        return json_encode($return_data);
    }


    public function pending()
    {
        return view('admin.redeemption.pending');
    }
    public function rejected()
    {
        return view('admin.redeemption.rejected');
    }
}
