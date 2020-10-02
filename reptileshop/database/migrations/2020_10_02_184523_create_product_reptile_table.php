<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReptileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_reptile', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('product_id');
            $table->string('reptile_species');
            $table->string('reptile_subspecies');
            $table->string('gender');
            $table->integer('age');
            $table->string('health_state');
            $table->string('suitable_for_breeding');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_reptile');
    }
}
