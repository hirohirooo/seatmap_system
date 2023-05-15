<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Use App\Http\Controllers\LoginController;

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


Route::get('users',[UserController::class,'index'])->name('user.index');
Route::get('users/{seat_id}',[UserController::class,'edit'])->name('user.edit.{seat_id}');
Route::post('users/{seat_id}',[UserController::class,'store'])->name('user.store.{seat_id}');
Route::get('login',[LoginController::class,'show'])->name('login');
Route::post('login',[LoginController::class,'login'])->name('login.post');

Route::get('admin',[UserController::class,'ad_index'])->name('admin.index');
Route::get('admin/{seat_id}',[UserController::class,'ad_edit'])->name('admin.edit.{seat_id}');
Route::post('admin/{seat_id}',[UserController::class,'delete'])->name('delete.{seat_id}');

//Route::middleware('auth')->group(function(){
//    Route::get('only/login',)
//})
