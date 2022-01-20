<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\UserDeleteController;
use App\Http\Controllers\UserProductController;
use App\Http\Controllers\PshowdataController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/admin/registrasi', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/admin/registrasi', [RegisterController::class, 'store'])->middleware('auth');

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/welcome', [WelcomeController::class, 'welcome']);

Route::get('/admin', function() {
    return view('admin.index');
})->middleware('auth');

Route::resource('/admin/registrasi/showdata', UserPostController::class)->middleware('auth');
Route::get('/admin/registrasi/showdata{id}', 'App\Http\Controllers\UserDeleteController@destroy');

Route::get('/admin/product', [UserProductController::class, 'index']);
Route::post('/admin/product', [UserProductController::class, 'store']);

Route::resource('/admin/product/showdata', PshowdataController::class);
Route::get('/admin/product/showdata{id}', 'App\Http\Controllers\PshowdataController@destroy');
Route::get('/admin/product/showdata{id}/edit', 'App\Http\Controllers\PshowdataController@edit');
Route::post('/admin/product/showdata', [PshowdataController::class, 'update']);