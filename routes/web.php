<?php

use App\Http\Controllers\LoginController;

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
    Route::get('/dashboard',function(){
        return view('pages.dashboard');
    })->name('dashboard');   

//  Route::get('/',[LoginController::class,'home'])->name('home');

Route::get('/logout',[LoginController::class,'logout'])->name('admin.logout');


});
