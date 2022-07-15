<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['name'=> 'Soaps', 'slug' => Str::slug('Soaps'), 'description' => 'Category For All Soaps', 'image'=>'soap2.jpg', 'status'=> 1],
            ['name'=> 'Bath and body', 'slug' => Str::slug('Bath and body'), 'description' => 'Category For All Bath and body', 'image'=>'soap4.jpg', 'status'=> 1]
        ];
        Category::insert($category);
    }
}
