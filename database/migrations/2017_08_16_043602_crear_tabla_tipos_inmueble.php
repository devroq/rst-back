<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipoInmueble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_inmueble', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',30);
        });
        \DB::table('tipos_inmueble')->insert([
                ["id" => 1 ,"nombre" => "Casa"],
                ["id" => 2 ,"nombre" => "Departamento"],
                ["id" => 3 ,"nombre" => "Terreno"]
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tipos_inmueble');
    }
}
