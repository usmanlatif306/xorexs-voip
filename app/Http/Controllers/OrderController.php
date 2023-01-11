<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Did;
use App\Models\Order;
use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Save Order to DB
    public function saveOrder(Request $request)
    {
        $package = Product::find($request->package_id);
        if (!$package) {
            return response([
                'error' => true,
                'message' => 'No product found'
            ]);
        }
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->id() : null,
            'product_id' => $package->id,
            'price' => $package->price
        ]);

        if (!auth()->user()) {
            $request->session()->push('user.cart', $order->id);
        }
        $request->session()->put('orderId', $order->id);
        return response([
            'error' => false,
            'message' => 'Order has been added!'
        ]);
    }

    // Save Order to DB
    public function orderCity(Request $request)
    {
        $order = Order::find($request->session()->get('orderId'));

        if ($order) {
            $order->update(['area_code_id' => $request->city]);
            return response([
                'error' => false,
                'message' => 'City has been added'
            ]);
        }
        return response([
            'error' => true,
            'message' => 'No Order Found'
        ]);
    }

    // Delete Order
    public function deleteOrder(Order $order)
    {
        // if order is for peckage
        if ($order->product_id) {
            $order->delete();
        } else {
            // order is for did purchase
            Did::find($order->did_id)?->update(['status' => false]);
            // $did = Did::where('id', $order->did_id)->first();
            // $did->update(['status' => false]);
            $order->delete();
        }

        return redirect()->back()->with('success', 'Order deleted successfully');
    }
}
