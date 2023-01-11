<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Get the response for a successful password reset.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $response
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendResetResponse(Request $request, $response)
    {
        if ($request->wantsJson()) {
            return new JsonResponse(['message' => trans($response)], 200);
        }
        // if auth user is admin then redirect to admin dashboard else redirect to user dashboard
        if ($request->user()->isAdmin()) {
            return  redirect()->route('admin.dashboard')->with('status', trans($response));
        } else {
            // if session cart has orders then updating user_id for that orders
            if (session('user.cart') && count(session('user.cart')) > 0) {
                $orders = Order::whereIn('id', session('user.cart'))->where('order_status', 'Unpaid')->get();
                foreach ($orders  as $order) {
                    $order->update(['user_id' => auth()->id()]);
                }
                $request->session()->forget('user.cart');
                return redirect()->route('user.cart');
            }

            return redirect($this->redirectPath())
                ->with('status', trans($response));
        }
    }

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
}
