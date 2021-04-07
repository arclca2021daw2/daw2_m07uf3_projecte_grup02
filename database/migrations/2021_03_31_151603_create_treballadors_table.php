<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreballadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



       /* Schema::table('treballadors',function(Blueprint $table)){

            $table->string('CIF_ong')->unsigned()->after('data_ingres')->nullable();
            $table -> foreign('CIF_ong')->references('CIF')->on('ongs');
        });
            */

        
        Schema::create('treballadors', function (Blueprint $table) {
            
            $table->string('NIF');
            $table->string('nom_cognoms');
            $table->string('adresa');
            $table->string('poblacio');
            $table->string('comarca');
            $table->string('tel_fixe');
            $table->string('tel_mobil');
            $table->string('email');
            $table->string('data_ingres');
            $table->string('CIF_ong')->unsigned()->after('data_ingres')->nullable();
            $table -> foreign('CIF_ong')->references('CIF')->on('ongs');
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
        Schema::dropIfExists('treballadors');
    }
}
