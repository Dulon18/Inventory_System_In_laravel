<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    function list()
    {
        return view('pages.employee.list');
    }
    function create()
    {
        return view('pages.employee.create');
    }
}
