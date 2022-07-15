<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('profile_pic', 255)->nullable();
            $table->string('gender', 255)->nullable();
            $table->string('country', 255)->nullable();
            $table->string('district', 255)->nullable();
            $table->string('village', 255)->nullable();
            $table->string('contact_no', 255)->nullable();
            $table->string('address_line_one', 255)->nullable();
            $table->string('address_line_two', 255)->nullable();
            $table->string('email')->unique();
            $table->string('verification_code')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('is_verified')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
