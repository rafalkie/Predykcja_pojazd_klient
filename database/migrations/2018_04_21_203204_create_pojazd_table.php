<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePojazdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pojazd', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('samochod');
            $table->integer('autobus');
            $table->integer('taxi');
            $table->integer('samolot');
            $table->integer('pociag');
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
        Schema::dropIfExists('pojazd');
    }
}
