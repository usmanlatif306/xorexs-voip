<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\SeoService;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($page)
    {
        return view('admin.settings.seo', [
            'page' => $page,
            'pages' => (new SeoService)->seoInputFields($page)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $page)
    {
        $data = $request->except('_token');

        foreach ($data as $key => $value) {
            Setting::updateOrCreate([
                'key' => $key
            ], [
                'value' => $value ?? ''
            ]);
        }

        return redirect()->back()->with('status', 'Data saved successfully!');
    }
}
