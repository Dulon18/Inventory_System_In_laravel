<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\POSController;
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

 //Employee routes----------------------------------------------------------------------------------------

 Route::get('/list',[EmployeeController::class,'list'])->name('employeesList');
 Route::get('/create',[EmployeeController::class,'create'])->name('employeeAdd');
 Route::post('/employee/store',[EmployeeController::class,'store'])->name('employeeStore');
 Route::get('/employee/details/{id}',[EmployeeController::class,'details'])->name('employeeDetails');
 Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('employeeEdit');
 Route::put('/employee/update/{id}',[EmployeeController::class,'update'])->name('employeeUpdate');
 Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->name('employeeDelete');


 //Customer routes----------------------------------------------------------------------------------------

 Route::get('/customer/list',[CustomerController::class,'list'])->name('customerList');
 Route::get('/customer/create',[CustomerController::class,'create'])->name('customerAdd');
 Route::post('/customer/store',[CustomerController::class,'store'])->name('customerStore');
 Route::get('/customer/details/{id}',[CustomerController::class,'details'])->name('customerDetails');
 Route::get('/customer/edit/{id}',[CustomerController::class,'edit'])->name('customerEdit');
 Route::put('/customer/update/{id}',[CustomerController::class,'update'])->name('customerUpdate');
 Route::get('/customer/delete/{id}',[CustomerController::class,'delete'])->name('customerDelete');

 // Supplier route ------------------------------------------------------------------------------------------

 Route::get('/supplier/list',[SupplierController::class,'list'])->name('supplierList');
 Route::get('/supplier/create',[SupplierController::class,'create'])->name('supplierAdd');
 Route::post('/supplier/store',[SupplierController::class,'store'])->name('supplierStore');
 Route::get('/supplier/details/{id}',[SupplierController::class,'details'])->name('supplierDetails');
 Route::get('/supplier/edit/{id}',[SupplierController::class,'edit'])->name('supplierEdit');
 Route::put('/supplier/update/{id}',[SupplierController::class,'update'])->name('supplierUpdate');
 Route::get('/supplier/delete/{id}',[SupplierController::class,'delete'])->name('supplierDelete');

 //salary routes --------------------------------------------------------------------------------------------

 Route::get('/salary/list',[SalaryController::class,'list'])->name('salaryList');
 Route::get('/salary/create',[SalaryController::class,'create'])->name('salaryAdd');
 Route::post('/salary/store',[SalaryController::class,'store'])->name('salaryStore');
 Route::get('/salary/details/{id}',[SalaryController::class,'details'])->name('salaryDetails');
 Route::get('/salary/edit/{id}',[SalaryController::class,'edit'])->name('salaryEdit');
 Route::put('/salary/update/{id}',[SalaryController::class,'update'])->name('salaryUpdate');
 Route::get('/salary/delete/{id}',[SalaryController::class,'delete'])->name('salaryDelete');


//category routes----------------------------------------------------------------------------------------------

Route::get('/category/list',[CategoryController::class,'list'])->name('categoryList');
Route::get('/category/create',[CategoryController::class,'create'])->name('categoryAdd');
Route::post('/category/store',[CategoryController::class,'store'])->name('categoryStore');
Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('categoryEdit');
Route::put('/category/update/{id}',[CategoryController::class,'update'])->name('categoryUpdate');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('categoryDelete');

// All Product routes here----------------------------------------------------------------------------------------------

Route::get('/product/list',[ProductController::class,'list'])->name('productList');
Route::get('/product/create',[ProductController::class,'create'])->name('productAdd');
Route::post('/product/store',[ProductController::class,'store'])->name('productStore');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('productEdit');
Route::put('/product/update/{id}',[ProductController::class,'update'])->name('productUpdate');
Route::get('/product/delete/{id}',[ProductController::class,'delete'])->name('productDelete');
Route::get('/product/details/{id}',[ProductController::class,'details'])->name('productDetails');

// Attendance routes ----------------------------------------------------------------------------------------------------

Route::get('/attendance/list',[AttendanceController::class,'list'])->name('attendanceList');
Route::get('/attendance/take',[AttendanceController::class,'take'])->name('attendanceTake');
Route::post('/attendance/store',[AttendanceController::class,'store'])->name('attendanceStore');
Route::get('/attendance/edit/{id}',[AttendanceController::class,'edit'])->name('attendanceEdit');
Route::post('/attendance/update',[AttendanceController::class,'update'])->name('attendanceUpdate');

//setting routes---------------------------------------------------------------------------------------------------------------------

Route::get('/setting/edit',[SettingController::class,'edit'])->name('settingEdit');
Route::post('/setting/update',[SettingController::class,'update'])->name('settingUpdate');

// Export and Import route------------------------------------------------------------------------------------------------------

Route::get('/product/import',[ProductController::class,'importfrom'])->name('productImport');
Route::post('/product/import',[ProductController::class,'import'])->name('Import');
Route::get('/product/export',[ProductController::class,'export'])->name('productExport');


// POS(Point of Sales)---------------------------------------------------------------------------------------------------------

Route::get('/pos/list',[POSController::class,'list'])->name('posList');









});
