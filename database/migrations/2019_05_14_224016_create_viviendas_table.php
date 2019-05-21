<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViviendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viviendas', function (Blueprint $table) {
            $table-> increments('id');
            $table->integer('dato_id')->unsigned();
            $table->string('manz');
            $table->string('lado')->default('0');
            $table->string('n_viv_listado');
            $table->string('codigo');
            $table->string('calle');
            $table->string('n_catast');
            $table->string('manz_int_sector')->nullable();
            $table->string('edifi_mono_tira')->nullable();
            $table->string('entrada_esca')->nullable();
            $table->string('piso')->nullable();
            $table->string('casa_lote')->nullable();
            $table->string('dpto_hab')->nullable();
            $table->string('tipo_viv');
            $table->string('descripcion')->nullable();
            $table->foreign('dato_id')->references('id')->on('datos')->onDelete('cascade');
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
        Schema::dropIfExists('viviendas');
    }
}
