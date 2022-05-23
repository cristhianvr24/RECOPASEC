<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsejoComunalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consejo_comunal', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->bigInteger('comunidad_id')->unsigned();
            $table->timestamps();
            //relaciones
            $table->foreign('comunidad_id')->references('id')->on('comunidad')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consejo_comunal');
    }
}
