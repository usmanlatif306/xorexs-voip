<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Voip\DidController;
use App\Http\Controllers\Voip\DashboardController;
use App\Http\Controllers\Voip\UserPlanController;
use Illuminate\Support\Facades\Route;


// prison routes after login
Route::group(['prefix' => 'user', 'as' => 'user.', 'middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::post('/profile', [DashboardController::class, 'updateProfile'])->name('profile.update');

    // did purchase routes
    Route::group(['prefix' => 'did', 'as' => 'did.'], function () {
        Route::get('/', [DidController::class, 'index'])->name('index');
        Route::get('/cities', [DIDController::class, 'cities'])->name('cities');
        Route::get('/cities/{city}/dids', [DIDController::class, 'dids'])->name('dids');
        Route::get('/{did}/purchase', [DIDController::class, 'purchase'])->name('purchase');
        Route::delete('/{order}/delete', [DIDController::class, 'delete'])->name('delete');
    });

    // Extension Routes
    Route::group(['prefix' => 'extension', 'as' => 'extensions.'], function () {
        Route::get('/', [PrisonController::class, 'extensions'])->name('index');
        Route::post('/', [ExtController::class, 'addExtensionWeb'])->name('add');
    });


    // Route::get('/account', [PrisonController::class, 'account'])->name('user.account');
    // Route::get('/setting', [PrisonController::class, 'setting'])->name('user.setting');
    // Route::put('/setting/update-password', [PrisonController::class, 'updatePassword'])->name('user.setting.password');
    // Route::put('/setting/update-details', [PrisonController::class, 'updateDetails'])->name('user.setting.details');
    // Route::put('/setting/update-prison', [PrisonController::class, 'updatePrisonDetails'])->name('user.setting.prison');


    // My Account
    // Route::get('/profile', [AccountController::class, 'index'])->name('user.profile');
    // Route::get('/profile/update', [AccountController::class, 'edit'])->name('user.account.edit');
    // Route::put('/profile/update', [AccountController::class, 'updateProfile'])->name('user.account.update');
    // Route::put('/profile/update/password', [AccountController::class, 'updatePassword'])->name('user.account.password');

    // Payment Routes
    // Route::group(['prefix' => 'payment', 'as' => 'user.payment.'], function () {
    //     Route::get('/{purchase}', [StripeController::class, 'index'])->name('index');
    //     Route::post('/{purchase}/stripe-payment', [StripeController::class, 'paymentSave'])->name('stripe');
    // });

    Route::get('cart', [CartController::class, 'cart'])->name('cart');
    Route::post('cart', [CartController::class, 'saveRecords'])->name('cart.save');
    Route::get('checkout', [CartController::class, 'checkout'])->name('checkout');
    // apply promo code to cart
    Route::post('coupon', [CartController::class, 'coupon'])->name('coupon');

    // User Plan History
    Route::group(['prefix' => 'plans', 'as' => 'plan.'], function () {
        Route::get('/', [UserPlanController::class, 'index'])->name('index');
    });

    // Call frwarding
    // Route::group(['prefix' => 'call/forwarding'], function () {
    //     Route::get('/', [CallForwardingController::class, 'index'])->name('call_forwarding');
    //     Route::post('/', [CallForwardingController::class, 'setForwarding'])->name('set_call_forwarding');
    //     Route::post('/disable', [CallForwardingController::class, 'disableForwarding'])->name('disable_call_forwarding');
    // });
});
