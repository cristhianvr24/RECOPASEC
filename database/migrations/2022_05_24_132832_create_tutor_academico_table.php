<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorAcademicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_academico', function (Blueprint $table) {
            $table->bigInteger('cedula')->unsigned()->unique();
            $table->string('nombre_1');
            $table->string('nombre_2')->nullable();
            $table->string('apellido_1');
            $table->string('apellido_2');
            $table->string('telefono');
            $table->string('correo')->unique();
            $table->string('condicion');
            $table->bigInteger('especialidad_id')->unsigned();
            
            $table->timestamps();
            //relaciones
            $table->foreign('especialidad_id')->references('id')->on('especialidad')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_academico');
    }
}