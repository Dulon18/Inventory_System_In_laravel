<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use App\Models\Employee;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $all_attendance=Attendance::select('edit_date')->groupBy('edit_date')->get();
        return view('pages.attendance.list',compact('all_attendance'));
    }
    public function take()
    {
        $employees=Employee::all();
        return view('pages.attendance.takeAttendance',compact('employees'));
    }
    public function store(Request $request)
    {
        //dd($request)->all();
        $date=$request->attendance_date;
        $attendance_date=Attendance::where('attendance_date',$date)->first();
        if($attendance_date)
        {
            return redirect()->back()->with('error','Oops..!! Attendance already Taken..!!');
        }
        else{
            foreach($request->emp_id as $emp_id)
            {
                 Attendance::create([
     
                         'emp_id'=>$emp_id,
                         'attendance_date'=>$request->attendance_date,
                         'attendance_year'=>$request->attendance_year,
                         'edit_date'=>date("d_m_y"),
                         'attendance'=>$request->attendance[$emp_id],
                     ]);
            }
              return redirect()->back()->with('success','Attendance Taken Successfully..!!');

        }
    }

        public function edit($id)
        {
            $employees=Employee::all();
            $date=Attendance::join('employees','attendances.emp_id','employees.id')
            ->select('employees.name','employees.image','attendances.*')
            ->where('edit_date',$id)->get();
            return view('pages.attendance.edit',compact('date','employees'));
        }
}
