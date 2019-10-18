<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $json = File::get('database/data/productsData.json');
        $data = json_decode($json);
        foreach ($data as $obj) {
            Product::create(array(
                'name' => $obj->name,
                'description' => $obj->description,
                'stock' => $obj->stock,
                'price' => $obj->price,
                'photo' => $obj->photo,
                'link' => $obj->link,
                'id_store' => $obj->id_store
            ));
        }
    }
}
