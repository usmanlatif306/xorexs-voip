<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        if ($response = $this->authenticated($request, $this->guard()->user())) {
            return $response;
        }

        // if auth user is admin then redirect to admin dashboard else redirect to user dashboard
        if ($request->user()->isAdmin()) {
            return  session('redirect') ? redirect(session('redirect')) : redirect()->route('admin.dashboard');
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

            $redirect = session('redirect') ? redirect(session('redirect')) : redirect()->route('user.dashboard');
            return $request->wantsJson()
                ? new JsonResponse([], 204)
                : $redirect;
        }
    }

    /**
     * The user has been authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function authenticated(Request $request, $user)
    {
        if (!$request->user()->status) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('login')->with('error', 'Your account is suspended. Kindly contact with admin to restore your account.');
        }
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $redirect = str()->contains(url()->previous(), 'admin') ? '/admin/login' : '/login';

        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }


        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect($redirect);
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
