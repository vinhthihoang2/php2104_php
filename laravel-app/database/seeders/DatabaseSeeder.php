<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Symfony\Component\HttpKernel\Profiler\Profiler;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create(); // create 10 users

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            ProfilSeeder::class,
        ]);
    }
}
