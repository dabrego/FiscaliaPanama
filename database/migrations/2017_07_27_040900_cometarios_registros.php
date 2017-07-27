<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CometariosRegistros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios_registros', function (Blueprint $table) {
            $table->integer('id')->unsigned()->increments('id')->index();
            $table->string('comentarios')->unsigned();
            $table->integer('filerecord_id')->unsigned()->index();
            $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
