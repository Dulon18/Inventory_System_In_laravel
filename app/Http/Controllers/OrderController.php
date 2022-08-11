<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function pendingOrder()
    {
        $pending=Order::join('customers','orders.customer_id','customers.id')
                        ->select('customers.name','orders.*')
                        ->where('order_status','pending')->get();
          //dd($pending);
        return view('pages.order.pendingOrder',compact('pending'));
    }


    //view order details...............................>
    public function viewOrder($id)
    {
        $order=Order::join('customers','orders.customer_id','customers.id')
                    ->select('customers.*','orders.*')
                    ->where('orders.id',$id)->first();

        $order_details=DB::table('order_details')
                                ->join('products','order_details.product_id','products.id')
                                ->select('products.name','products.product_code','order_details.*')
                                ->where('order_id',$id)
                                ->get();

        return view('pages.order.viewOrder',compact('order','order_details'));
    }

    public function orderDone($id)
    {
        $done=Order::where('id',$id);
        //dd($done);
        $done->update(['order_status'=>'approved']);
        if($done)
        {
            return redirect()->route('orderPending')->with('success','Status approved successfull');
        }
        else{
            return redirect()->route('orderPending')->with('error','Status is not approved');
        }
     
    }

    public function approveList()
    {
        $approved=Order::join('customers','orders.customer_id','customers.id')
                        ->select('customers.name','orders.*')
                        ->where('order_status','approved')->get();

        return view('pages.order.approvedOrder',compact('approved'));
    }
}
