<?php

namespace App\Http\Controllers\Site;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Made;
use App\Product;
use App\Review;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{

    public function men($url)
    {
        $menbrands = Brand::where('url', $url)->where('status', 1)->first();
        if (isset($menbrands)) {
            $id = $menbrands->id;
            $title = $menbrands->name;
            $main = Product::where('type_id', 1)->where('status', 1)->where('brand_id', $id)->paginate(10);
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('men', 1)->get();
            return view('site.products.menbrands', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function women($url)
    {
        $womenbrands = Brand::where('url', $url)->where('status', 1)->first();
        if (isset($womenbrands)) {
            $id = $womenbrands->id;
            $title = $womenbrands->name;
            $main = Product::where('type_id', 2)->where('status', 1)->where('brand_id', $id)->paginate(10);
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('women', 1)->get();
            return view('site.products.womenbrands', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function kids($url)
    {
        $menbrands = Brand::where('url', $url)->where('status', 1)->first();
        if (isset($menbrands)) {
            $id = $menbrands->id;
            $title = $menbrands->name;
            $main = Product::where('type_id', 3)->where('status', 1)->where('brand_id', $id)->paginate(10);
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('kids', 1)->get();
            return view('site.products.kidsbrands', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function accessories($url)
    {
        $menbrands = Brand::where('url', $url)->where('status', 1)->first();
        if (isset($menbrands)) {
            $id = $menbrands->id;
            $title = $menbrands->name;
            $main = Product::where('type_id', 4)->where('status', 1)->where('brand_id', $id)->paginate(10);
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('accessories', 1)->get();
            return view('site.products.accessoriesbrands', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function brands()
    {
        $main = Brand::where('status', 1)->paginate(10);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->get();
        return view('site.products.brands', compact('main', 'category', 'brands'));
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
}
