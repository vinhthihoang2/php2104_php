<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       Product::truncate();

        $data = [];

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'name' => $faker->name,
                'description' => $faker->text,
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'quantity' => $faker->numberBetween(1, 1000),
                'rate' => rand(1, 5),
                'sold' => rand(1, 100),
                'price' => rand(100, 900),
                'user_id' => 1,
                'is_public' => 1,
                'category_id' => rand(1, 4),
                'sale_off' => rand(0, 5)
            ];
        }

       Product::insert($data);
    }
}
