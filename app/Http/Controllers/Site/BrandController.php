<?php

namespace App\Http\Controllers\Site;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class BrandController extends BaseController
{

    public function men($url)
    {
        $menbrands = Brand::findurl($url)->status()->first();
        if (isset($menbrands)) {
            $id = $menbrands->id;
            $title = $menbrands->name;
            $main = Product::men()->status()->findbrand($id)->paginate(10);
            $brands = Brand::status()->get();
            $category = Category::status()->men()->get();
            return view('site.products.menbrands', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function women($url)
    {
        $womenbrands = Brand::findurl($url)->status()->first();
        if (isset($womenbrands)) {
            $id = $womenbrands->id;
            $title = $womenbrands->name;
            $main = Product::women()->status()->findbrand($id)->paginate(10);
            $brands = Brand::status()->get();
            $category = Category::status()->women()->get();
            return view('site.products.womenbrands', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function kids($url)
    {
        $menbrands =  Brand::findurl($url)->status()->first();
        if (isset($menbrands)) {
            $id = $menbrands->id;
            $title = $menbrands->name;
            $main = Product::kids()->status()->findbrand($id)->paginate(10);
            $brands = Brand::status()->get();
            $category = Category::status()->kids()->get();
            return view('site.products.kidsbrands', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function accessories($url)
    {
        $menbrands =  Brand::findurl($url)->status()->first();
        if (isset($menbrands)) {
            $id = $menbrands->id;
            $title = $menbrands->name;
            $main = Product::accessories()->status()->findbrand($id)->paginate(10);
            $brands = Brand::status()->get();
            $category = Category::status()->accessories()->get();
            return view('site.products.accessoriesbrands', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function brands()
    {
        $main = Brand::status()->paginate(10);
        $brands = Brand::status()->get();
        $category = Category::status()->get();
        return view('site.products.brands', compact('main', 'category', 'brands'));
    }

    public function brandsurl($url)
    {
        $brandsurl = Brand::findurl($url)->status()->first();
        if (isset($brandsurl)) {
            $id = $brandsurl->id;
            $title = $brandsurl->name;
            $main = Product::status()->findbrand($id)->paginate(10);
            $brands = Brand::status()->get();
            $category = Category::status()->get();
            return view('site.products.brandsurl', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }
}
