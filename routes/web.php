<?php

use App\Http\Controllers\IdentityCardController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Models\IdentityCard;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/identity', [IdentityCardController::class, 'index']);
Route::get('/brand', [BrandController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/store', [ProductController::class, 'store']);
Route::get('/product/categories', [ProductController::class, 'showData']);

