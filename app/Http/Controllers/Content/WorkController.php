<?php

namespace App\Http\Controllers\content;

use App\Http\Controllers\Controller;
use App\Models\Content\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $work = Work::get()->first();
        return view('content.work', compact('work'));
    }

    public function update(Work $work, Request $request)
    {
        $work->update($request->all());
        return redirect()->back()->with('success', 'Data has been updated');
    }
}
