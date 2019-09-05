<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_offers', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->integer('price');
            $table->text('size');
            $table->text('color');
            $table->text('brand');
            $table->text('description');
            $table->integer('code');
            $table->integer('review');
            $table->text('images');
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
        Schema::dropIfExists('day_offers');
    }
}
