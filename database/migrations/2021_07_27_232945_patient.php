<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Patient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function(Blueprint $table){
            $table->id();
            $table->string('dpi');
            $table->string('primerNombre');
            $table->string('segundoNombre');
            $table->string('tercerNombre')->nullable();
            $table->string('primerApellido');
            $table->string('segundoApellido');
            $table->string('apellidoCasada')->nullable();
            $table->string('sexo')->nullable();
            $table->string('estadoCivil')->nullable();
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('fechaNacimiento')->nullable();
            $table->string('COVID19Positivo')->nullable();
            $table->string('fechaContagio')->nullable();
            $table->string('tipoVacuna')->nullable();
            $table->string('fechaDosis1')->nullable();
            $table->string('fechaDosis2')->nullable();
            $table->string('lugarDeAplicacion')->nullable();
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
        Schema::dropIfExists('pacientes');
    }
}


