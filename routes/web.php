<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\frontend\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'guest'], function () {
    // Route::get('/', function () {
    //     return view('welcome');  
    // })->name('home');

    Route::get('/', [FrontendController::class, 'homePage'])->name('frontend.home');
    Route::get('/home', [FrontendController::class, 'homePage'])->name('frontend.home');
    Route::get('/about', [FrontendController::class, 'aboutPage'])->name('about');
    Route::get('/services', [FrontendController::class, 'servicePage'])->name('service');
    Route::get('/vendor-onboarding', [FrontendController::class, 'vendorPage'])->name('vendor');
    Route::post('/vendor-onboarding', [FrontendController::class, 'storeVendor'])->name('vendor.store');
    Route::get('/contact', [FrontendController::class, 'contactPage'])->name('contact');

    Route::group(['prefix' => 'admin'], function () {
        Route::get('login', [LoginController::class, 'showLogin'])->name('login');
        Route::post('login', [LoginController::class, 'login'])->name('login');
    });
});

Route::group(['middleware' => ['auth:admin']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', [DashboardController::class, 'showDashboard'])->name('home');
        Route::get('dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
        Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

        Route::group(['prefix' => 'partners'], function () {
            Route::get('/', [PartnerController::class, 'index'])->name('admin.partner.index');
            Route::post('/filtered', [PartnerController::class, 'indexFiltered'])->name('admin.partner.filtered');
            Route::get('/create', [PartnerController::class, 'create'])->name('admin.partner.create');
            Route::post('/create', [PartnerController::class, 'store'])->name('admin.partner.store');
            Route::get('/{id}/edit', [PartnerController::class, 'edit'])->name('admin.partner.edit');
            Route::post('/{id}/update', [PartnerController::class, 'update'])->name('admin.partner.update');
            Route::get('/{id}/delete', [PartnerController::class, 'delete'])->name('admin.partner.delete');
        });

        Route::group(['prefix' => 'location'], function () {
            Route::get('/', [LocationController::class, 'index'])->name('admin.location.index');
            Route::post('/filtered', [LocationController::class, 'indexFiltered'])->name('admin.location.filtered');
            Route::get('/create', [LocationController::class, 'create'])->name('admin.location.create');
            Route::post('/create', [LocationController::class, 'store'])->name('admin.location.store');
            Route::get('/{id}/edit', [LocationController::class, 'edit'])->name('admin.location.edit');
            Route::post('/{id}/update', [LocationController::class, 'update'])->name('admin.location.update');
            Route::get('/{id}/delete', [LocationController::class, 'delete'])->name('admin.location.delete');
        });

        Route::group(['prefix' => 'vendors'], function () {
            Route::get('/', [VendorController::class, 'index'])->name('admin.vendor.index');
            Route::post('/filtered', [VendorController::class, 'indexFiltered'])->name('admin.vendor.filtered');
            Route::get('/{id}/view', [VendorController::class, 'viewVendor'])->name('admin.vendor.view');
            Route::get('/{id}/delete', [VendorController::class, 'delete'])->name('admin.vendor.delete');
        });
    });
});