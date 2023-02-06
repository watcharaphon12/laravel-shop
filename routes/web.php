<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminDataController;
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
//Login
Route::get('login',[LoginController::class,'index'])->name('login');
Route::get('register',[LoginController::class,'register'])->name('register');
Route::post('sent-resgister',[LoginController::class,'sentRegister'])->name('sentResgister');
Route::get('logout',[LoginController::class, 'logout']);
Route::post('sent-login',[LoginController::class,'login']);
//user
Route::get('/',[ProductController::class, 'index'])->middleware('auth');



//admin
Route::middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('admin/dashboard',[AdminController::class,'index']);  
    Route::get('admin/data/users',[AdminDataController::class,'getUsers']);  
});
