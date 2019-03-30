<?php

namespace App\Http\Controllers\Site;

use App\Models\Brand;
use App\Models\Made;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.pages.cart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product)
    {
        $duplicates = Cart::search(function ($cartItem, $rowId) use ($product) {
            return $cartItem->id === $product->id;
        });
        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success', __('site.cart-success-item-already'));
        }
        $brand = Brand::where('id', $product->brand_id)->first();
        $made = Made::where('id', $product->made_id)->first();
        Cart::add($product->id, $product->name, 1, $product->price, ['images' => $product->images, 'description' => $product->description, 'sale' => $product->sale, 'brand' => $brand, 'made' => $made, 'color' => $product->color, 'trend' => $product->trend, 'url' => $product->url])->associate('App\Product');
        return redirect()->route('cart.index')->with('success', __('site.cart-success-item-added'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success', __('site.cart-success-item-removed'));
    }

    public function emptycart()
    {
        Cart::destroy();
        return redirect()->back();
    }
}
