<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
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
 Route::get('/employee/edit/{id}',[EmployeeController::class,'edit'])->name('employeeEdit');
 Route::put('/employee/update/{id}',[EmployeeController::class,'update'])->name('employeeUpdate');
 Route::get('/employee/delete/{id}',[EmployeeController::class,'delete'])->name('employeeDelete');

});
