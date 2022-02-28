<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\OrdersController;
use App\Http\controllers\ProductsController;
use App\Http\controllers\CustomersController;
use App\Http\controllers\frontend\HomeController;

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


Route::get('/home',[HomeController::class,'home']);





//backend
Route::get('/', function () {
    return view('admin.master');
});

Route::get('admin/orders',[OrdersController::class,'orderlist'])->name('admin.order');
Route::get('admin/orders/add',[OrdersController::class,'orderadd'])->name('admin.order.add');
Route::post('admin/orders/store',[OrdersController::class,'store'])->name('admin.order.store');
Route::get('admin/products',[ProductsController::class,'productlist'])->name('admin.product');
Route::get('admin/products/add',[ProductsController::class,'productadd'])->name('admin.product.add');
Route::post('admin/products/store',[ProductsController::class,'store'])->name('admin.product.store');
Route::get('admin/customers',[CustomersController::class,'customerlist'])->name('admin.customer');
Route::get('admin/customers/add',[CustomersController::class,'customeradd'])->name('admin.customer.add');
Route::post('admin/customers/store',[CustomersController::class,'store'])->name('admin.customer.store');