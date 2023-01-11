<?php

namespace App\Http\Controllers\Voip;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * showing user dashboard
     */
    public function index()
    {
        return view('user.dashboard');
    }

    /**
     * showing user profile
     */
    public function profile()
    {
        return view('user.profile');
    }

    // updating details
    public function updateProfile(UserUpdateRequest $request)
    {
        $user = $request->user();
        if ($request->email !== $user->email) {
            $user->update(['is_email_verified' => false]);
        }
        if ($request->phone !== $user->phone) {
            $user->update(['is_phone_verified' => false]);
        }
        $user->update($request->safe()->only(['name', 'email', 'phone']));
        $user->user_details()->updateOrCreate(['user_id' => $user->id], $request->safe()->except(['name', 'email', 'phone']));
        return redirect()->back()->with('success', 'User Details Successfully Updated');
    }
}
