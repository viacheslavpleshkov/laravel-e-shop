<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Made;
use App\Models\Product;
use App\Http\Requests\Product as Request;
use App\Models\Type;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Product::all();
        return view('admin.products.index', compact('main'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Type::all();
        $category = Category::where('status', 1)->get();
        $brand = Brand::where('status', 1)->get();
        $made = Made::where('status', 1)->get();
        return view('admin.products.create', compact('type', 'category', 'brand', 'made'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'images' => $request->file('images')->store('products', 'public'),
            'description' => $request->description,
            'type_id' => $request->type_id,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'sale' => $request->sale,
            'new' => $request->new,
            'trend' => $request->trend,
            'color' => $request->color,
            'url' => $request->url,
            'brand_id' => $request->brand_id,
            'made_id' => $request->made_id,
            'information' => $request->information,
            'specifications' => $request->specifications,
            'user_id' => Auth::user()->id,
            'status' => $request->status
        ]);
        return redirect()->route('products.index')->with('success', __('admin.created-success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $main = Product::find($id);
        return view('admin.products.show', compact('main'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $main = Product::find($id);
        $type = Type::all();
        $category = Category::where('status', 1)->get();
        $brand = Brand::where('status', 1)->get();
        $made = Made::where('status', 1)->get();
        $user = User::all();
        return view('admin.products.edit', compact('main', 'type', 'category', 'brand', 'made', 'user'));
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
        Product::find($id)->update([
            'name' => $request->name,
            'images' => $request->file('images')->store('products', 'public'),
            'description' => $request->description,
            'type_id' => $request->type_id,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'sale' => $request->sale,
            'new' => $request->new,
            'trend' => $request->trend,
            'color' => $request->color,
            'url' => $request->url,
            'brand_id' => $request->brand_id,
            'made_id' => $request->made_id,
            'information' => $request->information,
            'specifications' => $request->specifications,
            'user_id' => $request->user_id,
            'status' => $request->status,
        ]);
        return redirect()->route('products.index')->with('success', __('admin.updated-success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('products.index')->with('success', __('admin.information-deleted'));
    }
}
