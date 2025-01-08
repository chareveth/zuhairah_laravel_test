<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Insert products into the 'products' table
        DB::table('products')->insert([
            [
                'name' => 'C',
                'price' => 56.89,
                'details' => 'Details of product C',
                'publish' => 'Yes',
            ],
            [
                'name' => 'B',
                'price' => 23.33,
                'details' => 'B detail',
                'publish' => 'Yes',
            ],
            [
                'name' => 'A',
                'price' => 60.56,
                'details' => 'A detail .....',
                'publish' => 'No',
            ],
        ]);
    }
}
