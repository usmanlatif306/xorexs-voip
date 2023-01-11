<?php

namespace App\Services;

/**
 * Class PackageService
 * @package App\Services
 */
class PackageService
{
    /**
     * Stripe product description from request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function description($request)
    {
        return 'Number of Lines: ' . $request->input('lines') . ', Number of Minutes: ' . $request->input('minutes') . ', Billing Period: ' . $request->input('period');
    }

    /**
     * Stripe product description from request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function package_body($request)
    {
        return [
            'name' => $request->input('name'),
            'description' => $this->description($request),
            'active' => $request->input('status') == 1 ? true : false,
            'metadata' => [
                'number of lines' => $request->input('lines'),
                'number of minutes' => $request->input('minutes'),
                'billing period' => $request->input('period'),
            ]
        ];
    }


    /**
     * Create stripe price.
     *
     * @param  string $price
     * @param  string $product_id
     * @return object
     */
    public function price($price, $product_id)
    {
        return stripe()->prices->create([
            'unit_amount' => $price * 100,
            'currency' => 'usd',
            'product' => $product_id,
        ]);
    }
}
