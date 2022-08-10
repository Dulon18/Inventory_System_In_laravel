<?php

namespace App\Http\Controllers;

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
}
