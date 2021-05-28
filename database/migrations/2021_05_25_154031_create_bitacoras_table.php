<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bitacoras', function (Blueprint $table) {
            $table->id();
            $table->date('fecha')->nullable();
            $table->string('nombre')->nullable();
            $table->string('n_oficio')->nullable();
            $table->string('dirigido')->nullable();
            $table->string('area')->nullable();
            $table->string('direccion')->nullable();
         //   $table->boolean('firma')->default(false);
            $table->boolean('firma')->default(0)->nullable();
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
        Schema::dropIfExists('_bitacoras');
    }
}
