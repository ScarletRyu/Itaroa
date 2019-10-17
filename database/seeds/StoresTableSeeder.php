<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
        	'name'=>'HyM',
        	'photo'=>'img/hm.png',
        	'schedule'=>'9:00 - 21:00',

        ]);
    }
}
