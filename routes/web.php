<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('login', function () {
    return view('login');
});

Route::get('logout', function () {
	Session::forget('user');
    return redirect('login');
});

// Route::get('login','App\Http\Controllers\UserController@login')->name('login');
Route::post('login', [UserController::class, 'login'])->name('login');
Route::any('/',[ProductController::class,'index'])->name('index');
Route::get('detail/{id}',[ProductController::class,'detail'])->name('detail');
Route::get('search',[ProductController::class,'search'])->name('search');
Route::post('Add-to-cart',[ProductController::class,'AddToCart'])->name('AddToCart');
Route::post('cartItems',[ProductController::class,'cartItems'])->name('cartItems');
Route::get('cartlist',[ProductController::class,'cartlist'])->name('cartlist');
Route::get('removecart/{id}',[ProductController::class,'removeCart'])->name('removecart');
Route::get('ordernow',[ProductController::class,'orderNow'])->name('ordernow');
