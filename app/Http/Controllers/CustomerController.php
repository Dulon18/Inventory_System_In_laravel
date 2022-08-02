<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function list()
    {
        $customers = Customer::all();
        return view('pages.customer.list',compact('customers'));
    }

    function create()
    {
        return view('pages.customer.create');
    }

    function store(Request $request)
    {
         
        $filename=null;
        if ($request->hasFile('image'))
        {           
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/storage',$filename);
        }
        
        
        Customer::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'city'=>$request->city,
            'shopname'=>$request->shopname,
            'account_holder'=>$request->account_holder,
            'account_number'=>$request->account_number,
            'bank_name'=>$request->bank_name,
            'bank_branch'=>$request->bank_branch,
            'image'=>$filename

         ]);

         return redirect()->back()->with('success','Customer Added Successfully..!!');
    }

    public function details($id)
    {
        $customer=Customer::find($id);
        return view('pages.customer.details',compact('customer'));

    }

    public function edit($id)
    {
        $customer=Customer::find($id);
        return view('pages.customer.edit',compact('customer'));
    }

    public function update(Request $request,$id)
    {
        $customer=Customer::find($id);
        $customer_image=$customer->image;
        if ($request->hasFile('image'))
        {
            $customer_image=date('Ymdhms').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/storage',$customer_image);
        }

        $customer->update([

            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'city'=>$request->city,
            'shopname'=>$request->shopname,
            'account_holder'=>$request->account_holder,
            'account_number'=>$request->account_number,
            'bank_name'=>$request->bank_name,
            'bank_branch'=>$request->bank_branch,
            'image'=>$customer_image

        ]);
        return redirect()->back()->with('success','Customer Updated Successfully..!!');
    }

    public function delete($id)
    {
        Customer::find($id)->delete();
        return redirect()->back()->with('success','Customer Deleted Successfully..!!');
    }
}
