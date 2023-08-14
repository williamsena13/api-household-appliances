<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $brands = [
            'Electrolux', 'Whirlpool', 'Samsung', 'LG', 'Bosch',
            'Miele', 'Consul', 'Fischer', 'Panasonic', 'Sony',
            'Apple', 'Xiaomi', 'Philips', 'Haier',
        ];

        $productsPerBrand = 10;
        $codeId = 1;
        foreach ($brands as $brand) {
            $brandId = DB::table('bands')->where('name', $brand)->value('id');

            for ($i = 1; $i <= $productsPerBrand; $i++) {
                $voltage = $i % 2 === 0 ? 220 : 110; // Alternates between 110 and 220

                DB::table('products')->insert([
                    'code' => 'COD' . str_pad($codeId, 5, '0', STR_PAD_LEFT),
                    'name' => "{$brand} Produto {$i}",
                    'description' => "Descrição do {$brand} Produto {$i}",
                    'voltage' => $voltage,
                    'brand_id' => $brandId,
                ]);

                $codeId++;
            }
        }
    }
}