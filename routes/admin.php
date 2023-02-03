<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminExtensionController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Admin Auth
Route::get('/admin/login', [AuthController::class, 'showlogin'])->name('admin.login');
Route::get('/admin/forget-password', [AuthController::class, 'forget'])->name('admin.forget');
Route::get('/admin/reset-password/{token}', [AuthController::class, 'reset'])->name('admin.reset');
// 'middleware' => 'admin',
// Admin Routes
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // subscriptions routes
    Route::resource('orders', OrderController::class);

    // subscriptions routes
    Route::resource('subscriptions', SubscriptionController::class)->only(['index', 'show', 'update']);

    // Peckages routes
    Route::resource('packages', PackageController::class);

    // Users routes
    Route::resource('users', UserController::class);

    // coupon codes and discount
    Route::resource('coupons', CouponController::class);

    // Admin Extensions routes
    Route::get('/extensions', [AdminExtensionController::class, 'index'])->name('extensions');
    Route::get('/extensions/{id}', [AdminExtensionController::class, 'show'])->name('extensions.show');
    Route::post('/extensions/did', [AdminExtensionController::class, 'saveDid'])->name('extensions.did');

    // Routes for content
    Route::resource('contents', ContentController::class)->only(['index', 'store']);
    Route::group(['prefix' => 'contents'], function () {
        // services
        // Route::resource('services', ServiceController::class);
        // faqs
        Route::resource('faqs', FaqController::class);
        // policies page
        Route::resource('pages', PageController::class)->only(['edit', 'update']);
    });

    // Routes for seo
    Route::group(['prefix' => 'seo'], function () {
        Route::get('{page}', [SeoController::class, 'edit'])->name('seo.page');
        Route::post('{page}/update', [SeoController::class, 'update'])->name('seo.update');
    });

    // Setting routes
    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function () {
        Route::get('/{type}', [SettingController::class, 'index'])->name('index');
        Route::post('update', [SettingController::class, 'update'])->name('update');
        Route::post('env', [SettingController::class, 'env'])->name('env');
        Route::post('email/test', [SettingController::class, 'email'])->name('email');
    });

    // profile
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('profile/password', [ProfileController::class, 'password'])->name('profile.password');

    // Routes for content
    Route::group(['prefix' => 'content'], function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::post('/navbar/{home}', [HomeController::class, 'navlogo'])->name('nav.update');
        Route::post('/home/{home}', [HomeController::class, 'update'])->name('home.update');
        Route::post('/contact/{contact}', [HomeController::class, 'contactUpdate'])->name('contact.update');
        Route::post('/newsletter/{news}', [HomeController::class, 'newsletter'])->name('news.update');
        Route::post('/testcall/{call}', [HomeController::class, 'testcall'])->name('call.update');

        Route::get('/feature', [FeatureController::class, 'index'])->name('feature');
        Route::post('/feature/{feature}', [FeatureController::class, 'update'])->name('feature.update');
        Route::get('/service', [ServiceController::class, 'index'])->name('service');
        Route::post('/service/{service}', [ServiceController::class, 'update'])->name('service.update');

        Route::post('/test/{test}', [TestController::class, 'update'])->name('test.update');
        Route::get('/about', [AboutController::class, 'index'])->name('about');
        Route::post('/about/{about}', [AboutController::class, 'update'])->name('about.update');
        Route::get('/how-it-work', [WorkController::class, 'index'])->name('work');
        Route::post('/how-it-work/{work}', [WorkController::class, 'update'])->name('work.update');
        // faqs
        Route::resource('faqs', FaqController::class);
    });
});
