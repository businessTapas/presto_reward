<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
            'product_name' => 'tiago',
            'description' => 'cars',
            'selling_price' => '25682.00',
            'mrp_price' => '26000.25',
            'price_range' =>'55555.00-58000.00',
            'catalog_id' => '1',
            'status' => 'active',
            'image' => null,
            ],
            [
            'product_name' => 'ninja',
            'description' => 'bike',
            'selling_price' => '25682.00',
            'mrp_price' => '26000.25',
            'price_range' =>'55555.00-58000.00',
            'catalog_id' => '1',
            'status' => 'active',
            'image' => null,
            ],
            
    ];
    
    foreach ($product as $entity)
    {
        Product::create($entity);
    }
    }
}
