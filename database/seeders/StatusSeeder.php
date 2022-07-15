<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['name'=> 'Active', 'nickname' => 'active', 'description' => 'Active'],
            ['name'=> 'Inactive', 'nickname' => 'inactive', 'description' => 'Inactive']
        ];
        Status::insert($status);
    }
}
