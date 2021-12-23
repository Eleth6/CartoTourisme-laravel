<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug');
            $table->string('typeRest');
            $table->string('nameRest');
            $table->string('mainImage');
            $table->string('siteInternet');
            $table->string('phone');
            $table->mediumText('summaryRest');
            $table->mediumText('horairesRest');
            $table->mediumText('adresseRest');
            $table->mediumText('prixRest');
            $table->longText('textRest');
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
        Schema::dropIfExists('restaurants');
    }
}
