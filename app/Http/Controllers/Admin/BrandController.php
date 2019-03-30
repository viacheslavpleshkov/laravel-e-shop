<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Http\Requests\Brand as Request;


class BrandController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Brand::all();
        return view('admin.brands.index', compact('main'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Brand::create([
            'name' => $request->name,
            'images' => $request->file('images')->store('brands','public'),
            'description' => $request->description,
            'url' => $request->url,
            'status' => $request->status,
        ]);
        return redirect()->route('brands.index')->with('success', __('admin.created-success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $main = Brand::find($id);
        return view('admin.brands.show', compact('main'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main = Brand::find($id);
        return view('admin.brands.edit', compact('main'));
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
        Brand::find($id)->update([
            'name' => $request->name,
            'images' => $request->file('images')->store('brands','public'),
            'description' => $request->description,
            'url' => $request->url,
            'status' => $request->status,
        ]);
        return redirect()->route('brands.index')->with('success', __('admin.updated-success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::find($id)->delete();
        return redirect()->route('brands.index')->with('success', __('admin.information-deleted'));
    }
}
