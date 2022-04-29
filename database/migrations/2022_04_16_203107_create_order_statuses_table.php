<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_statuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('nickname', 255);
            $table->text('description');
            $table->timestamps();
        });
        DB::table('order_statuses')->insert(['name'=> 'Pending', 'nickname' => 'pending', 'description' => 'Waiting For Payment']);
        DB::table('order_statuses')->insert(['name'=> 'Possessing', 'nickname' => 'possessing', 'description' => 'Order is Preparing for Delivery']);
        DB::table('order_statuses')->insert(['name'=> 'On The Way', 'nickname' => 'on-the-way', 'description' => 'Delivery is on The way to Shipping Address']);
        DB::table('order_statuses')->insert(['name'=> 'Delivered', 'nickname' => 'delivered', 'description' => 'Order Delivered to Customer']);
        DB::table('order_statuses')->insert(['name'=> 'Canceled', 'nickname' => 'canceled', 'description' => 'Order Canceled!']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_statuses');
    }
};
