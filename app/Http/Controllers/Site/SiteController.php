<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Mail\MailShipped;
use App\Product;
use App\Subscribe;
use App\Http\Requests\Subscribe as SubscribeRequest;
use App\Setting;
use App\Http\Requests\Contact as ContactRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function index()
    {
        $men = Product::status()->men()->desc()->limit(3)->get();
        $women = Product::status()->women()->desc()->limit(3)->get();
        $kids = Product::status()->kids()->desc()->limit(3)->get();
        $accessories = Product::status()->accessories()->desc()->limit(3)->get();
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
        Mail::send(new MailShipped($request));
        return redirect()->route('site.contact')->with('success', __('site.contact-success'));
    }
}
