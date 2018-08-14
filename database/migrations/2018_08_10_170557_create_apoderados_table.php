<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApoderadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apoderados', function (Blueprint $table) {
            $table->increments('idApoderado')->unique();
            $table->timestamps();
            $table->string('nombreApo');
            $table->string('apPatApo');
            $table->string('apMatApo');
            $table->integer('fonoApo');
            $table->string('rutApo');
            $table->string('dvApo');
            $table->string('correoApo')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apoderados');
    }
}
