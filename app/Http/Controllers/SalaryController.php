<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class SalaryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function list()
    {
        $salaries = DB::table('salaries')
                        ->join('employees','salaries.emp_id','employees.id')
                        ->select('employees.name','employees.image','employees.salary','salaries.*')
                        ->orderBy('name')
                        ->get();

        return view('pages.salary.list',compact('salaries'));
    }

    function create()
    {
        $employees=Employee::all();
        return view('pages.salary.create',compact('employees'));
    }

    function store(Request $request)
    {   
        $emp_id=$request->emp_id;
        $month=$request->month;
        $advanced=DB::table('salaries')
                           ->where('month',$month)    
                           ->where('emp_id',$emp_id)
                           ->first();  
        if($advanced === Null)
        {
            Salary::create([

                'emp_id'=>$request->emp_id,
                'month'=>$request->month,
                'year'=>$request->year,
                'advanced_salary'=>$request->advanced_salary,
             ]);
    
             return redirect()->back()->with('success','Salary Added Successfully..!!');
        }
        else
        {
            return redirect()->back()->with('error','Advanced salary already given..!!');
        }

    }

    public function details($id)
    {
        $salary=Salary::find($id);
        return view('pages.salary.details',compact('salary'));

    }

    public function edit($id)
    {
        $supplier=Salary::find($id);
        $suppliers=Salary::all();
        return view('pages.suppliers.edit',compact('supplier','suppliers'));
    }

    public function update(Request $request,$id)
    {
        $supplier=Salary::find($id);
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
        return redirect()->back()->with('success','Salary info Updated Successfully..!!');
    }

    public function delete($id)
    {
        Salary::find($id)->delete();
        return redirect()->back()->with('success','Salary Deleted Successfully..!!');
    }
}
