<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Qr;
use App\Models\RedemptionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Notification;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\HttpCache\ResponseCacheStrategy;

class RedemptionController extends Controller
{
    //this code is for coupon redemption

    public function coupon(Request $request)
    {
        $validateData = Validator::make($request->all(), [
            'coupon_code' => 'required',
        ]);

        if ($validateData->fails()) {
            $message = $validateData->errors();
            return response()->json(responseData(null, $message, false));
        } else {

            $id = auth('sanctum')->user()->id;


            $qr_id = Coupon::with('couponRequest')->where('coupon_code', $request->coupon_code)->first();
            if ($qr_id->status == 'active') {
                $entity = new RedemptionRequest();
                $entity->customer_id = $id;
                $entity->request_date_time    = Carbon::now();
                $entity->coupon_id = $qr_id->id;
                $entity->amount = $qr_id->couponRequest->amount;
                $entity->save();

                if ($entity->save()) {
                    $qr_id->status = 'used';
                    $qr_id->save();

                    if ($qr_id->save()) {
                        $timestamp = Carbon::now();
                        $notification = new Notification();
                        $notification->customer_id = $id;
                        $notification->message = "your coupon request generated";
                        $notification->date_time = $timestamp;
                        $notification->is_read = "unread";
                        $notification->notification_type = "system_gen";
                        $notification->save();
                    }

                    $req_id = $entity->id;
                    $data = RedemptionRequest::where('id', $req_id)->first();
                    return response()->json(responseData($data, "wait for reedmption"));
                }
            } elseif ($qr_id->status == 'used') {
                return response()->json(responseData(null, "qr is already used", false));
            } elseif ($qr_id->status == 'rejected') {
                return response()->json(responseData(null, "qr is already rejected", false));
            } else {
                return response()->json(responseData(null, "qr is expired", false));
            }
        }
    }

    //this code is for view coupan data and validate

    public function coupondata(Request $request)
    {
        $validateData = Validator::make($request->all(), [
            'coupon_code' => 'required',
        ]);

        if ($validateData->fails()) {
            $message = $validateData->errors();
            return response()->json(responseData(null, $message, false));
        } else {
            $data = Coupon::with('couponRequest')->where('coupon_code', $request->coupon_code)->first();
            if ($data == null) {
                return response()->json(responseData(null, "invalid coupon", false));
            } elseif ($data->status == 'active') {
                $formattedData = [
                    'id' => $data->id,
                    'coupon_code' => $data->coupon_code,
                    'coupon_request_id' => $data->coupon_request_id,
                    'amount' => $data->couponRequest->amount,
                    'company_id' => $data->couponRequest->company_id,
                    'customer_id' => $data->customer_id,
                    'status' => $data->status,
                ];

                return response()->json(responseData($formattedData, "Do you want to redeem?"));
            } elseif ($data->status == 'used') {
                return response()->json(responseData(null, "qr is already used", false));
            } elseif ($data->status == 'rejected') {
                return response()->json(responseData(null, "qr is already rejected", false));
            } else {
                return response()->json(responseData(null, "qr is expired", false));
            }
        }
    }

    public function redemtionhistory()
    {
        $id = auth('sanctum')->user()->id;
        $redemptionhistory = RedemptionRequest::where('customer_id', $id)->orderBy('created_at', 'desc')->get();
        if ($redemptionhistory->isEmpty()) {
            return response()->json(responseData(null, "No history found", false));
        } else {
            return response()->json(responseData($redemptionhistory, "QR redemption history"));
        }
    }
}
