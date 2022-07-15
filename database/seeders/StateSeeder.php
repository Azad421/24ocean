<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $state = [
            ['name' => 'Uttar Prodesh', 'zip_code' => '22021', 'country_id' => 1]
        ];
        State::insert($state);
    }
}
