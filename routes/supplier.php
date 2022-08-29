<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\ControlController;
use App\Http\Controllers\Client\ManageController;
use App\Http\Controllers\Client\OrderController;

use App\Http\Controllers\Client\SettingsController;
use App\Http\Controllers\Client\ToolController;
use App\Http\Controllers\Supplier\AccountController;
use App\Http\Controllers\Supplier\AttributesController;
use App\Http\Controllers\Supplier\ComplaintsController;
use App\Http\Controllers\Supplier\LoginController;
use App\Http\Controllers\Supplier\OptionsController;
use App\Http\Controllers\Supplier\ProductController;
use App\Http\Controllers\Supplier\ProfileController;
use App\Http\Controllers\Supplier\ReapetController;
use App\Http\Controllers\Supplier\RolePermissionsController;
use App\Http\Controllers\Supplier\SupplierController;
use App\Http\Controllers\Supplier\TagsController;
use App\Http\Controllers\Supplier\UsersController;
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








////////////////////////////////SUPLIER////////////////////////////




Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    Route::group(['namespace' => 'Supplier', 'middleware' => 'guest:supplier', 'prefix' => 'supplier'], function () {

        Route::get('login', [LoginController::class, 'login'])->name('supplier.login');
        Route::post('login', [LoginController::class, 'postLogin'])->name('supplier.post.login');
    });


    Route::group(['namespace' => 'Supplier', 'middleware' => 'auth:supplier', 'prefix' => 'supplier'], function () {

        Route::get('/', [SupplierController::class, 'index'])->name('supplier.supplier');

        ////////////////////////////////////////////////PROFILE/////////////////////////////////////////////////////////////////
        Route::group(['prefix' => 'profile', 'middleware'=>'can:profile'], function () {

            Route::get('/', [ProfileController::class, 'profile'])->name('supplier.profile.profile');
            Route::post('/create', [ProfileController::class, 'store'])->name('supplier.profile.create');
            Route::get('/edit/{id}', [ProfileController::class, 'edit'])->name('supplier.profile.edit');
            Route::post('/update/{id}', [ProfileController::class, 'update'])->name('supplier.profile.update');
        });


        ////////////////////////////////////////////////PROFILE/////////////////////////////////////////////////////////////////



        ////////////////////////////////////////////////PRODUCTS/////////////////////////////////////////////////////////////////

        Route::group(['prefix' => 'products', 'middleware'=>'can:products'], function () {

            Route::get('/', [ProductController::class, 'index'])->name('supplier.product.index');
            Route::get('create', [ProductController::class, 'create'])->name('supplier.product.create');
            Route::post('store', [ProductController::class, 'store'])->name('supplier.product.store');
            Route::get('edit/{id}', [ProductController::class, 'edit'])->name('supplier.product.edit');
            Route::post('update/{id}', [ProductController::class, 'update'])->name('supplier.product.update');
            Route::get('delete/{id}', [ProductController::class, 'destroy'])->name('supplier.product.delete');
            Route::get('view/{id}', [ProductController::class, 'view'])->name('supplier.product.view');
            Route::get('deleteimage/{id}',[ProductController::class, 'deleteimage'])->name('supplier.product.edit.deleteimage');
            Route::get('delete/{id}',[ProductController::class, 'delete'])->name('supplier.product.delete');

        });

        ////////////////////////////////////////////////PRODUCT/////////////////////////////////////////////////////////////////


        ////////////////////////////////////////////////Manage/////////////////////////////////////////////////////////////////


        Route::group(['prefix' => 'manage', 'middleware'=>'can:manage'], function () {


             ////////////////////////////////////////////////Roles&Permission/////////////////////////////////////////////////////////////////
            Route::group(['prefix' => 'roles-permission', 'middleware'=>'can:roles-permission'], function () {
                Route::get('/roles-permissions', [RolePermissionsController::class, 'rolepermission'])->name('supplier.manage.role-permissions.index');
                Route::get('/create', [RolePermissionsController::class, 'create'])->name('supplier.manage.role-permissions.create');
                Route::post('/store', [RolePermissionsController::class, 'store'])->name('supplier.manage.role-permissions.store');
                Route::get('/edit/{id}', [RolePermissionsController::class, 'edit'])->name('supplier.manage.role-permissions.edit');
                Route::post('/update/{id}', [RolePermissionsController::class, 'update'])->name('supplier.manage.role-permissions.update');

            });

             ////////////////////////////////////////////////Permission/////////////////////////////////////////////////////////////////



             ////////////////////////////////////////////////Users/////////////////////////////////////////////////////////////////


            Route::group(['prefix' => 'users' , 'middleware'=>'can:users'], function () {
                Route::get('/', [UsersController::class, 'index'])->name('supplier.user.index');
                Route::get('create', [UsersController::class, 'create'])->name('supplier.user.create');
                Route::post('store', [UsersController::class, 'store'])->name('supplier.user.store');
                Route::get('edit/{id}', [UsersController::class, 'edit'])->name('supplier.user.edit');
                Route::post('store/{id}', [UsersController::class, 'update'])->name('supplier.user.update');
                Route::get('view/{id}', [UsersController::class, 'view'])->name('supplier.user.view');
                Route::get('delete/{id}', [UsersController::class, 'delete'])->name('supplier.user.delete');


            });



             ////////////////////////////////////////////////Users/////////////////////////////////////////////////////////////////

        });



        Route::group(['prefix' => 'reapeter' ], function () {
            Route::get('/', [ReapetController::class, 'index'])->name('supplier.reapeter.index');
            Route::get('create', [ReapetController::class, 'create'])->name('supplier.reapeter.create');



        });

        ////////////////////////////////////////////////Manage/////////////////////////////////////////////////////////////////




        ////////////////////////////////////////////////Settings/////////////////////////////////////////////////////////////////

        Route::group(['prefix' => 'settings', 'middleware'=>'can:settings'], function () {




            ////////////////////////////////////////////////Tags/////////////////////////////////////////////////////////////////

            Route::group(['prefix' => 'account', 'middleware'=>'can:account'], function () {
                Route::get('/', [AccountController::class, 'account'])->name('supplier.setting.profile');
                Route::post('update/{id}', [AccountController::class, 'updateaccount'])->name('supplier.setting.profile.update');
                Route::get('security', [AccountController::class, 'security'])->name('supplier.settings.account.security');
                Route::post('update-password/{id}', [AccountController::class, 'updatesecurity'])->name('supplier.settings.account.security.update');

            });

            ////////////////////////////////////////////////Tags/////////////////////////////////////////////////////////////////






            ////////////////////////////////////////////////Tags/////////////////////////////////////////////////////////////////

            // Route::group(['prefix' => 'tags', 'middleware'=>'can:tags'], function () {
            //     Route::get('/', [TagsController::class, 'index'])->name('supplier.tag.index');
            //     Route::get('create', [TagsController::class, 'create'])->name('supplier.tag.create');
            //     Route::post('store', [TagsController::class, 'store'])->name('supplier.tag.store');
            //     Route::get('edit/{id}',[TagsController::class, 'edit']) -> name('supplier.tag.edit');
            //     Route::post('update/{id}',[TagsController::class, 'update']) -> name('supplier.tag.update');
            //     Route::get('delete/{id}',[TagsController::class, 'destroy']) -> name('supplier.tag.delete');


            // });

            ////////////////////////////////////////////////Tags/////////////////////////////////////////////////////////////////


            ////////////////////////////////////////////////Attributes/////////////////////////////////////////////////////////////////

            // Route::group(['prefix' => 'attributes', 'middleware'=>'can:attributes'], function () {
            //     Route::get('/', [AttributesController::class, 'index'])->name('supplier.attribute.index');
            //     Route::get('create', [AttributesController::class, 'create'])->name('supplier.attribute.create');
            //     Route::post('store', [AttributesController::class, 'store'])->name('supplier.attribute.store');
            //     Route::get('edit/{id}',[AttributesController::class, 'edit']) -> name('supplier.attribute.edit');
            //     Route::post('update/{id}',[AttributesController::class, 'update']) -> name('supplier.attribute.update');
            //     Route::get('delete/{id}',[AttributesController::class, 'destroy']) -> name('supplier.attribute.delete');


            // });

            ////////////////////////////////////////////////Attributes/////////////////////////////////////////////////////////////////


            ////////////////////////////////////////////////Option/////////////////////////////////////////////////////////////////

            // Route::group(['prefix' => 'options' , 'middleware'=>'can:options'], function () {
            //     Route::get('/', [OptionsController::class, 'index'])->name('supplier.option.index');
            //     Route::get('create', [OptionsController::class, 'create'])->name('supplier.option.create');
            //     Route::post('store', [OptionsController::class, 'store'])->name('supplier.option.store');
            //     Route::get('edit/{id}',[OptionsController::class, 'edit']) -> name('supplier.option.edit');
            //     Route::post('update/{id}',[OptionsController::class, 'update']) -> name('supplier.option.update');
            //     Route::get('delete/{id}',[OptionsController::class, 'destroy']) -> name('supplier.option.delete');


            // });

            ////////////////////////////////////////////////Option/////////////////////////////////////////////////////////////////




        });


        ////////////////////////////////////////////////Settings/////////////////////////////////////////////////////////////////



        ////////////////////////////////////////////////COMPLAINT/////////////////////////////////////////////////////////////////
        Route::group(['prefix' => 'complaints', 'middleware'=>'can:complaints'], function () {

            Route::get('/', [ComplaintsController::class, 'index'])->name('supplier.complaint.index');
            Route::get('/respond/{id}', [ComplaintsController::class, 'respond'])->name('supplier.complaint.respond');
            Route::post('/create', [ComplaintsController::class, 'create'])->name('supplier.complaint.create');
            Route::get('/newcomplaint', [ComplaintsController::class, 'newcomplaint'])->name('supplier.complaint.newcomplaint');
            Route::post('/send', [ComplaintsController::class, 'send'])->name('supplier.complaint.send');
            Route::get('/view/{id}', [ComplaintsController::class, 'view'])->name('supplier.complaint.view');
        });


        ////////////////////////////////////////////////COMPLAINT/////////////////////////////////////////////////////////////////













        //---------------------------LOGOUT------------------------//
        Route::get('logout', [LoginController::class, 'logout'])->name('supplier.logout');
        //---------------------------LOGOUT------------------------//



    });
});
////////////////////////////////SUPLIER////////////////////////////
