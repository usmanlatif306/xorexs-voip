<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\ContentService;
use App\Traits\FileUpload;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    use FileUpload;

    /**
     * Display a website content page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = (new ContentService())->general();

        return view('admin.content.index', compact('data'));
    }

    /**
     * Update the website content.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        foreach ($data  as $key => $value) {
            if (is_file($value) && setting($key)) {
                $this->deleteFile(setting($key));
            }
            Setting::updateOrCreate([
                'key' => $key
            ], [
                'value' => is_file($value) ? $this->fileUpload($value) : $value ?? ''
            ]);
        }

        return redirect()->back()->with('success', 'Data has been updated!');
    }
}
