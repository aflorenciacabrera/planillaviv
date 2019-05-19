<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos', function (Blueprint $table) {
            $table-> increments('id');

            $table->string( 'provincia')->default('18');
            $table->string( 'aglomerado')->default('13');
            $table->string( 'departamento')->default('21');
            $table->string( 'localidad')->default('20');
           
            $table->string( 'area');
            $table->string('fraccion');
            $table->string('radio');
            $table->string( 'sub_grupo');
           
            // Listador
            $table->string('apeynom_listador');
            $table->string( 'fecha_list');

            // Supervisor
            $table->string('apeynom_supervisor');
            $table->string('fecha_sup');

            // Ingresador
            $table->string('apeynom_ingresador');
            $table->string('fecha_ing');

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
        Schema::dropIfExists('datos');
    }
}
