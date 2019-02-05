<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres')->comment(' primero, segundo y tercer nombre del alunmno');
            $table->string('apellidos')->comment('Primero y segundo apellido del alumno');
            $table->string('grado')->comment('Grado del alumno');
            $table->string('seccion')->comment('Seccion del alumno');
            $table->timestamps();
        });

        Schema::create('materia_alumnos', function(Blueprint $table){
            $table->increments('id');
            $table->integer('alumno_id')->unsigned()->comment('relacion alumnos');
            $table->integer('materia_id')->unsigned()->comment('relacion alumnos');
            $table->integer('nota_1')->unsigned()->comment('primera nota');
            $table->integer('nota_2')->unsigned()->comment('segunda nota');
            $table->integer('promedio')->unsigned()->comment('promedio de dos notas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materia_alumnos');
        Schema::dropIfExists('alumnos');
    }
}
