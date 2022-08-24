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

    Route::group(['namespace' => 'Company', 'middleware' => ['auth:supplier','cors'], 'prefix' => 'company'], function () {
        Route::get('', [\App\Http\Controllers\Company\CompanyController::class, 'company'])->name('company.company');
        Route::get('countries', [\App\Http\Controllers\Company\CountryController::class, 'getStates'])->name('country.states');

        //Route::get('login', [LoginController::class, 'login'])->name('supplier.login');
        Route::post('', [\App\Http\Controllers\Company\CompanyController::class, 'create'])->name('company.post.add');
    });


});
