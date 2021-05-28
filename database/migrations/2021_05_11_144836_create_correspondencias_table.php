<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrespondenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correspondencias', function (Blueprint $table) {
            $table->id();
            $table->string('clave')->nullable();
            $table->string('tipo_tramite')->nullable();
            $table->string('numero_oficio')->nullable();
            $table->date('fecha_tramite')->nullable();
            $table->date('fecha_recibido')->nullable();
            $table->string('descripcion_tramite')->nullable();
            $table->string('nombre_suscrito')->nullable();
            $table->string('cargo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('dirigido')->nullable();
            $table->string('observaciones')->nullable();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('correspondencias');
    }
}
