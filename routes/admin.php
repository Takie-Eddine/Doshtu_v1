<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\ControlController;
use App\Http\Controllers\Client\ManageController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\SettingsController;
use App\Http\Controllers\Client\ToolController;
use App\Http\Controllers\Supplier\SupplierController;
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

////////////////////////////////ADMIN////////////////////////////


/*Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard.dashboard');

////////////////////////////////ADMIN////////////////////////////





////////////////////////////////CLIENT////////////////////////////


Route::get('/client',[ClientController::class,'index'])->name('client.client');

////////////////////////////PRODUCT////////////////////////////
Route::group(['prefix' => 'products'],function(){

    Route::get('/',[ProductController::class,'shop'])->name('client.product.index');
    Route::get('/details',[ProductController::class,'details'])->name('client.product.details');
    Route::get('/wishlist',[ProductController::class,'wishlist'])->name('client.product.wishlist');
    Route::get('/checkout',[ProductController::class,'checkout'])->name('client.product.checkout');

});
////////////////////////////PRODUCT////////////////////////////


////////////////////////////SETTINGS////////////////////////////
Route::group(['prefix' => 'settings'],function(){

    Route::get('/',[SettingsController::class,'index'])->name('client.settings.settings');


});
////////////////////////////SETTINGS////////////////////////////



////////////////////////////ORDER////////////////////////////
Route::group(['prefix' => 'orders'],function(){

    Route::get('/',[OrderController::class,'index'])->name('client.order.order');


});

////////////////////////////ORDER////////////////////////////


////////////////////////////CONTROL////////////////////////////
Route::group(['prefix' => 'control'],function(){

    Route::get('/',[ControlController::class,'index'])->name('client.control.control');


});

////////////////////////////CONTROL////////////////////////////


////////////////////////////MANAGE////////////////////////////
Route::group(['prefix' => 'manage'],function(){

    Route::get('/',[ManageController::class,'index'])->name('client.manage.manage');


});

////////////////////////////MANAGE////////////////////////////



////////////////////////////Tool////////////////////////////

Route::group(['prefix' => 'tool'],function(){

    Route::get('/',[ToolController::class,'index'])->name('client.tools.tool');


});

////////////////////////////TOOL////////////////////////////




////////////////////////////////CLIENT////////////////////////////





////////////////////////////////SUPLIER////////////////////////////


Route::get('/',[SupplierController::class,'index'])->name('supplier.supplier');

////////////////////////////////SUPLIER////////////////////////////

*/
