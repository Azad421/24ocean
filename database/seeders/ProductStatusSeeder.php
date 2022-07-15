<?php

namespace Database\Seeders;

use App\Models\ProductStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['name'=> 'Active', 'nickname' => 'active', 'description' => 'Product is Active'],
            ['name'=> 'Inactive', 'nickname' => 'inactive', 'description' => 'Product is inactive']
        ];
        ProductStatus::insert($status);
    }
}
