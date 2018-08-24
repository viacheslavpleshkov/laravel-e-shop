<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Subscribe;
use App\Http\Requests\Subscribe as SubscribeRequest;
use App\Setting;
use App\Http\Requests\Contact as ContactRequest;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
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

    public function contactpost(ContactRequest $request)
    {
        return redirect()->back();
    }

    public function subscribe(SubscribeRequest $request)
    {
        Subscribe::create([
            'email' => $request['subscribe'],
            'status' => 1
        ]);
        return redirect()->back();
    }
}
