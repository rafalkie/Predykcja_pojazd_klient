<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOsobaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('osoba', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('wiek');
            $table->integer('plec');
            $table->integer('odleglosc');
            $table->integer('wlasny_samochod');
            $table->integer('wyksztalcenie');
            $table->integer('dochod');
            $table->integer('pojazd_id')->unsigned();
            $table->foreign('pojazd_id')->references('id')->on('pojazd')->onDelete('cascade');
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
        Schema::dropIfExists('osoba');
    }
}
