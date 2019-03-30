<?php

namespace App\Http\Controllers\Site;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends BaseController
{
	public function men($url)
	{
		$men = Category::findurl($url)->status()->men()->first();
		if (isset($men)) {
			$id = $men->id;
			$title = $men->name;
			$main = Product::men()->status()->findcategory($id)->paginate(10);
			$brands = Brand::status()->get();
			$category = Category::status()->men()->get();
			return view('site.products.mencategory', compact('main', 'title', 'category', 'brands'));
		} else {
			abort(404);
		}
	}

	public function women($url)
	{
		$women = Category::findurl($url)->status()->women()->first();
		if (isset($women)) {
			$id = $women->id;
			$title = $women->name;
			$main = Product::women()->status()->findcategory($id)->paginate(10);
			$brands = Brand::status()->get();
			$category = Category::status()->women()->get();
			return view('site.products.womencategory', compact('main', 'title', 'category', 'brands'));
		} else {
			abort(404);
		}
	}

	public function kids($url)
	{
		$kids = Category::findurl($url)->status()->kids()->first();
		if (isset($kids)) {
			$id = $kids->id;
			$title = $kids->name;
			$main = Product::where('type_id', 3)->status()->findcategory($id)->paginate(10);
			$brands = Brand::status()->get();
			$category = Category::status()->kids()->get();
			return view('site.products.kidscategory', compact('main', 'title', 'category', 'brands'));
		} else {
			abort(404);
		}
	}

	public function accessories($url)
	{
		$accessories = Category::findurl($url)->status()->accessories()->first();
		if (isset($accessories)) {
			$id = $accessories->id;
			$title = $accessories->name;
			$main = Product::accessories()->status()->findcategory($id)->paginate(10);
			$brands = Brand::status()->get();
			$category = Category::status()->accessories()->get();
			return view('site.products.accessoriescategory', compact('main', 'title', 'category', 'brands'));
		} else {
			abort(404);
		}
	}

	public function category($url)
	{
		$category = Category::findurl($url)->status()->first();
		if (isset($category)) {
			$id = $category->id;
			$title = $category->name;
			$main = Product::status()->findcategory($id)->paginate(10);
			$brands = Brand::status()->get();
			$category = Category::status()->get();
			return view('site.products.category', compact('main', 'title', 'category', 'brands'));
		} else {
			abort(404);
		}
	}
}
