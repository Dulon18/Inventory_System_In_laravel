<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function list()
    {
        $suppliers = Supplier::all();
        return view('pages.suppliers.list',compact('suppliers'));
    }

    function create()
    {
        return view('pages.suppliers.create');
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
        
        
        Supplier::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'city'=>$request->city,
            'shop'=>$request->shop,
            'type'=>$request->type,
            'account_holder'=>$request->account_holder,
            'account_number'=>$request->account_number,
            'bank_name'=>$request->bank_name,
            'bank_branch'=>$request->bank_branch,
            'image'=>$filename

         ]);

         return redirect()->back()->with('success','Supplier Added Successfully..!!');
    }

    public function details($id)
    {
        $supplier=Supplier::find($id);
        return view('pages.suppliers.details',compact('supplier'));

    }

    public function edit($id)
    {
        $supplier=Supplier::find($id);
        $suppliers=Supplier::all();
        return view('pages.suppliers.edit',compact('supplier','suppliers'));
    }

    public function update(Request $request,$id)
    {
        $supplier=Supplier::find($id);
        $supplier_image=$supplier->image;
        if ($request->hasFile('image'))
        {
            $supplier_image=date('Ymdhms').'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/storage',$supplier_image);
        }

        $supplier->update([

            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'city'=>$request->city,
            'shop'=>$request->shop,
            'type'=>$request->type,
            'account_holder'=>$request->account_holder,
            'account_number'=>$request->account_number,
            'bank_name'=>$request->bank_name,
            'bank_branch'=>$request->bank_branch,
            'image'=>$supplier_image

        ]);
        return redirect()->back()->with('success','Supplier info Updated Successfully..!!');
    }

    public function delete($id)
    {
        Supplier::find($id)->delete();
        return redirect()->back()->with('success','Supplier Deleted Successfully..!!');
    }
}
