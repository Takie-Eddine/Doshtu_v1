<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\ControlController;
use App\Http\Controllers\Client\ManageController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\SettingsController;
use App\Http\Controllers\Client\ToolController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Supplier\SupplierController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {


Route::get('/', [HomeController::class,'signup'])->name('signup.signup');

Route::post('/details', [HomeController::class,'details'])->name('details');

Route::post('store',[HomeController::class,'storeClient'])->name('storeclient');





});
