<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoPasantiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_pasantias', function (Blueprint $table) {
            $table->bigInteger('id_proyecto')->unsigned();
            $table->string('titulo');
            $table->date('fecha_i');
            $table->date('fecha_f');
            $table->bigInteger('tutor_institucional_id')->unsigned();
            $table->bigInteger('departamento_id')->unsigned();
            $table->timestamps();
            //relaciones
            $table->foreign('tutor_institucional_id')->references('id')->on('tutor_institucional')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('departamento_id')->references('id')->on('departamento')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto_pasantias');
    }
}
