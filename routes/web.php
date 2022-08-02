<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/dologin',[LoginController::class,'doLogin'])->name('dologin');

Route::group(['middleware'=>['auth','admin']],function ()
{
    Route::get('/',function(){
        return view('pages.dashboard');
    })->name('dashboard');   

//admin logout
 Route::get('/logout',[LoginController::class,'logout'])->name('admin.logout');

 //Employee routes

 Route::get('/list',[EmployeeController::class,'list'])->name('employeesList');
 Route::get('/create',[EmployeeController::class,'create'])->name('employeeAdd');
 Route::post('/employee/store',[EmployeeController::class,'store'])->name('employeeStore');
 Route::get('/employee/details/{id}',[EmployeeController::class,'details'])->name('employeeDetails');
 Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('employeeEdit');
 Route::put('/employee/update/{id}',[EmployeeController::class,'update'])->name('employeeUpdate');
 Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->name('employeeDelete');


 //Customer routes

 Route::get('/customer/list',[CustomerController::class,'list'])->name('customerList');
 Route::get('/customer/create',[CustomerController::class,'create'])->name('customerAdd');
 Route::post('/customer/store',[CustomerController::class,'store'])->name('customerStore');
 Route::get('/customer/details/{id}',[CustomerController::class,'details'])->name('customerDetails');
 Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customerEdit');
 Route::put('/customer/update/{id}',[CustomerController::class,'update'])->name('customerUpdate');
 Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customerDelete');

 // Supplier route

 Route::get('/supplier/list',[SupplierController::class,'list'])->name('supplierList');
 Route::get('/supplier/create',[SupplierController::class,'create'])->name('supplierAdd');
 Route::post('/supplier/store',[SupplierController::class,'store'])->name('supplierStore');
 Route::get('/supplier/details/{id}',[SupplierController::class,'details'])->name('supplierDetails');
 Route::get('/supplier/edit/{id}',[SupplierController::class,'edit'])->name('supplierEdit');
 Route::put('/supplier/update/{id}',[SupplierController::class,'update'])->name('supplierUpdate');
 Route::get('/supplier/delete/{id}',[SupplierController::class,'delete'])->name('supplierDelete');

});
