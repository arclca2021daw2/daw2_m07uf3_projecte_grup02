<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socis', function (Blueprint $table) {
            $table->id();
            $table->string('NIF');
            $table->string('nom_cognoms');
            $table->string('adresa');
            $table->string('poblacio');
            $table->string('comarca');
            $table->string('tel_fixe');
            $table->string('tel_mobil');
            $table->string('email');
            $table->string('data_alta');
            $table->string('quota_mensual');
            $table->string('aportacio_anual');
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
        Schema::dropIfExists('socis');
    }
}
