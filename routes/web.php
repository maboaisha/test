<?php

use App\Http\Controllers\TusersController;
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
    return view('welcome');
});
Route::any('/login', [TusersController::class,'login'])->name('login');
Route::any('/loged', [TusersController::class,'loged'])->name('loged');
Route::any('/signin', [TusersController::class,'signin'])->name('signin');
Route::any('/signed', [TusersController::class,'signed'])->name('signed');
Route::any('/resetpassword', [TusersController::class,'resetpassword'])->name('resetpassword');
Route::any('/resetedpassword', [TusersController::class,'resetedpassword'])->name('resetedpassword');