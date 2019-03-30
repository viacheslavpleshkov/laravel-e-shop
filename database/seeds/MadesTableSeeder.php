<?php

use Illuminate\Database\Seeder;
use App\Models\Made;

class MadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mode_china = new Made();
        $mode_china->name = 'China';
        $mode_china->status = 1;
        $mode_china->save();

        $mode_poland = new Made();
        $mode_poland->name = 'Poland';
        $mode_poland->status = 1;
        $mode_poland->save();

        $mode_italy = new Made();
        $mode_italy->name = 'Italy';
        $mode_italy->status = 1;
        $mode_italy->save();

        $mode_italy = new Made();
        $mode_italy->name = 'Spain';
        $mode_italy->status = 1;
        $mode_italy->save();

        $mode_russia = new Made();
        $mode_russia->name = 'Russia';
        $mode_russia->status = 1;
        $mode_russia->save();
    }
}
