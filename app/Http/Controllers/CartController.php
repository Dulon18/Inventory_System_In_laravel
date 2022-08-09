<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
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
        // $content=Cart::content();
        // $cus_id=$request->cus_id;
        // dd($cus_id);

        $validated = $request->validate([
            'id'=>'required'
        ]);

        return view('pages.pos.invoice');
    }
}
