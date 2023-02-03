<?php

namespace App\Http\Controllers;

use App\Enums\ServiceType;
use App\Models\Faq;
use App\Models\Page;
use App\Models\Service;

class SitemapController extends Controller
{

    public function index()
    {
        $data['pages']['homepage'] = updatedAt('homepage');
        $data['pages']['about_page'] = updatedAt('about_page');
        $data['pages']['services_page'] = updatedAt('services_page');
        $data['pages']['contact_page'] = updatedAt('contact_page');
        $data['pages']['faq_page'] = updatedAt('faq_page');
        $data['pages']['work_page'] = updatedAt('work_page');

        $policyPages = ['terms-conditions', 'privacy-policy', 'cencellation-policy', 'cookies-policy'];

        foreach ($policyPages as $policy) {
            $data['plicies'][$policy] = Page::select('updated_at')->where('slug', $policy)->first()?->updated_at;
        }
        return response()->view('sitemap.index', compact('data'))->header('Content-Type', 'text/xml');
    }
}
