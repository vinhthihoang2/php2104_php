<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        $data = [];

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'name' => $faker->name,
                'description' => $faker->text,
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'quantity' => $faker->numberBetween(1, 1000),
                'rate' => rand(1, 5),
                'sold_cnt' => rand(1, 100),
                'is_public' => rand(0,1),
                'price' => rand(100, 900),
                'sale_off' => rand(0, 5),
                'user_id' => 1,
                'category_id' => 1,
            ];
        }

        DB::table('products')->insert($data);
    }
}
