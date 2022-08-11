<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_details;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\DB;
class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function store(Request $request)
    {
        $data=array([
            'id'=>$request->id,
            'name'=>$request->name,
            'qty'=>$request->qty,
            'price'=>$request->price,
            'weight'=>500,
        ]);
        //dd($data);
        Cart::add($data);
        return redirect()->back()->with('success','Product Added Successfully..!!'); 
    }

    public function updateCart(Request $request,$rowId)
    {
        $data=$request->qty;
        //dd($data);
        Cart::update($rowId,$data); 
        return redirect()->back()->with('success','Update Successfully..!!'); 
    }

    public function removeCart($rowId)
    {
        Cart::remove($rowId);
        return redirect()->back()->with('success','Deleted Successfully..!!');
    }
    
    // invoice-------------
    public function createInvoice(Request $request)
    {   
            $cus_id=$request->cus_id;
            $customer=Customer::where('id',$cus_id)->first();
            $content=Cart::content();
            return view('pages.pos.invoice',compact('customer','content'));
    }

    public function storeInvoice(Request $request)
    {
        //dd($request);
        
        $data=array();
        $data['customer_id']=$request->customer_id;
        $data['order_date']=$request->order_date;
        $data['order_status']=$request->order_status;
        $data['total_product']=$request->total_product;
        $data['sub_total']=$request->sub_total;
        $data['vat']=$request->vat;
        $data['total']=$request->total;
        $data['payment_status']=$request->payment_status;
        $data['pay']=$request->pay;
        $data[ 'due']=$request->due;
   
     //dd($data);
     $order_id=DB::table('orders')->insertGetId($data);
     $contents=Cart::content();
     foreach($contents as $content){
         $insert=Order_details::create(
            [
                'order_id'=>$order_id,
                'product_id'=>$content->id,
                'quantity'=>$content->qty,
                'unitcost'=>$content->price,
                'total'=>$content->total
            ]
         );
     }
     if($insert){
         Cart::destroy();
         return redirect()->route('posList')->with('success','Deliver product Now..!!');
        
     }
     else
     {
         return redirect()->back()->with('error',' Failed');
     }
        
    }
}
