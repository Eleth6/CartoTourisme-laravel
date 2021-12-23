<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug');
            $table->string('nameHotel');
            $table->string('mainImage');
            $table->string('email');
            $table->string('phone');
            $table->string('poste');
            $table->string('cuisine');
            $table->mediumText('adresseHotel');
            $table->mediumText('prixHotel');
            $table->mediumText('summaryHotel');
            $table->longText('textHotel');
            $table->string('latitude');
            $table->string('longitude');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
