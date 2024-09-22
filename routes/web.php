<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AdminController::class,'Login'])->name('login');
Route::get('profile',[AdminController::class,'Dashboard'])->name('dashboard');
Route::post('dologin',[AdminController::class,'doLogin'])->name('dologin');
Route::post('add_product',[AdminController::class,'addProduct'])->name('product.add');
Route::get('product_list',[AdminController::class,'productList'])->name('product.list');
Route::get('edit_product/{productId}',[AdminController::class,'editProduct'])->name('product.edit');
Route::get('view_product/{productId}',[AdminController::class,'viewProduct'])->name('product.view');
Route::post('update_product/{productId}',[AdminController::class,'updateProduct'])->name('product.update');
Route::get('logout',[AdminController::class,'Logout'])->name('logout');