<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            ['name'=> 'Pending', 'nickname' => 'pending', 'description' => 'Waiting For Payment'],
            ['name'=> 'Possessing', 'nickname' => 'possessing', 'description' => 'Order is Preparing for Delivery'],
            ['name'=> 'On The Way', 'nickname' => 'on-the-way', 'description' => 'Delivery is on The way to Shipping Address'],
            ['name'=> 'Delivered', 'nickname' => 'delivered', 'description' => 'Order Delivered to Customer'],
            ['name'=> 'Canceled', 'nickname' => 'canceled', 'description' => 'Order Canceled!'],
        ];
        OrderStatus::insert($status);
    }
}
