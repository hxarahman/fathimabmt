<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'info@fathimabmt.com',
            'password' => bcrypt('Admin@1234'),
        ]);

        $this->call([
            TranslationSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            BrandSeeder::class,
            GallerySeeder::class,
        ]);
    }
}
