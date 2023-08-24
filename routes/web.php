<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('login');
});

Route::post('login', [LoginController::class, 'login'])->name('user.login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('forget/Password', [LoginController::class, 'forgetPassword'])->name('forget.password');
Route::post('send/code', [LoginController::class, 'sendotp'])->name('send.code');

Route::group(['prefix' => 'user' , 'middleware' => 'user.login'], function(){
    Route::get('list', [UserController::class, 'index'])->name('user.index');
    Route::get('create', [UserController::class, 'create'])->name('user.create');
    Route::post('store', [UserController::class, 'store'])->name('user.store');
    Route::get('edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('update', [UserController::class, 'update'])->name('user.update');
    Route::get('delete', [UserController::class, 'destroy'])->name('user.delete');
    
});
