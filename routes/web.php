<?php

use App\Http\Controllers\Admin\AjaxController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
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

        Route::group(['prefix' => 'ajax'], function () {
            Route::get('get-category-by-business-type', [AjaxController::class, 'getCategoryByBusinessType'])->name('ajax.get-category-by-business-type');
        });

        Route::group(['prefix' => 'service-category'], function () {
            Route::get('/', [ServiceCategoryController::class, 'index'])->name('admin.service-category.index');
            Route::post('/filtered', [ServiceCategoryController::class, 'indexFiltered'])->name('admin.service-category.filtered');
            Route::get('/create', [ServiceCategoryController::class, 'create'])->name('admin.service-category.create');
            Route::post('/create', [ServiceCategoryController::class, 'store'])->name('admin.service-category.store');
            Route::get('/{id}/edit', [ServiceCategoryController::class, 'edit'])->name('admin.service-category.edit');
            Route::post('/{id}/update', [ServiceCategoryController::class, 'update'])->name('admin.service-category.update');
            Route::get('/{id}/delete', [ServiceCategoryController::class, 'delete'])->name('admin.service-category.delete');
        });

        Route::group(['prefix' => 'service'], function () {
            Route::get('/', [ServiceController::class, 'index'])->name('admin.service.index');
            Route::post('/filtered', [ServiceController::class, 'indexFiltered'])->name('admin.service.filtered');
            Route::get('/create', [ServiceController::class, 'create'])->name('admin.service.create');
            Route::post('/create', [ServiceController::class, 'store'])->name('admin.service.store');
            Route::get('/{id}/edit', [ServiceController::class, 'edit'])->name('admin.service.edit');
            Route::post('/{id}/update', [ServiceController::class, 'update'])->name('admin.service.update');
            Route::get('/{id}/delete', [ServiceController::class, 'delete'])->name('admin.service.delete');
        });

        Route::group(['prefix' => 'project'], function () {
            Route::get('/', [ProjectController::class, 'index'])->name('admin.project.index');
            Route::post('/filtered', [ProjectController::class, 'indexFiltered'])->name('admin.project.filtered');
            Route::get('/create', [ProjectController::class, 'create'])->name('admin.project.create');
            Route::post('/create', [ProjectController::class, 'store'])->name('admin.project.store');
            Route::get('/{id}/edit', [ProjectController::class, 'edit'])->name('admin.project.edit');
            Route::post('/{id}/update', [ProjectController::class, 'update'])->name('admin.project.update');
            Route::get('/{id}/delete', [ProjectController::class, 'delete'])->name('admin.project.delete');
        });

        Route::group(['prefix' => 'team'], function () {
            Route::get('/', [TeamController::class, 'index'])->name('admin.team.index');
            Route::post('/filtered', [TeamController::class, 'indexFiltered'])->name('admin.team.filtered');
            Route::get('/create', [TeamController::class, 'create'])->name('admin.team.create');
            Route::post('/create', [TeamController::class, 'store'])->name('admin.team.store');
            Route::get('/{id}/edit', [TeamController::class, 'edit'])->name('admin.team.edit');
            Route::post('/{id}/update', [TeamController::class, 'update'])->name('admin.team.update');
            Route::get('/{id}/delete', [TeamController::class, 'delete'])->name('admin.team.delete');
        });
    });
});