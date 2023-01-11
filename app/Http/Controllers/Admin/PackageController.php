<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PackageRequest;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::get();
        return view('admin.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageRequest $request)
    {
        // create stripe product
        $stripe_product = stripe()->products->create(package()->package_body($request));
        $data['stripe_product_id'] = $stripe_product->id;

        // create stripe price
        $stripe_price = package()->price($request->input('price'), $data['stripe_product_id']);
        $data['stripe_price_id'] = $stripe_price->id;

        // create product to db
        Package::create($request->validated() + $data);

        return redirect()->route('admin.packages.index')->with('success', 'Package has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content\Package $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content\Package $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        return view('admin.packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content\Package $package
     * @return \Illuminate\Http\Response
     */
    public function update(PackageRequest $request, Package $package)
    {
        // update stripe product
        $stripe_product = stripe()->products->update($package->stripe_product_id, package()->package_body($request));
        $data['stripe_product_id'] = $stripe_product->id;

        // create new stripe price and linked with package if old price is not equal to new price
        if ($request->input('price') !== $package->price) {
            $stripe_price = package()->price($request->input('price'), $data['stripe_product_id']);
            $data['stripe_price_id'] = $stripe_price->id;
        }


        // update from db
        $package->update($request->validated() + $data);
        return redirect()->route('admin.packages.index')->with('success', 'Package has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        // delete stripe product
        stripe()->products->delete($package->stripe_product_id);

        // delete from db
        $package->delete();
        return redirect()->back()->with('success', 'Package has been deleted');
    }
}
