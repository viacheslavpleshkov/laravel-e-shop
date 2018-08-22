<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Help;

class HelpController extends Controller
{
    public function faq()
    {
        $main = Help::all();
        return view('site.help.faq', compact('main'));
    }

    public function men()
    {
        $main = Help::all();
        return view('site.help.men', compact('main'));
    }

    public function women()
    {
        $main = Help::all();
        return view('site.help.women', compact('main'));
    }

    public function kids()
    {
        $main = Help::all();
        return view('site.help.kids', compact('main'));
    }

    public function accessories()
    {
        $main = Help::all();
        return view('site.help.accessories', compact('main'));
    }

    public function brands()
    {
        $main = Help::all();
        return view('site.help.brands', compact('main'));
    }
}
