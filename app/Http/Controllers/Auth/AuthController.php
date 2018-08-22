<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App;
use App\Setting;

class AuthController extends Controller
{
    public function policytermsandconditions()
    {
        $main= Setting::find(1);
        return view('auth.policytermsandconditions',compact('main'));
    }
}