<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecialtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialties', function (Blueprint $table) {
            $table->foreignId('seller_user_id')->unique();
            $table->boolean('breeding_reptiles');
            $table->boolean('breeding_amphibians');
            $table->boolean('producing_supplies');
            $table->boolean('fostering');
            $table->boolean('rescuing');
            $table->boolean('educational');
            $table->boolean('herping');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialties');
    }
}
