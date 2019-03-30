<?php

namespace App\Http\Controllers\Site;

use App\Models\Help;

class HelpController extends BaseController
{
    public function faq()
    {
        $main = Help::find(1);
        return view('site.help.faq', compact('main'));
    }

    public function men()
    {
        $main = Help::find(1);
        return view('site.help.men', compact('main'));
    }

    public function women()
    {
        $main = Help::find(1);
        return view('site.help.women', compact('main'));
    }

    public function kids()
    {
        $main = Help::find(1);
        return view('site.help.kids', compact('main'));
    }

    public function accessories()
    {
        $main = Help::find(1);
        return view('site.help.accessories', compact('main'));
    }

    public function brands()
    {
        $main = Help::find(1);
        return view('site.help.brands', compact('main'));
    }
}
