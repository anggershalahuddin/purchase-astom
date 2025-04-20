<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'fk' => 'FK1',
            'cust_code' => 'CGJ79889',
            'ai_code' => 'CGDH267',
            'cust_name' => 'Product 1',
            'conversion' => '100',
            'stock' => ('2000'),
        ]);
        Product::create([
            'fk' => 'FK2',
            'cust_code' => 'ABGCH421',
            'ai_code' => 'AABB234',
            'cust_name' => 'Product 2',
            'conversion' => '100',
            'stock' => ('2000'),
        ]);
        Product::create([
            'fk' => 'FK2',
            'cust_code' => 'KJIOHI78',
            'ai_code' => 'OIJINI89',
            'cust_name' => 'Product 3',
            'conversion' => '100',
            'stock' => ('2000'),
        ]);
        Product::create([
            'fk' => 'FK3',
            'cust_code' => 'KJIOHI14',
            'ai_code' => 'OIJINI14',
            'cust_name' => 'Product 4',
            'conversion' => '100',
            'stock' => ('2000'),
        ]);
        Product::create([
            'fk' => 'FK4',
            'cust_code' => 'KJIOHI13',
            'ai_code' => 'OIJINI13',
            'cust_name' => 'Product 5',
            'conversion' => '100',
            'stock' => ('2000'),
        ]);
        Product::create([
            'fk' => 'FK5',
            'cust_code' => 'KJIOHI12',
            'ai_code' => 'OIJINI12',
            'cust_name' => 'Product 6',
            'conversion' => '100',
            'stock' => ('2000'),
        ]);
        Product::create([
            'fk' => 'FK6',
            'cust_code' => 'KJIOHI11',
            'ai_code' => 'OIJINI11',
            'cust_name' => 'Product 7',
            'conversion' => '100',
            'stock' => ('2000'),
        ]);
    }
}
