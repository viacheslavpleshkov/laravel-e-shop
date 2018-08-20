<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App;
use App\Settings;

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

    public function settings()
    {
        $main = Settings::all();
        return view('admin.pages.settings', compact('main'));
    }

    public function settingsupdate()
    {
        $main = Settings::all();
        return view('admin.pages.settings', compact('main'));
    }
}