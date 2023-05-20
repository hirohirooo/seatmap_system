<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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

Route::middleware('auth')->group(function(){
    Route::get('admin',[AdminController::class,'index'])->name('admin.index');
    Route::get('admin/{seat_id}',[AdminController::class,'edit'])->name('admin.edit.{seat_id}');
    Route::post('admin/{seat_id}',[AdminController::class,'delete'])->name('delete.{seat_id}');
    Route::get('admin/edit/set',[AdminController::class,'set'])->name('admin.set');
    Route::get('admin/edit/set/new',[AdminController::class,'newstudent'])->name('admin.new');
    Route::post('admin/edit/set/new',[AdminController::class,'create'])->name('user.create');
    Route::get('admin/edit/set/{user_id}',[AdminController::class,'user_edit'])->name('user.admin.edit');
    Route::delete('admin/edit/set/{user_id}',[AdminController::class,'user_delete'])->name('user.admin.delete');
});

Route::get('logout',[LoginController::class,'logout'])->name('logout');
