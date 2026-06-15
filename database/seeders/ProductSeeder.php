<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $hardware  = Category::where('name', 'Hardware')->first();
        $materials = Category::where('name', 'Building Materials')->first();
        $safety    = Category::where('name', 'Safety Items')->first();

        $products = [
            // Hardware
            ['category_id' => $hardware->id,  'name' => 'Hammer',         'name_ar' => 'مطرقة',              'image' => 'products/hammer-500x320.png'],
            ['category_id' => $hardware->id,  'name' => 'Spanner',        'name_ar' => 'مفتاح إنجليزي',     'image' => 'products/spanner-500x320.png'],
            ['category_id' => $hardware->id,  'name' => 'Drill Bit',      'name_ar' => 'مثقاب',              'image' => 'products/a2-500x320.png'],
            ['category_id' => $hardware->id,  'name' => 'Wrench',         'name_ar' => 'مفتاح ربط',          'image' => 'products/a3-500x320.png'],
            ['category_id' => $hardware->id,  'name' => 'Screwdriver Set','name_ar' => 'مجموعة مفكات',       'image' => 'products/a4-500x320.png'],
            ['category_id' => $hardware->id,  'name' => 'Power Tool',     'name_ar' => 'أداة كهربائية',      'image' => 'products/a5-500x320.png'],
            ['category_id' => $hardware->id,  'name' => 'Hand Tool Set',  'name_ar' => 'مجموعة أدوات يدوية', 'image' => 'products/a6-500x320.png'],

            // Building Materials
            ['category_id' => $materials->id, 'name' => 'Plaster',        'name_ar' => 'جبس',                'image' => 'products/plaster-500x320.png'],
            ['category_id' => $materials->id, 'name' => 'Steel Pipe',     'name_ar' => 'أنبوب صلب',          'image' => 'products/b1-500x320.png'],
            ['category_id' => $materials->id, 'name' => 'Aluminium Sheet','name_ar' => 'صفيحة ألومنيوم',     'image' => 'products/b2-500x320.png'],
            ['category_id' => $materials->id, 'name' => 'Galvanised Iron', 'name_ar' => 'حديد مجلفن',        'image' => 'products/b3-500x320.png'],

            // Safety Items
            ['category_id' => $safety->id,   'name' => 'Safety Helmet',  'name_ar' => 'خوذة السلامة',       'image' => 'products/helmet-500x320.png'],
            ['category_id' => $safety->id,   'name' => 'Safety Gloves',  'name_ar' => 'قفازات السلامة',     'image' => 'products/c1-500x320.png'],
            ['category_id' => $safety->id,   'name' => 'Safety Goggles', 'name_ar' => 'نظارات السلامة',     'image' => 'products/c2-500x320.png'],
            ['category_id' => $safety->id,   'name' => 'Safety Vest',    'name_ar' => 'سترة السلامة',       'image' => 'products/c3-500x320.png'],
            ['category_id' => $safety->id,   'name' => 'First Aid Kit',  'name_ar' => 'طقم الإسعافات الأولية','image' => 'products/c4-500x320.png'],
            ['category_id' => $safety->id,   'name' => 'Safety Harness', 'name_ar' => 'حزام السلامة',       'image' => 'products/c5-500x320.png'],
            ['category_id' => $safety->id,   'name' => 'Fire Extinguisher','name_ar' => 'طفاية الحريق',     'image' => 'products/c6-500x320.png'],
            ['category_id' => $safety->id,   'name' => 'Safety Cone',    'name_ar' => 'مخروط السلامة',      'image' => 'products/c7-500x320.png'],
        ];

        foreach ($products as $data) {
            Product::firstOrCreate(
                ['name' => $data['name'], 'category_id' => $data['category_id']],
                $data
            );
        }
    }
}
