<?php

namespace App\Http\Controllers\Site;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends BaseController
{
    public function men()
    {
        $main = Product::where('type_id', 1)->where('status', 1)->paginate(10);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->where('men', 1)->get();
        return view('site.products.men', compact('main', 'category', 'brands'));
    }

    public function menview($url)
    {
        $main = Product::where('url', "$url")->where('type_id', 1)->where('status', 1)->first();
        if (isset($main)) {
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('men', 1)->get();
            $review = Review::where('product_id', $main->id)->where('status', 1)->get();
            return view('site.products.menview', compact('main', 'brands', 'category', 'review'));
        } else {
            abort(404);
        }
    }

    public function women()
    {
        $main = Product::where('type_id', 2)->where('status', 1)->paginate(10);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->where('women', 1)->get();
        return view('site.products.women', compact('main', 'category', 'brands'));
    }

    public function womenview($url)
    {
        $main = Product::where('url', "$url")->where('type_id', 2)->where('status', 1)->first();
        if (isset($main)) {
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('women', 1)->get();
            $review = Review::where('product_id', $main->id)->where('status', 1)->get();
            return view('site.products.womenview', compact('main', 'brands', 'category', 'review'));
        } else {
            abort(404);
        }
    }

    public function kids()
    {
        $main = Product::where('type_id', 3)->where('status', 1)->paginate(10);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->where('kids', 1)->get();
        return view('site.products.kids', compact('main', 'category', 'brands'));
    }

    public function kidsview($url)
    {
        $main = Product::where('url', "$url")->where('type_id', 3)->where('status', 1)->first();
        if (isset($main)) {
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('kids', 1)->get();
            $review = Review::where('product_id', $main->id)->where('status', 1)->get();
            return view('site.products.kidsview', compact('main', 'brands', 'category', 'review'));
        } else {
            abort(404);
        }
    }

    public function accessories()
    {
        $main = Product::where('type_id', 4)->where('status', 1)->paginate(10);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->where('accessories', 1)->get();
        return view('site.products.accessories', compact('main', 'category', 'brands'));
    }

    public function accessoriesview($url)
    {
        $main = Product::where('url', "$url")->where('type_id', 4)->where('status', 1)->first();
        if (isset($main)) {
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('accessories', 1)->get();
            $review = Review::where('product_id', $main->id)->where('status', 1)->get();
            return view('site.products.accessoriesview', compact('main', 'brands', 'category', 'review'));
        } else {
            abort(404);
        }
    }

    public function new()
    {
        $main = Product::where('new', 1)->where('status', 1)->paginate(10);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->get();
        return view('site.products.new', compact('main', 'category', 'brands'));
    }

    public function trends()
    {
        $main = Product::where('trend', 1)->where('status', 1)->paginate(10);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->get();
        return view('site.products.trends', compact('main', 'category', 'brands'));
    }

    public function sale()
    {
        $main = Product::where('status', 1)->orderBy('sale','ABS')->paginate(10);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->get();
        return view('site.products.sale', compact('main', 'category', 'brands'));
    }

    public function brandsurl($url)
    {
        $brandsurl = Brand::where('url', $url)->where('status', 1)->first();
        if (isset($brandsurl)) {
            $id = $brandsurl->id;
            $title = $brandsurl->name;
            $main = Product::where('status', 1)->where('brand_id', $id)->paginate(10);
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->get();
            return view('site.products.brandsurl', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function products($url)
    {
        $main = Product::where('url', "$url")->where('status', 1)->first();
        if (isset($main)) {
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->get();
            $review = Review::where('product_id', $main->id)->where('status', 1)->get();
            return view('site.products.products', compact('main', 'brands', 'category', 'review'));
        } else {
            abort(404);
        }
    }

    public function review(Request $request, $id)
    {
        $request->validate([
            'text' => 'required|string|max:255',
        ]);
        Review::create([
            'user_id' => Auth::user()->id,
            'product_id' => $id,
            'text' => $request['text'],
            'status' => 1
        ]);
        return redirect()->back();
    }

    public function wishlist($id)
    {
        Wishlist::create([
            'product_id' => $id,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->back();
    }
}
