<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->increments('idCandidato');
            $table->timestamps();
            $table->integer('idApoderado')->unsigned();
            $table->foreign('idApoderado')->references('idApoderado')->on('apoderados');
            $table->string('nombreCand');
            $table->string('apPatCand');
            $table->string('apNatCand');
            $table->string('rutCand');
            $table->string('dvCand');
            $table->string('parentesco');
            $table->string('region');
            $table->string('provincia');
            $table->string('comuna');
            $table->string('calleCand');
            $table->integer('numero');
            $table->integer('dpto');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
}
