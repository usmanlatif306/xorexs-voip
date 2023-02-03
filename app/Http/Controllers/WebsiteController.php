<?php

namespace App\Http\Controllers;

use App\Models\AreaCode;
use App\Models\Faq;
use App\Models\Package;
use App\Models\Page;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // showing homepage
    public function home()
    {
        load_seo('homepage');
        $data['packages'] = Package::take(3)->get();
        // $data['codes'] = AreaCode::get();
        $data['faqs'] = Faq::take(4)->get();

        return view('index', compact('data'));
    }

    // showing about page
    public function about()
    {
        load_seo('about_page');
        return view('about');
    }

    // showing services page
    public function services()
    {
        load_seo('services_page');
        $data['packages'] = Package::get();
        // $data['codes'] = AreaCode::get();
        return view('services', compact('data'));
    }

    // showing faqs page
    public function faqs()
    {
        load_seo('faq_page');
        $data['faqs'] = Faq::get();

        return view('faq', compact('data'));
    }

    // showing how-it-works page
    public function works()
    {
        load_seo('work_page');
        return view('work');
    }

    // showing policies page
    public function page($page)
    {
        load_seo($page);
        $page = Page::whereSlug($page)->first();

        return view('page', compact('page'));
    }
}
