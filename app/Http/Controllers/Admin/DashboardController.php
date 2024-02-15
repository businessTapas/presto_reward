<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Product;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard',);
    }
   
//     public function index(Request $request)
//     {
//         $search = $request['searchQuery'] ?? "";
    
//         if ($search != "") {
//             $customer = Product::where('product_name', 'LIKE', "%$search%")->get();
//         } else {
//             $customer = null;
//         }

//     return [
//         'customer' => $customer,
//         'search' => $search,
//     ];
// }

function notification_status()
{
    $read=Notification::where('is_read','unread')->get();
    if($read)
    {
        Notification::where('is_read','unread')->update(['is_read' => 'read']);
        return "read";
    }
}


public function  showdata(Request $request)
{
   $showdatas =Notification::with('notifi')->get();
   //return $showdatas;
   return view('admin.layout.notification',compact('showdatas'));
}

}