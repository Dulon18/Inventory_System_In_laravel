<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function list()
    {
        $category=Category::all();
        return view('pages.product.category.list',compact('category'));
    }
    public function create()
    {
        return view('pages.product.category.create');
    }

    public function store(Request $request)
    {
        Category::create([

            'name'=>$request->name,
         ]);

         return redirect()->back()->with('success','Category Added Successfully..!!');
    }

    public function edit($id)
    {
        $category=Category::find($id);
        return view('pages.product.category.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $category=Category::find($id);
        $category->update([
            'name'=>$request->name
        ]);
        return redirect()->back()->with('success','Updated Successfully..!!');
    }

    public function delete($id)
    {
        Category::find($id)->delete();
        return redirect()->back()->with('success','Category Deleted Successfully..!!');
    }
}
