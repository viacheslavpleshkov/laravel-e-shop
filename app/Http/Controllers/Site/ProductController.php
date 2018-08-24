<?php

namespace App\Http\Controllers\Site;

use App\Brand;
use App\Category;
use App\Http\Controllers\Controller;
use App\Made;
use App\Product;
use App\Setting;

class ProductController extends Controller
{
    public function men()
    {
        $main = Product::where('type_id', 1)->where('status', 1)->paginate(20);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->get();
        return view('site.products.men', compact('main', 'category', 'brands'));
    }

    public function menview($url)
    {
        return view('site.products.simgle');
    }

    public function women()
    {
        $main = Product::where('type_id', 1)->where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->get();
        return view('site.products.men', compact('main', 'category', 'brands'));
    }

    public function kids()
    {
        $main = Product::where('type_id', 1)->where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->get();
        return view('site.products.men', compact('main', 'category', 'brands'));
    }

    public function accessories()
    {
        $main = Product::where('type_id', 1)->where('status', 1)->get();
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->get();
        return view('site.products.men', compact('main', 'category', 'brands'));
    }

    public function new()
    {
        $main = Product::where('new', 1)->where('status', 1)->get();
        return view('site.products.new', compact('main'));
    }

    public function brands()
    {
        $main = Brand::where('status', 1)->get();
        return view('site.products.brands', compact('main'));
    }

    public function trends()
    {
        $main = Product::where('trend', 1)->where('status', 1)->paginate(20);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->get();
        $made = Made::where('status', 1)->get();
        return view('site.products.trends', compact('main', 'brands', 'category', 'made'));
    }

    public function sale()
    {
        $main = Product::where('new', 1)->where('status', 1)->get();
        return view('site.products.new', compact('main'));
    }
}
