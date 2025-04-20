<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Material::create([
            'cust_code' => 'CGJ79889',
            'ai_code' => 'CGDH267',
            'cust_name' => 'Material 1',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'ABGCH421',
            'ai_code' => 'AABB234',
            'cust_name' => 'Material 2',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'KJIOHI78',
            'ai_code' => 'OIJINI89',
            'cust_name' => 'Material 3',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'KJIOHI14',
            'ai_code' => 'OIJINI14',
            'cust_name' => 'Material 4',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'KJIOHI13',
            'ai_code' => 'OIJINI13',
            'cust_name' => 'Material 5',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'KJIOHI12',
            'ai_code' => 'OIJINI12',
            'cust_name' => 'Material 6',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'KJIOHI11',
            'ai_code' => 'OIJINI11',
            'cust_name' => 'Material 7',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'KJIOHI99',
            'ai_code' => 'OIJINI99',
            'cust_name' => 'Material 8',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'KJIOHI88',
            'ai_code' => 'OIJINI88',
            'cust_name' => 'Material 9',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'KJIOHI77',
            'ai_code' => 'OIJINI87',
            'cust_name' => 'Material 10',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'KJIOHI76',
            'ai_code' => 'OIJINI86',
            'cust_name' => 'Material 11',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'KJIOHI75',
            'ai_code' => 'OIJINI85',
            'cust_name' => 'Material 12',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'KJIOHI74',
            'ai_code' => 'OIJINI84',
            'cust_name' => 'Material 13',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'KJIOHI73',
            'ai_code' => 'OIJINI83',
            'cust_name' => 'Material 14',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'KJIOHI72',
            'ai_code' => 'OIJINI82',
            'cust_name' => 'Material 15',
            'stock' => ('2000'),
        ]);
        Material::create([
            'cust_code' => 'KJIOHI71',
            'ai_code' => 'OIJINI81',
            'cust_name' => 'Material 16',
            'stock' => ('2000'),
        ]);
    }
}
