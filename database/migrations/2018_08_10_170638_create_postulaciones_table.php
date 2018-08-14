<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulaciones', function (Blueprint $table) {
            $table->increments('idPostulacion');
            $table->timestamps();
            $table->integer('idCandidato')->unsigned();
            $table->foreign('idCandidato')->references('idCandidato')->on('candidatos');
            $table->integer('idApoderado')->unsigned();
            $table->foreign('idApoderado')->references('idApoderado')->on('apoderados');
            $table->date('fechaPost');
            $table->string('motivoPost');
            $table->string('cursoPost');
            $table->string('nombreFunc');
            $table->string('nombreHerm');
            $table->string('cursoHerm');
            $table->integer('prioridad');
            $table->string('nombreEgre');
            $table->string('rutEgre');
            $table->string('dvRutEgre');
            $table->integer('AnoEgre');
            $table->boolean('certificado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postulaciones');
    }
}
