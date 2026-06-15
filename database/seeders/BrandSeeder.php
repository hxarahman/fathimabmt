<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        foreach (range(1, 10) as $i) {
            $filename = str_pad($i, 2, '0', STR_PAD_LEFT) . '.png';

            Brand::firstOrCreate(
                ['image' => "brands/{$filename}"]
            );
        }
    }
}
