<?php

use Illuminate\Database\Seeder;
use App\Models\Type;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_men = new Type();
        $type_men->name = 'Men';
        $type_men->save();

        $type_women = new Type();
        $type_women->name = 'Women';
        $type_women->save();

        $type_kids = new Type();
        $type_kids->name = 'Kids';
        $type_kids->save();

        $type_accessories = new Type();
        $type_accessories->name = 'Accessories';
        $type_accessories->save();

    }
}
