<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Users;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Users::factory(10)->create();
    }
}
