<?php

namespace Database\Seeders;

use App\Models\Forecast;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ForecastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Forecast::create([
            'item_code' => 'BCR2BCFL216',
            'description' => 'Anode Cap CR 1620',
            'uom' => 'PC',
            'jan' => '',
            'feb' => '',
            'mar' => '',
            'apr' => '',
            'may' => '',
            'jun' => '',
            'jul' => '',
            'aug' => '',
            'sep' => '',
            'oct' => '',
            'nov' => '',
            'des' => '',
        ]);
    }
}
