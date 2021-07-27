<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

class Pacientes extends Migration{

    public function up(){
        Schema::create('pacientes', function(Blueprint $table){
           $table->id();
           $table->string('dpi');
           $table->string('primerNombre');
           $table->string('segundoNombre');
           $table->string('tercerNombre')->nullable();
           $table->string('primerApellido');
           $table->string('segundoApellido');
           $table->string('apellidoCasada')->nullable();
           $table->string('sexo');
           $table->string('estadoCivil');
           $table->string('direccion');
           $table->string('telefono');
           $table->string('fechaNacimiento');
           $table->string('COVID19Positivo');
           $table->string('fechaContagio');
           $table->string('tipoVacuna')->nullable();
           $table->string('fechaDosis1')->nullable();
           $table->string('fechaDosis2')->nullable();
           $table->string('lugarDeAplicacion')->nullable();
           $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('pacientes');
    }

}
