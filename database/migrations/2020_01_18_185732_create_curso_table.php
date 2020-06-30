<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->Increments('id');
            $table->string('nombre',50);
            $table->unsignedInteger('id_carrera');
            $table->foreign('id_carrera','fk_idcarrera_carrera')->references('id')->on('carrera')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('id_modulo');
            $table->foreign('id_modulo','fk_idmodulo_modulo')->references('id')->on('modulo')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('curso');
    }
}
