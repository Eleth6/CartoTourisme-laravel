<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('slug');
            $table->string('titleSite');
            $table->string('mainImage');
            $table->string('typeSite');
            $table->string('locationSite');
            $table->string('email');
            $table->string('phone');
            $table->string('poste');
            $table->mediumText('summarySite');
            $table->mediumText('horairesSite');
            $table->mediumText('adresseSite');
            $table->mediumText('prixSite');
            $table->mediumText('dureeSite');
            $table->longText('textSite');
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
        Schema::dropIfExists('sites');
    }
}
