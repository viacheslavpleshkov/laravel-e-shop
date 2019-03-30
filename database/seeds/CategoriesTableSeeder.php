<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_eshirt = new Category();
        $category_eshirt->name = 'Е-shirt';
        $category_eshirt->url = 'eshirt';
        $category_eshirt->men = 1;
        $category_eshirt->women = 1;
        $category_eshirt->kids = 1;
        $category_eshirt->accessories = 0;
        $category_eshirt->status = 1;
        $category_eshirt->save();

        $category_shorts = new Category();
        $category_shorts->name = 'Shorts';
        $category_shorts->url = 'shorts';
        $category_shorts->men = 1;
        $category_shorts->women = 1;
        $category_shorts->kids = 1;
        $category_shorts->accessories = 0;
        $category_shorts->status = 1;
        $category_shorts->save();

        $category_pants = new Category();
        $category_pants->name = 'Pants';
        $category_pants->url = 'pants';
        $category_pants->men = 1;
        $category_pants->women = 1;
        $category_pants->kids = 1;
        $category_pants->accessories = 0;
        $category_pants->status = 1;
        $category_pants->save();

        $category_jeans = new Category();
        $category_jeans->name = 'Jeans';
        $category_jeans->url = 'jeans';
        $category_jeans->men = 1;
        $category_jeans->women = 1;
        $category_jeans->kids = 1;
        $category_jeans->accessories = 0;
        $category_jeans->status = 1;
        $category_jeans->save();

        $category_dress = new Category();
        $category_dress->name = 'Dress';
        $category_dress->url = 'dress';
        $category_dress->men = 0;
        $category_dress->women = 1;
        $category_dress->kids = 1;
        $category_dress->accessories = 0;
        $category_dress->status = 1;
        $category_dress->save();


        $category_shoes = new Category();
        $category_shoes->name = 'Shoes';
        $category_shoes->url = 'shoes';
        $category_shoes->men = 1;
        $category_shoes->women = 1;
        $category_shoes->kids = 1;
        $category_shoes->accessories = 0;
        $category_shoes->status = 1;
        $category_shoes->save();

        $category_belts = new Category();
        $category_belts->name = 'Belts';
        $category_belts->url = 'belts';
        $category_belts->men = 0;
        $category_belts->women = 0;
        $category_belts->kids = 0;
        $category_belts->accessories = 1;
        $category_belts->status = 1;
        $category_belts->save();

    }
}
