<?php

use Illuminate\Database\Seeder;
use App\Made;

class MadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mode_china = new Mode();
        $mode_china->name = 'China';
        $mode_china->save();
    }
}
