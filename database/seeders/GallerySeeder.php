<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $images = ['gal1.jpg', 'preview.jpg'];

        foreach ($images as $filename) {
            Gallery::firstOrCreate(['image' => "gallery/{$filename}"]);
        }
    }
}
