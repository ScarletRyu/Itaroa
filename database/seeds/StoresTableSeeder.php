<?php

use Illuminate\Database\Seeder;
use App\Store;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $json = File::get('database/data/storeData.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            Store::create(array(
                'name' => $obj->name,
                'photo' => $obj->photo,
                'schedule' => $obj->schedule
            ));
        }

    }
}
