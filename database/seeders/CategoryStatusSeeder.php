<?php

namespace Database\Seeders;

use App\Models\CategoryStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['name'=> 'Active', 'nickname' => 'active', 'description' => 'Category is Active'],
            ['name'=> 'Inactive', 'nickname' => 'inactive', 'description' => 'Category is Active']
        ];
        CategoryStatus::insert($status);
    }
}
