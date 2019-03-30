<?php

namespace App\Http\Controllers\Site;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends BaseController
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
        ]);

        Subscribe::create([
            'email' => $request['subscribe'],
            'status' => 1
        ]);
        return redirect()->back()->with('success-submit', __('site.success-submit'));
    }
}
