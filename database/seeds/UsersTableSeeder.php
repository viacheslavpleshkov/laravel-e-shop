<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Factory::create();
		for ($i = 1; $i < 41; $i++) {
			$user = new User();
			$user->name = $faker->name();
			$user->number = $faker->phoneNumber();
			$user->email = $faker->email();
			$user->password = Hash::make(str_random(100));
			$user->role_id = 4;
			$user->save();
		}
	}
}
