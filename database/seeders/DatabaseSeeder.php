<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\SuratSeeder;
use Database\Seeders\JenisSuratSeeder;
use Database\Seeders\DetailSuratSeeder;
use Database\Seeders\InputFormSuratSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            // UserRoleSeeder::class,
            JenisSuratSeeder::class,
            InputFormSuratSeeder::class,
            SuratSeeder::class,
            DetailSuratSeeder::class,
        ]);
    }
}
