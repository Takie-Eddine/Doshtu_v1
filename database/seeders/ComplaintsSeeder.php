<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ComplaintsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();


        Product::all()->each(function($product) use ($faker){

            for ($i=0; $i < rand(1,3) ; $i++) {
                $product->complaints()->create([

                    'title'=> $faker->sentence,
                    'body' => $faker->text,
                    'store_id' => rand(1,20),
                ]);
            }

        });


    }
}
