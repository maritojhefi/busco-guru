<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalculadoraAereasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculadora_aereas', function (Blueprint $table) {
            $table->id();
            $table->string('factor_medidas', 100)->nullable();
            $table->double('flete1')->unsigned()->nullable();
            $table->double('seguro')->unsigned()->nullable();
            $table->double('iva',)->nullable();
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
        Schema::dropIfExists('calculadora_aereas');
    }
}
