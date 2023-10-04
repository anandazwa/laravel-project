<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'kalaya',
            'code'=>'kjhgf56',
            'price'=>50000,
        ]);
        Product::create([
            'name'=>'lily dress',
            'code'=>'fdrxcvjubnhi',
            'price'=>179000,
        ]);
        Product::create([
            'name'=>'sunlight',
            'code'=>'edelwaihrrn',
            'price'=>5000,
        ]);
            Product::create([
                'name'=>'oreo',
                'code'=>'w32fgg5h',
                'price'=>2000,
        ]);
            Product::create([
                'name'=>'sari gandum',
                'code'=>'fduoio',
                'price'=>2000,
        ]);
    }
}
