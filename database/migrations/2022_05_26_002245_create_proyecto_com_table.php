<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoComTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_com', function (Blueprint $table) {
            $table->bigInteger('codigo')->unsigned();
            $table->string('titulo');
            $table->date('fechaI');
            $table->date('fechaF');
            $table->bigInteger('tutor_comunitario');
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
        Schema::dropIfExists('proyecto_com');
    }
}
