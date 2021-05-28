<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanteonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('panteones', function (Blueprint $table) {
          $table->id() ;
          $table->string('area');
          $table->string('tipo_tramite');
          $table->string('numero_oficio');
          $table->date('fecha_tramite')->nullable();
          $table->date('fecha_recibido');
          $table->string('descripcion_tramite')->nullable();
          $table->string('nombre_suscrito')->nullable();
          $table->string('cargo')->nullable();
          $table->string('telefono')->nullable();
          $table->string('dirigido')->nullable();
          $table->string('cargo_dirigido')->nullable();
          $table->string('estado');
          $table->string('ubicacion');
          $table->string('nombre_carpeta');
          $table->string('observaciones')->nullable();
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
        Schema::dropIfExists('panteones');
    }
}
