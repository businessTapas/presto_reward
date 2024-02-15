<?php

namespace App\Http\Controllers\Admin\Coupon;
use App\Models\Qr;
use App\Models\Coupon;
use App\Models\Company;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CouponRequest;
use Barryvdh\DomPDF\Facade\PDF;
use App\Http\Controllers\Controller;
class CouponController extends Controller
{
    public function index($id)
    {
        $coupons = Coupon::with(['qr' => function ($query) {
            $query->where('status', '!=', 'inactive');},'couponRequest.company'])->where('coupon_request_id', $id)->get();
            
          /*   foreach ($coupons as $c) {
            return $c->qr[0]->image;
        } */
        return view('admin.couponmanagement.couponindex',compact('coupons'));
    }
}
