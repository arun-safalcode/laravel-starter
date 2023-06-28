<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\{
    AdminController,
    AdminProfileController,
    AdminRolesController,
    AdminPermissionsController,
    AdminUsersController
};
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
//Front end Routes
Route::get("/",[HomeController::class,'index']);


//Backend Routes | Admin and Seller Routes
$adminroutes =  function () {

    //Protected Routes
    Route::middleware(['admin'])->group(function () {
        Route::get('/', [AdminController::class,'dashboard'] )->name('admin');
        Route::get('dashboard', [AdminController::class,'dashboard'] )->name('admin.dashboard');
        Route::get('profile', [AdminController::class,'dashboard'] )->name('admin.profile');
        Route::namespace('App\Http\Controllers\backend')->name('admin.')
        ->group(function(){
            Route::resource('roles','AdminRolesController');
            Route::resource('permissions','AdminPermissionsController');
            Route::resource('users','AdminUsersController');
        });

        Route::get('logout', [AdminController::class,'logout'])->name('admin.logout');
    });
    //Public Routes
    Route::get('login', [AdminController::class,'login'])->name('admin.login');
    Route::post('login', [AdminController::class,'login']);
};

Route::group(['prefix' => 'admin'], $adminroutes);