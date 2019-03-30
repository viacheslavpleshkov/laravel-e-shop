<?php

namespace App\Http\Controllers\Admin;

use App;
use App\Models\Setting;
use App\Models\Help;
use App\Http\Requests\Help as HelpRequest;
use Illuminate\Http\Request;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin.pages.index');
    }

    public function help()
    {
        $main = Help::find(1);
        return view('admin.pages.help', compact('main'));
    }

    public function helpupdate(HelpRequest $request)
    {
        Help::find(1)->update($request->all());
        return redirect()->route('admin.help')->with('success', __('admin.updated-success'));
    }

    public function settings()
    {
        $main = Setting::find(1);
        return view('admin.pages.settings', compact('main'));
    }

    public function settingsupdate(Request $request)
    {
        $request->validate([
            'subscribe' => 'required|string|email|max:255',
        ]);
        Setting::find(1)->update($request->all());
        return redirect()->route('admin.settings')->with('success', __('admin.updated-success'));
    }
}