<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ProductStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = Storage::disk('local')->get('/data/products.json');
        $products = json_decode($json, true);
        foreach ($products as $product){
            \App\Models\Product::query()->updateOrCreate([
                'name' => $product['name'],
                'slug' => Str::slug($product['name']),
                'image' => $product['image'],
                'description' => $product['description'],
                'price' => $product['price'],
                'category' => Category::where('name',$product['category'])->first()['id'],
                'status' => ProductStatus::where('nickname', $product['status'])->first()['id'],
                'stock' =>  $product['stock'],
                'favorites' =>  $product['favorites'],
                'arrival' => $product['arrival'],
            ]);
        }
    }
}
