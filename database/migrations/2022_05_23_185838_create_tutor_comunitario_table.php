<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTutorComunitarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tutor_comunitario', function (Blueprint $table) {
            $table->bigInteger('cedula')->unsigned()->unique();
            $table->string('nombre_1');
            $table->string('nombre_2')->nullable();
            $table->string('apellido_1');
            $table->string('apellido_2')->nullable();
            $table->string('telefono');
            $table->string('direccion');
            $table->bigInteger('consejo_comunal_id')->unsigned();
            $table->bigInteger('cargo_id')->unsigned();

            $table->timestamps();
            //relaciones
            $table->foreign('consejo_comunal_id')->references('id')->on('consejo_comunal')->onDelete('cascade')->onUpdate('cascade');    
            $table->foreign('cargo_id')->references('id')->on('cargo')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tutor_comunitario');
    }
}
