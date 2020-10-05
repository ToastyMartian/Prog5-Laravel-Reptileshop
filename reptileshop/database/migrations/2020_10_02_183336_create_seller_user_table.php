<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellerUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('users_id')->unique();
            $table->boolean('verified_seller');
            $table->string('username');
            $table->text('specialties');
            $table->string('seller_website');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seller_user');
    }
}