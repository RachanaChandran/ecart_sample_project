<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsAddSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'name'=>'Tshirt',
            'amount'=>'300.00',
            'description'=>'round neck with long sleeves',
            'image'=>'Product_442645637.jpg',
        ]);
    }
}
