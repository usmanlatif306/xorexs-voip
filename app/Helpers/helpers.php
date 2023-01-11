<?php

// get seeting value

use App\Models\Setting;
use Omnipay\Omnipay;

if (!function_exists('setting')) {
    function setting($setting_name = Null)
    {
        $setting = Setting::select(['key', 'value'])->where('key', $setting_name)->first();

        return $setting ? $setting->value : null;
    }
}

if (!function_exists('updatedAt')) {
    function updatedAt($key)
    {
        return Setting::where('key', $key)->first()?->updated_at;
    }
}

// get package billing period
if (!function_exists('billing_periods')) {
    function billing_periods()
    {
        return [
            'Weekly'         => 'week',
            'Monthly'        => '1 month',
            'Every 3 months' => '3 months',
            'Every 6 months' => '6 months',
            'Yearly'         => 'year',
        ];
    }
}

// get package billing period 
if (!function_exists('billing_duration')) {
    function billing_duration($duration)
    {
        if (str()->contains($duration, 'month')) {
            return (int)explode(' ', $duration)[0];
        }
        return $duration;
    }
}

// get expiring date when subscribing to new package 
if (!function_exists('expired_at')) {
    function expired_at($duration)
    {
        // if duration is for week
        if (str()->contains($duration, 'week')) {
            return now()->addWeek();
        }

        // if duration is for month
        if (str()->contains($duration, 'month')) {
            $months = (int)explode(' ', $duration)[0];
            return now()->addMonths($months);
        }

        // if duration is for year
        if (str()->contains($duration, 'year')) {
            return now()->addYear();
        }
    }
}

// index number with pagination
if (!function_exists('iteration')) {
    function iteration($array, $index)
    {
        return ($array->currentpage() - 1) * $array->perpage() + $index + 1;
    }
}

// check user has subscription or not
if (!function_exists('subscription')) {
    function subscription()
    {
        return request()->user()->subscriptions()->count() > 0 ? true : false;
    }
}
