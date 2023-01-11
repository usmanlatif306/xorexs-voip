<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordRequest;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * showing profile page
     */
    public function index()
    {
        return view('admin.profile');
    }

    /**
     * update user profile
     * @param  mixed $request
     */
    public function update(ProfileRequest $request)
    {
        $request->user()->update($request->validated());

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    /**
     * update user password
     * @param  mixed $request
     */
    public function password(PasswordRequest $request)
    {
        $request->user()->update(['password' => Hash::make($request->password)]);

        return redirect()->back()->with('success', 'Password updated successfully!');
    }
}
