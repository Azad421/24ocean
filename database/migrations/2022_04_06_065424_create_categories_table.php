<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255)->unique();
            $table->string('slug', 255);
            $table->string('description', 255);
            $table->string('image', 255);
            $table->integer('status')->unsigned();
            $table->timestamps();
            $table->foreign('status')->references('id')->on('category_statuses')->onDelete('cascade');
        });
        DB::table('categories')->insert(['name'=> 'Soaps', 'slug' => Str::slug('Soaps'), 'description' => 'Category For All Soaps', 'image'=>'soap2.jpg', 'status'=> 1]);
        DB::table('categories')->insert(['name'=> 'Bath and body', 'slug' => Str::slug('Bath and body'), 'description' => 'Category For All Bath and body', 'image'=>'soap4.jpg', 'status'=> 1]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
