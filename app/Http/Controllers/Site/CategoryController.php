<?php

namespace App\Http\Controllers\Site;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Product;

class CategoryController extends Controller
{
    public function men($url)
    {
        $men = Category::where('url', $url)->where('status', 1)->where('men', 1)->first();
        if (isset($men)) {
            $id = $men->id;
            $title = $men->name;
            $main = Product::where('type_id', 1)->where('status', 1)->where('category_id', $id)->paginate(10);
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('men', 1)->get();
            return view('site.products.mencategory', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function women($url)
    {
        $women = Category::where('url', $url)->where('status', 1)->where('women', 1)->first();
        if (isset($women)) {
            $id = $women->id;
            $title = $women->name;
            $main = Product::where('type_id', 2)->where('status', 1)->where('category_id', $id)->paginate(10);
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('women', 1)->get();
            return view('site.products.womencategory', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function kids($url)
    {
        $kids = Category::where('url', $url)->where('status', 1)->where('kids', 1)->first();
        if (isset($kids)) {
            $id = $kids->id;
            $title = $kids->name;
            $main = Product::where('type_id', 3)->where('status', 1)->where('category_id', $id)->paginate(10);
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('kids', 1)->get();
            return view('site.products.kidscategory', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function accessories($url)
    {
        $accessories = Category::where('url', $url)->where('status', 1)->where('accessories', 1)->first();
        if (isset($accessories)) {
            $id = $accessories->id;
            $title = $accessories->name;
            $main = Product::where('type_id', 4)->where('status', 1)->where('category_id', $id)->paginate(10);
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('accessories', 1)->get();
            return view('site.products.accessoriescategory', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function category($url)
    {
        $category = Category::where('url', $url)->where('status', 1)->first();
        if (isset($category)) {
            $id = $category->id;
            $title = $category->name;
            $main = Product::where('status', 1)->where('category_id', $id)->paginate(10);
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->get();
            return view('site.products.category', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }
}
