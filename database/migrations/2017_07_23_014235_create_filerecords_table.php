<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilerecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('filerecords', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('court_id')->unsigned();
            $table->integer('casetype_id')->unsigned();
            $table->string('provinciafk');
            $table->string('distritofk');
            $table->string('corregimientofk');
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('involucrados');
            $table->string('fecha_inicio');
            $table->string('status');
            $table->foreign('court_id')->references('id')->on('court');
            $table->foreign('casetype_id')->references('id')->on('casetype');
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
        Schema::dropIfExists('filerecords');
    }
}
