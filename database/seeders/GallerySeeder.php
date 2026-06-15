<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $images = ['gal1.jpg', 'preview.jpg'];

        foreach ($images as $filename) {
            $src = public_path("images/gallery/{$filename}");
            if (file_exists($src)) {
                Storage::disk('public')->put("gallery/{$filename}", file_get_contents($src));
            }

            Gallery::firstOrCreate(['image' => "gallery/{$filename}"]);
        }
    }
}
