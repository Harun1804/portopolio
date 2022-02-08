<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [AdminController::class,'home'])->name('home');

Route::get('login',[AuthController::class,'loginPage'])->name('login');
Route::post('login',[AuthController::class,'login'])->name('login.verify');
Route::get('logout',[AuthController::class,'logout'])->name('logout');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function(){
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
});
