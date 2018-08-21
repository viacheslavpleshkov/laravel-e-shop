<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Subscribe;
use App\Http\Requests\Subscribe as SubscribeRequest;
use App\Setting;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::find(1);
        return view('site.pages.index', compact('setting'));
    }

    public function contact()
    {
        $setting = Setting::find(1);
        return view('site.pages.contact', compact('setting'));
    }

    public function contactpost()
    {
        $setting = Setting::find(1);
        return view('site.pages.contact', compact('setting'));
    }

    public function subscribe(SubscribeRequest $request)
    {
        Subscribe::create(['email' => $request['subscribe']]);
        return redirect()->back();
    }
}
