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

class ProductController extends Controller
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

    public function mencategory($url)
    {
        $mencategory = Category::where('url', $url)->where('status', 1)->where('men', 1)->first();
        if (isset($mencategory)) {
            $id = $mencategory->id;
            $title = $mencategory->name;
            $main = Product::where('type_id', 1)->where('status', 1)->where('category_id', $id)->paginate(10);
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('men', 1)->get();
            return view('site.products.mencategory', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function menbrands($url)
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

    public function womencategory($url)
    {
        $mencategory = Category::where('url', $url)->where('status', 1)->where('women', 1)->first();
        if (isset($mencategory)) {
            $id = $mencategory->id;
            $title = $mencategory->name;
            $main = Product::where('type_id', 2)->where('status', 1)->where('category_id', $id)->paginate(10);
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('women', 1)->get();
            return view('site.products.womencategory', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function womenbrands($url)
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

    public function kidscategory($url)
    {
        $mencategory = Category::where('url', $url)->where('status', 1)->where('kids', 1)->first();
        if (isset($mencategory)) {
            $id = $mencategory->id;
            $title = $mencategory->name;
            $main = Product::where('type_id', 3)->where('status', 1)->where('category_id', $id)->paginate(10);
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('kids', 1)->get();
            return view('site.products.kidscategory', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function kidsbrands($url)
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

    public function accessoriescategory($url)
    {
        $mencategory = Category::where('url', $url)->where('status', 1)->where('accessories', 1)->first();
        if (isset($mencategory)) {
            $id = $mencategory->id;
            $title = $mencategory->name;
            $main = Product::where('type_id', 4)->where('status', 1)->where('category_id', $id)->paginate(10);
            $brands = Brand::where('status', 1)->get();
            $category = Category::where('status', 1)->where('accessories', 1)->get();
            return view('site.products.accessoriescategory', compact('main', 'title', 'category', 'brands'));
        } else {
            abort(404);
        }
    }

    public function accessoriesbrands($url)
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

    public function new()
    {
        $main = Product::where('new', 1)->where('status', 1)->paginate(10);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->get();
        return view('site.products.new', compact('main', 'category', 'brands'));
    }

    public function brands()
    {
        $main = Brand::where('status', 1)->paginate(10);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->get();
        return view('site.products.brands', compact('main', 'category', 'brands'));
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
        $main = Product::where('status', 1)->orderBy('sale')->paginate(10);
        $brands = Brand::where('status', 1)->get();
        $category = Category::where('status', 1)->get();
        return view('site.products.sale', compact('main', 'category', 'brands'));
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
