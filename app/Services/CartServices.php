<?php

namespace App\Services;

use App\Enums\OrderStatus;
use App\Models\Order;
use Illuminate\Http\Request;

/**
 * Class CartServices
 */
class CartServices
{

    /**
     * redirect user after login or registration
     *
     * @return \Illuminate\Http\Response
     */
    public function redirect()
    {
        // if session cart has orders then updating user_id for that orders
        if (session('user.cart') && count(session('user.cart')) > 0) {
            $orders = Order::whereIn('id', session('user.cart'))->where('status', OrderStatus::UNPAID)->get();
            foreach ($orders  as $order) {
                $order->update(['user_id' => auth()->id()]);
            }
            request()->session()->forget('user.cart');
            return redirect()->route('user.cart');
        }

        return session('redirect') ? redirect(session('redirect')) : redirect()->route('user.dashboard');
    }
}
