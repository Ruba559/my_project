<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Usercontroller;
use App\Http\controllers\Productcontroller;
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

Route::get('/login', function () {
    return view('Login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view('/login','login');
Route::view('/register','register');

Route::post("/login",[Usercontroller::class,'login']);
Route::post("/register",[Usercontroller::class,'register']);
Route::get("/",[Productcontroller::class ,'index']);
Route::get("/detail/{id}",[Productcontroller::class ,'detail']);
Route::get("/search",[Productcontroller::class ,'search']);
Route::post("/add_to_cart",[Productcontroller::class ,'addToCart']);
Route::get("/cartlist",[Productcontroller::class ,'cartlist']);
Route::get("/removecart/{id}",[Productcontroller::class ,'removeCart']);
Route::get("/ordernow",[Productcontroller::class ,'orderNow']);
Route::Post("/orderplace",[Productcontroller::class ,'orderPlace']);
Route::get("/myorders",[Productcontroller::class ,'myOrders']);
