<?php

namespace App\Http\Controllers\Admin;

use App\Models\Made;
use App\Http\Requests\Made as Request;


class MadeController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Made::all();
        return view('admin.mades.index', compact('main'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Made::create($request->all());
        return redirect()->route('mades.index')->with('success', __('admin.created-success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $main = Made::find($id);
        return view('admin.mades.show', compact('main'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main = Made::find($id);
        return view('admin.mades.edit', compact('main'));
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
        Made::find($id)->update($request->all());
        return redirect()->route('mades.index')->with('success', __('admin.updated-success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Made::find($id)->delete();
        return redirect()->route('mades.index')->with('success', __('admin.information-deleted'));
    }
}
