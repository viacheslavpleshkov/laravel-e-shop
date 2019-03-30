<?php

namespace App\Http\Controllers\Site;

use App\Models\Purchasedgoods;
use App\Models\User;
use App\Models\Wishlist;
use App\Http\Requests\Profileedit as RequestEdit;
use App\Http\Requests\Profilepassword as RequestPassword;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends BaseController
{
    public function index()
    {
        $main = User::find(Auth::user()->id);
        return view('site.profile.index', compact('main'));
    }

    public function edit($id)
    {
        $main = User::find($id);
        return view('site.profile.edit', compact('main'));
    }

    public function updateedit(RequestEdit $request, $id)
    {
        User::find($id)->update([
            'name' => $request->name,
            'number' => $request->number,
            'email' => $request->email,
        ]);
        return redirect()->route('profile.index')->with('success', __('admin.updated-success'));
    }

    public function password($id)
    {
        $main = User::find($id);
        return view('site.profile.password', compact('main'));
    }

    public function updatepassword(RequestPassword $request, $id)
    {
        if ($request->password === $request->confirmpassword) {
            User::find($id)->update(['password' => Hash::make($request->password)]);
            return redirect()->route('profile.index')->with('success', __('site.profile-password-success'));
        } else {
            return redirect()->route('profile.index')->with('success', __('site.profile-password-error'));
        }
    }

    public function wishlist()
    {
        $main = Wishlist::where('user_id', Auth::user()->id)->get();
        return view('site.profile.wishlist',compact('main'));

    }

    public function wishlistdestroy($id)
    {
        Wishlist::find($id)->delete();
        return redirect()->route('profile.index')->with('success', __('site.information-deleted'));
    }

    public function purchasedcommodities($id)
    {
        $main = Purchasedgoods::where('user_id', $id)->get();
        return view('site.profile.purchasedcommodities',compact('main'));
    }
}
