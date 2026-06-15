<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name'    => 'Hardware',
                'name_ar' => 'أدوات',
                'image'   => 'categories/hardware.png',
            ],
            [
                'name'    => 'Building Materials',
                'name_ar' => 'مواد البناء',
                'image'   => 'categories/material.png',
            ],
            [
                'name'    => 'Safety Items',
                'name_ar' => 'عناصر السلامة',
                'image'   => 'categories/safety.png',
            ],
        ];

        foreach ($categories as $data) {
            $filename = basename($data['image']);
            $src = public_path("images/cats/{$filename}");
            if (file_exists($src)) {
                Storage::disk('public')->put("categories/{$filename}", file_get_contents($src));
            }

            Category::firstOrCreate(['name' => $data['name']], $data);
        }
    }
}
