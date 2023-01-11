<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponRequest;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.coupons.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponRequest $request)
    {
        // create stripe coupon
        $stripe_coupon = stripe()->coupons->create([
            'percent_off' => $request->input('value'),
            'duration' => 'once',
        ]);
        // create stripe promotion code against coupon code
        stripe()->promotionCodes->create([
            'coupon' => $stripe_coupon->id,
            'code' => $request->input('name')
        ]);
        $data['stripe_coupon_id'] = $stripe_coupon->id;

        // create coupon in db
        Coupon::create($request->validated() + $data);

        return redirect()->route('admin.coupons.index')->with('success', 'New coupons code has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        return view('admin.coupons.show', compact('coupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        return view('admin.coupons.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(CouponRequest $request, Coupon $coupon)
    {
        $coupon->update($request->validated());
        return redirect()->back()->with('success', 'Coupon code has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        // delete stripe coupon code
        stripe()->coupons->delete($coupon->stripe_coupon_id, []);

        // delete from db
        $coupon->delete();
        return redirect()->route('admin.coupons.index')->with('success', 'Coupon code has been deleted');
    }
}
