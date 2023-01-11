<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * showing contact us page
     *
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * showing contact us page
     *
     */
    public function send(Request $request)
    {
        dd($request->all());
    }
}
