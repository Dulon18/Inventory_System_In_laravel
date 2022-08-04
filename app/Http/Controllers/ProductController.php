<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $products=Product::all();
        return view('pages.product.list',compact('products'));
    }
    public function create()
    {
        $categories=Category::all();
        $suppliers=Supplier::all();
        return view('pages.product.create',compact('categories','suppliers'));
    }

    public function store(Request $request)
    {
          $request->validate([
            'name'=>'required',
            'product_code'=>'required',
        ]);


        $filename=null;
        if ($request->hasFile('image'))
        {           
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/storage/products/',$filename);
        }
        
        Product::create([

            'name'=>$request->name,
            'category_id'=>$request->cat_id,
            'supplier_id'=>$request->sup_id,
            'product_code'=>$request->product_code,
            'product_route'=>$request->route,
            'product_warehouse'=>$request->warehouse,
            'buy_date'=>$request->buying_date,
            'expire_date'=>$request->expire_date,
            'buying_price'=>$request->buying_price,
            'selling_price'=>$request->selling_price,
            'product_image'=>$filename
         ]);

         return redirect()->back()->with('success','Product Added Successfully..!!');
    }

    public function details($id)
    {
        $product=Product::find($id);
        return view('pages.product.details',compact('product'));

    }

    public function edit($id)
    {
        $product=Product::find($id);
        $categories=Category::all();
        $suppliers=Supplier::all();
        return view('pages.product.edit',compact('product','categories','suppliers'));
    }

    public function update(Request $request,$id)
    {
        $product=Product::find($id);  
        $product_image=$product->product_image;

        if ($request->hasFile('image'))
        {
            $product_image=date('Ymdhms').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/storage/products/',$product_image);
        }

        $product->update([
      
            'name'=>$request->name,
            'category_id'=>$request->cat_id,
            'supplier_id'=>$request->sup_id,
            'product_code'=>$request->product_code,
            'product_route'=>$request->route,
            'product_warehouse'=>$request->warehouse,
            'buy_date'=>$request->buying_date,
            'expire_date'=>$request->expire_date,
            'buying_price'=>$request->buying_price,
            'selling_price'=>$request->selling_price,
            'product_image'=>$product_image
        ]);
        return redirect()->back()->with('success',' Product Updated Successfully..!!');
    }

    public function delete($id)
    {
        Product::find($id)->delete();
        return redirect()->back()->with('success','Product Deleted Successfully..!!');
    }
}
