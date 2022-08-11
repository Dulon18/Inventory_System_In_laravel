<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Order;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    function dashboard()
    {
        $count['customer']=Customer::all()->count();
        $count['employee']=Employee::all()->count();
        $count['supplier']=Supplier::all()->count();
        $count['product']=Product::all()->count();
        $count['order']=Order::all()->count();
        $today =DB::table('order_details')->select(DB::raw('*'))->whereRaw('Date(created_at) = CURDATE()')->get()->count();
        $yesterday = DB::table('order_details')->select(DB::raw('*'))->whereRaw('Date(created_at) = SUBDATE(CURDATE(),1)')->get()->count();
        $lastWeek =  DB::table('order_details')->select(DB::raw('total) '))->whereRaw('Date(created_at) = CURDATE()')->sum('total');

        $pendingOrder=Order::where('order_status','pending')->get()->count();
        $deliveredOrder=Order::where('order_status','approved')->get()->count();
         return view('pages.dashboard',compact('count','pendingOrder','deliveredOrder','today','yesterday','lastWeek'));   
    }
}
