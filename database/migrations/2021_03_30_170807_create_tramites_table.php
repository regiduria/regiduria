<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateTramitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramites', function (Blueprint $table) {
            $table->id();
            $table->string('clave')->nullable();
            $table->string('area');
            $table->string('tipo_tramite');
            $table->string('numero_oficio')->nullable();
            $table->date('fecha_tramite')->nullable();
            $table->date('fecha_recibido');
            $table->string('descripcion_tramite')->nullable();
            $table->string('nombre_suscrito')->nullable();
            $table->string('cargo')->nullable();
            $table->string('telefono')->nullable();
            $table->string('dirigido')->nullable();
            $table->string('cargo_dirigido')->nullable();
            $table->string('estado');
            $table->string('lic_dirige')->nullable();
            $table->string('ubicacion');
            $table->string('nombre_carpeta');
            $table->string('nc_carpeta')->nullable();
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
        Schema::dropIfExists('tramites');

        Schema::table('tramites', function (Blueprint $table) {
            $table->softDeletes();
        });
        Schema::table('tramites', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
