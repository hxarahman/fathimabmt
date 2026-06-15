<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

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
            Category::firstOrCreate(['name' => $data['name']], $data);
        }
    }
}
