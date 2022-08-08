<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Category;
class POSController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $products=Product::all();
        $customers=Customer::all();
        return view('pages.pos.list',compact('products','customers'));
    }
}
