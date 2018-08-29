<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Product;
use App\Subscribe;
use App\Http\Requests\Subscribe as SubscribeRequest;
use App\Setting;
use App\Http\Requests\Contact as ContactRequest;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index()
    {
        $men = Product::where('status', 1)->where('type_id', 1)->orderBy('id', 'desc')->limit(3)->get();
        $women = Product::where('status', 1)->where('type_id', 2)->orderBy('id', 'desc')->limit(3)->get();
        $kids = Product::where('status', 1)->where('type_id', 3)->orderBy('id', 'desc')->limit(3)->get();
        $accessories = Product::where('status', 1)->where('type_id', 4)->orderBy('id', 'desc')->limit(3)->get();
        $setting = Setting::find(1);
        return view('site.pages.index', compact('setting', 'men', 'women', 'kids', 'accessories'));
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
