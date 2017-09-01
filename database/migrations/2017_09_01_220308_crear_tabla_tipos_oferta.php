<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTiposOferta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_oferta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30);
        });
        \DB::table('tipos_oferta')->insert([
                ["id" => 1 ,"nombre" => "Venta"],
                ["id" => 2 ,"nombre" => "Renta"]
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipos_oferta');
    }
}
