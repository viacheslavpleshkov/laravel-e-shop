<?php

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_gucci = new Brand();
        $category_gucci->name = 'Gucci';
        $category_gucci->images = 'brands/gucci.png';
        $category_gucci->description = 'Gucci is an Italian luxury brand of fashion and leather goods. Gucci was founded by Guccio Gucci in Florence in 1921.';
        $category_gucci->url = 'gucci';
        $category_gucci->status = 1;
        $category_gucci->save();

        $category_tommyhilfiger = new Brand();
        $category_tommyhilfiger->name = 'Tommy Hilfiger';
        $category_tommyhilfiger->images = 'brands/tommyhilfiger.png';
        $category_tommyhilfiger->description = 'Tommy Hilfiger, formerly known as Tommy Hilfiger Corporation and Tommy Hilfiger Inc., is an American multinational corporation that designs and manufactures lower market apparel for men, women and ...';
        $category_tommyhilfiger->url = 'tommyhilfiger';
        $category_tommyhilfiger->status = 1;
        $category_tommyhilfiger->save();

        $category_reserved = new Brand();
        $category_reserved->name = 'Reserved';
        $category_reserved->images = 'brands/reserved.png';
        $category_reserved->description = 'Reserved is a Polish clothing store chain, part of LPP, which has more than 1,700 stores located in 20 countries. The LPP company was established in 1989 and the first stores under the Reserved fashion brand were opened in 1999.';
        $category_reserved->url = 'reserved';
        $category_reserved->status = 1;
        $category_reserved->save();

        $category_zara = new Brand();
        $category_zara->name = 'Zara';
        $category_zara->images = 'brands/zara.png';
        $category_zara->description = 'Zara SA is a Spanish fast fashion retailer based in Arteixo in Galicia. The company was founded in 1975 by Amancio Ortega and Rosalía Mera. It is the main brand of the Inditex group, the world\'s largest apparel retailer.';
        $category_zara->url = 'zara';
        $category_zara->status = 1;
        $category_zara->save();

        $category_oodji = new Brand();
        $category_oodji->name = 'OODJI';
        $category_oodji->images = 'brands/oodji.png';
        $category_oodji->description = 'OGGI is a youth fashion chain operating in Russia and former Soviet countries. OGGI is specialized in the development and production of clothes for girls and young women as well as distribution through a wide network of brand shops.';
        $category_oodji->url = 'oodji';
        $category_oodji->status = 1;
        $category_oodji->save();
    }
}
