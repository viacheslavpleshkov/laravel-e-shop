<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use App\Http\Requests\Wishlist as Request;


class WishlistController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Wishlist::all();
        return view('admin.wishlists.index', compact('main'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $product = Product::where('status', 1)->get();
        return view('admin.wishlists.create', compact('user', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Wishlist::create($request->all());
        return redirect()->route('wishlists.index')->with('success', __('admin.created-success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $main = Wishlist::find($id);
        return view('admin.wishlists.show', compact('main'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main = Wishlist::find($id);
        $user = User::all();
        $product = Product::where('status', 1)->get();
        return view('admin.wishlists.edit', compact('main', 'user', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Wishlist::find($id)->update($request->all());
        return redirect()->route('wishlists.index')->with('success', __('admin.updated-success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wishlist::find($id)->delete();
        return redirect()->route('wishlists.index')->with('success', __('admin.information-deleted'));
    }
}
