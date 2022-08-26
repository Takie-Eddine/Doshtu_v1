<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\ControlController;
use App\Http\Controllers\Client\LoginController;
use App\Http\Controllers\Client\ManageController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\SettingsController;
use App\Http\Controllers\Client\ToolController;
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

////////////////////////////////ADMIN////////////////////////////




////////////////////////////////ADMIN////////////////////////////



Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::group(['namespace' => 'Client', 'middleware' => 'guest:client', 'prefix' => 'client'], function () {

        Route::get('login', [LoginController::class, 'login'])->name('client.login');
        Route::post('login', [LoginController::class, 'postLogin'])->name('client.post.login');
    });


    Route::group(['namespace' => 'Client', 'middleware' => 'auth:client', 'prefix' => 'client'], function () {

        Route::get('/client',[ClientController::class,'index'])->name('client.client');



        Route::group(['prefix' => 'products'],function(){

            Route::get('/',[ProductController::class,'shop'])->name('client.product.index');
            Route::get('/details/{slug}',[ProductController::class,'details'])->name('client.product.details');
            Route::get('/importlist',[ProductController::class,'importlist'])->name('client.product.importlist');
            Route::get('/addtoimportlist/{id}',[ProductController::class,'addimportlist'])->name('client.product.addimportlist');
            Route::get('/addedtostore',[ProductController::class,'listproduct'])->name('client.product.listproducts');
            Route::get('/addtostore',[ProductController::class,'addtostore'])->name('client.product.addtostore');
            Route::get('/edit/{slug}',[ProductController::class,'edit'])->name('client.product.edit');
            Route::post('/push',[ProductController::class,'push'])->name('client.product.push');
            Route::get('/editvariants/{id}',[ProductController::class,'editVariant'])->name('client.product.editvariants');
            Route::get('/getproductsbycategory/{id}',[ProductController::class,'getcategory'])->name('client.product.index.getbycategory');
            Route::get('/getproductsbyrating/{id}',[ProductController::class,'getbyrate'])->name('client.product.index.getbyrate');
            Route::get('/getproductsbyprice/{id}',[ProductController::class,'getbyprice'])->name('client.product.index.getbyprice');
            Route::get('/importlist/{id}', [ProductController::class,'destroy'])->name('client.product.importlist.destroy');
        });





        Route::group(['prefix' => 'settings'],function(){

            Route::get('/',[SettingsController::class,'index'])->name('client.settings.settings');


        });




        Route::group(['prefix' => 'orders'],function(){

            Route::get('/',[OrderController::class,'index'])->name('client.order.order');


        });






        Route::group(['prefix' => 'control'],function(){

            Route::get('/',[ControlController::class,'index'])->name('client.control.control');


        });






        Route::group(['prefix' => 'tool'],function(){

            Route::get('/',[ToolController::class,'index'])->name('client.tools.tool');


        });






        Route::group(['prefix' => 'manage'],function(){

            Route::get('/',[ManageController::class,'index'])->name('client.manage.manage');


        });





























        //---------------------------LOGOUT------------------------//
        Route::get('logout', [LoginController::class, 'logout'])->name('client.logout');
        //---------------------------LOGOUT------------------------//

    });


});



////////////////////////////////CLIENT////////////////////////////


/*Route::get('/client',[ClientController::class,'index'])->name('client.client');

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
