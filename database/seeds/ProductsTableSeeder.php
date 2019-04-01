<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory;
use Faker\Provider\Color;

class ProductsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Factory::create();
		for ($i = 1; $i < 100; $i++) {
			$men = new Product();
			$men->name = $faker->text(15);
			$men->images = 'none';
			$men->description = $faker->text(200);
			$men->type_id = 1;
			$men->category_id = rand(1, 7);;
			$men->price = rand(20, 500);;
			$men->sale = rand(0, 10);
			$men->new = rand(0, 1);
			$men->trend = rand(0, 1);
			$men->color = Color::colorName();;
			$men->url = 'men' . $i;
			$men->brand_id = rand(1, 5);
			$men->made_id = rand(1, 5);
			$men->information = $faker->text(10000);
			$men->specifications = $faker->text(10000);
			$men->user_id = rand(1, 40);
			$men->status = 1;
			$men->save();
		}
		for ($i = 1; $i < 100; $i++) {
			$women = new Product();
			$women->name = $faker->text(15);
			$women->images = 'none';
			$women->description = $faker->text(200);
			$women->type_id = 2;
			$women->category_id = rand(1, 7);;
			$women->price = rand(20, 500);;
			$women->sale = rand(0, 10);
			$women->new = rand(0, 1);
			$women->trend = rand(0, 1);
			$women->color = Color::colorName();;
			$women->url = 'women' . $i;
			$women->brand_id = rand(1, 5);
			$women->made_id = rand(1, 5);
			$women->information = $faker->text(10000);
			$women->specifications = $faker->text(10000);
			$women->user_id = rand(1, 40);
			$women->status = 1;
			$women->save();
		}
		for ($i = 1; $i < 100; $i++) {
			$kids = new Product();
			$kids->name = $faker->text(15);
			$kids->images = 'none';
			$kids->description = $faker->text(200);
			$kids->type_id = 3;
			$kids->category_id = rand(1, 7);;
			$kids->price = rand(20, 500);;
			$kids->sale = rand(0, 10);
			$kids->new = rand(0, 1);
			$kids->trend = rand(0, 1);
			$kids->color = Color::colorName();;
			$kids->url = 'kids' . $i;
			$kids->brand_id = rand(1, 5);
			$kids->made_id = rand(1, 5);
			$kids->information = $faker->text(10000);
			$kids->specifications = $faker->text(10000);
			$kids->user_id = rand(1, 40);
			$kids->status = 1;
			$kids->save();
		}
		for ($i = 1; $i < 100; $i++) {
			$accessories = new Product();
			$accessories->name = $faker->text(15);
			$accessories->images = 'none';
			$accessories->description = $faker->text(200);
			$accessories->type_id = 4;
			$accessories->category_id = rand(1, 7);;
			$accessories->price = rand(20, 500);;
			$accessories->sale = rand(0, 10);
			$accessories->new = rand(0, 1);
			$accessories->trend = rand(0, 1);
			$accessories->color = Color::colorName();;
			$accessories->url = 'accessories' . $i;
			$accessories->brand_id = rand(1, 5);
			$accessories->made_id = rand(1, 5);
			$accessories->information = $faker->text(10000);
			$accessories->specifications = $faker->text(10000);
			$accessories->user_id = rand(1, 40);
			$accessories->status = 1;
			$accessories->save();
		}
	}
}
