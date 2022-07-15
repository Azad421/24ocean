<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Country;
use App\Models\ProductStatus;
use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(OrderStatusSeeder::class);
        $this->call(CategoryStatusSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);

        $this->call(ProductStatusSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
