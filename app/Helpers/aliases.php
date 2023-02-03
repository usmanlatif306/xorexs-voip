<?php

use App\Services\CartServices;
use App\Services\PackageService;
use App\Services\SeoService;

// get stripe instance
if (!function_exists('stripe')) {
    function stripe()
    {
        return new \Stripe\StripeClient(config('services.stripe.secret_key'));
    }
}

// get stripe package service instance
if (!function_exists('package')) {
    function package()
    {
        return (new PackageService());
    }
}

// get cart service instance
if (!function_exists('cart')) {
    function cart()
    {
        return (new CartServices());
    }
}

// load seo service load function
if (!function_exists('load_seo')) {
    function load_seo($page)
    {
        return (new SeoService())->load($page);
    }
}
