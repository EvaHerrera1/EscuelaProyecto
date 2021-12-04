<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradoProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grado_profesor', function (Blueprint $table) {
            $table->id();
             
            //Clave foranea de grado 
            $table->unsignedBigInteger('grado_id');
            $table->foreign('grado_id')->references('id')->on('grados')->onDelete('cascade');

            //Clave foranea de profesor
            $table->unsignedBigInteger('profesor_id');
            $table->foreign('profesor_id')->references('id')->on('profesors')->onDelete('cascade');


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
        Schema::dropIfExists('grado_profesor');
    }
}
