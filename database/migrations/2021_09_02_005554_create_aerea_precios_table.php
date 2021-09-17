<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAereaPreciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aerea_precios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('aerea_id')->unsigned()->nullable();
            $table->foreign('aerea_id')->references('id')->on('calculadora_aereas');
            $table->double('min')->unsigned()->nullable();       
            $table->double('max')->unsigned()->nullable();     
            $table->double('precio')->unsigned()->nullable();     

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
        Schema::dropIfExists('aerea_precios');
    }
}
