<?php

namespace App\Http\Controllers\Site;

use App\Brand;
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
        $setting = Setting::find(1);
        return view('site.pages.index', compact('setting'));
    }

    public function men()
    {
        $main = Product::where('type_id', 1)->where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
         return view('site.pages.men', compact('main','brands'));
    }

    public function women()
    {
        $main = Product::where('type_id', 2)->where('status', 1)->get();
        return view('site.pages.women', compact('main'));
    }

    public function kids()
    {
        $main = Product::where('type_id', 3)->where('status', 1)->get();
        return view('site.pages.kids', compact('main'));
    }

    public function accessories()
    {
        $main = Product::where('type_id', 4)->where('status', 1)->get();
        return view('site.pages.accessories', compact('main'));
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

    public function new()
    {
        $main = Product::where('new', 1)->where('status', 1)->get();
        return view('site.pages.new', compact('main'));

    }

    public function brands()
    {
    }

    public function trends()
    {
    }

    public function sale()
    {
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
