<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App;
use App\Setting;
use App\Help;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.index');
    }

    public function help()
    {
        $main = Help::find(1);
        return view('admin.pages.help', compact('main'));
    }

    public function helpupdate(Request $request)
    {
        Help::find(1)->update($request->all());
        return redirect()->route('admin.settings')->with('success', __('admin.updated-success'));
    }

    public function settings()
    {
        $main = Setting::find(1);
        return view('admin.pages.settings', compact('main'));
    }

    public function settingsupdate(Request $request)
    {
        $request->validate([
            'subscribe' => 'required|string|email|max:255',
        ]);
        Setting::find(1)->update($request->all());
        return redirect()->route('admin.settings')->with('success', __('admin.updated-success'));
    }
}