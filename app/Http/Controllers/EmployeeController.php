<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    function list()
    {
        $employees = Employee::all();
        return view('pages.employee.list',compact('employees'));
    }
    function create()
    {
        return view('pages.employee.create');
    }

    function store(Request $request)
    {
         
        $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|unique:employees|max:255',
            'nid_no' => 'required|unique:employees|max:255',
            'address' => 'required',
            'phone' => 'required|min:13|max:13',
            'salary' => 'required',
            'city' => 'required',
            'image' => 'required',
            'publish_at' => 'nullable|date',
        ],
         [
            'name.required' => 'Employee name is required',
            'email.required' => 'A email should be required & unique',
        ]
    );


        $filename=null;
        if ($request->hasFile('image'))
        {           
            $file=$request->file('image');
            $filename=date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/storage',$filename);
        }
        
        
        Employee::create([

            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'city'=>$request->city,
            'experience'=>$request->experience,
            'vacation'=>$request->vacation,
            'nid_no'=>$request->nid,
            'salary'=>$request->salary,
            'image'=>$filename

         ]);

         return redirect()->back()->with('success','Employee Added Successfully..!!');
    }
}
