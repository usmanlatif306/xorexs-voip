<?php

namespace App\Http\Controllers;

use App\Models\AreaCode;
use App\Models\Faq;
use App\Models\Package;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // showing homepage
    public function home()
    {
        $data['packages'] = Package::take(3)->get();
        // $data['codes'] = AreaCode::get();
        $data['faqs'] = Faq::take(4)->get();

        return view('index', compact('data'));
    }

    // showing about page
    public function about()
    {
        return view('about');
    }

    // showing services page
    public function services()
    {
        $data['packages'] = Package::get();
        // $data['codes'] = AreaCode::get();
        return view('services', compact('data'));
    }

    // showing faqs page
    public function faqs()
    {
        $data['faqs'] = Faq::get();

        return view('faq', compact('data'));
    }

    // showing how-it-works page
    public function works()
    {
        return view('work');
    }
}
