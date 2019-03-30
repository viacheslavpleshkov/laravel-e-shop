<?php

namespace App\Http\Controllers\Admin;

use App\Models\Purchasedgoods;
use App\Http\Requests\Purchasedgoods as Request;
use App\Models\Product;
use App\Models\User;


class PurchasedcommoditiesController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Purchasedgoods::all();
        return view('admin.purchased-commodities.index', compact('main'));
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
        return view('admin.purchased-commodities.create', compact('user', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Purchasedgoods::create($request->all());
        return redirect()->route('purchased-commodities.index')->with('success', __('admin.created-success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $main = Purchasedgoods::find($id);
        return view('admin.purchased-commodities.show', compact('main'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main = Purchasedgoods::find($id);
        $user = User::all();
        $product = Product::where('status', 1)->get();
        return view('admin.purchased-commodities.edit', compact('main', 'user', 'product'));
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
        Purchasedgoods::find($id)->update($request->all());
        return redirect()->route('purchased-commodities.index')->with('success', __('admin.updated-success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Purchasedgoods::find($id)->delete();
        return redirect()->route('purchased-commodities.index')->with('success', __('admin.information-deleted'));
    }
}
