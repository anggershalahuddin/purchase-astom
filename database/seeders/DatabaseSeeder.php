<?php

namespace Database\Seeders;

use App\Models\Material;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UserSeeder::class,
            MaterialSeeder::class,
            // ProductSeeder::class,
            // Tambahkan seeder lainnya di sini.
        ]);
    }
}
