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
        $category = Category::where('status', 1)->where('men', 1)->get();
        return view('site.products.men', compact('main', 'category', 'brands'));
    }

    public function menview($url)
    {
        $main = Product::where('url', "$url")->where('type_id', 1)->where('status', 1)->first();
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->where('men', 1)->get();
        return view('site.products.menview', compact('main','brands','category'));
    }

    public function mencategory($url)
    {
        $mencategory = Category::where('url', $url)->where('status', 1)->where('men', 1)->first();
        $id = $mencategory->id;
        $title = $mencategory->name;
        $main = Product::where('type_id', 1)->where('status', 1)->where('category_id', $id)->paginate(20);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->where('men', 1)->get();
        return view('site.products.mencategory', compact('main', 'title', 'category', 'brands'));
    }

    public function menbrands($url)
    {
        $menbrands = Brand::where('url', $url)->where('status', 1)->first();
        $id = $menbrands->id;
        $title = $menbrands->name;
        $main = Product::where('type_id', 1)->where('status', 1)->where('brand_id', $id)->paginate(20);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->where('men', 1)->get();
        return view('site.products.menbrands', compact('main', 'title', 'category', 'brands'));
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
