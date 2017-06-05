<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->increments('id');
            $table-> double ('total');
            $table->unsignedInteger('cita_id');
            $table->foreign('cita_id')->references('id')->on('citas');
            $table-> unsignedInteger('lineafactura_id');
            $table->foreign('lineafactura_id')->references('id')->on('lineafacturas');
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
        Schema::dropIfExists('facturas');
    }
}
