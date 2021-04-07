<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreballadorProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treballador_professionals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
         $table->string('NIF');
            $table->string('carrec');
            $table->string('quantitat_SS');
            $table->string('percentatge_irpf');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treballador_professionals');
    }
}
