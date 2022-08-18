<?php

use App\Http\Controllers\Supplier\LoginController;
use App\Http\Controllers\Supplier\SupplierController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Supplier Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::group(['namespace' => 'Supplier', 'middleware' => 'guest:supplier', 'prefix' => 'supplier'], function () {

        Route::get('login', [LoginController::class, 'login'])->name('supplier.login');
        Route::post('login', [LoginController::class, 'postLogin'])->name('supplier.post.login');
    });


    Route::group(['namespace' => 'Supplier', 'middleware' => 'auth:supplier', 'prefix' => 'supplier'], function () {

        Route::get('supplier', [SupplierController::class, 'supplier'])->name('supplier.supplier');


    });





    Route::get('logout', [LoginController::class, 'logout'])->name('supplier.logout');

});
