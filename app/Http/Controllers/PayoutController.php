<?php

namespace App\Http\Controllers;


use App\Models\Payout;
use Illuminate\Http\Request;
use App\Models\PayoutTransaction;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class PayoutController extends Controller
{
    public $page = 'transaction';
    public function payout()
    {
        $payout = Payout::where('status','pending')->get();
        return view('admin.payout.index',compact('payout'));
    }
    public function update(Request $request)
    {
        $payout =Payout::where('status',$request->status)->get();
        // $payout=Payout::where('status','reject')->where('id',$id)->get();
        return view('admin.payout.index',compact('payout'));
    }
    public function transaction(Request $request)
    {
        if ($request->ajax()) {
            $data = PayoutTransaction::all();
            return datatables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    $checked = $row->status == 'active' ? 'checked' : '';
      
                    
                })
                ->addColumn('action', function ($row) {
                    // $actionBtn = view('admin.walletmanagemeny.button', ['item' => $row, 'page' => $this->page]);
                    // return $actionBtn;
                })
                ->rawColumns(['status','action'])
                ->make(true);
        }
        // $transaction= PayoutTransaction::all();
        return view('admin.payout.transaction');
    }
}
