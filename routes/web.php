<?php

use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/category', CategoryController::class);
Route::resource('/product', ProductController::class);

//Admin Route
Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    //Admin
    Route::get('priyangona/admin/home', [AdminController::class, 'index'])->name('admin.dashboard');

    //Category
    Route::resource('priyangona/admin-category', AdminCategoryController::class);
    //Product
    Route::resource('priyangona/admin-product', AdminProductController::class);
});
