<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocisOngsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socis_ongs', function (Blueprint $table) {
            $table->string ('CIF_ONG');
            $table->string ('NIF_soci');
            $table -> foreign('CIF_ONG')->references('CIF')->on('ongs');
            $table -> foreign('NIF_Soci')->references('NIF')->on('socis');
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
        Schema::dropIfExists('socis_ongs');
    }
}
