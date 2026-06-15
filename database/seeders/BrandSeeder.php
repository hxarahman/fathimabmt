<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 10) as $i) {
            $filename = str_pad($i, 2, '0', STR_PAD_LEFT) . '.png';

            $src = public_path("images/brands/{$filename}");
            if (file_exists($src)) {
                Storage::disk('public')->put("brands/{$filename}", file_get_contents($src));
            }

            Brand::firstOrCreate(
                ['image' => "brands/{$filename}"]
            );
        }
    }
}
