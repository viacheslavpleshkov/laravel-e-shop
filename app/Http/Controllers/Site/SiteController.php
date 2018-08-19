<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Subscribe;
use App\Http\Requests\Subscribe as RequestSubscribe;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.pages.index');
    }
    public function contact()
    {
        return view('site.pages.contact');
    }

    public function subscribe(RequestSubscribe $request)
    {
        Subscribe::create(['email' => $request['subscribe']]);
        return redirect()->back();
    }
}
