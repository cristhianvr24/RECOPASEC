<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParroquiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parroqui', function (Blueprint $table) {
            $table->id();
            $table->nombre();
            $table->bigInteger('municipio_id')->unsigned();
            $table->timestamps();
            //relaciones
            $table->foreign('municipio_id')->references('id')->on('municipio')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parroqui');
    }
}
