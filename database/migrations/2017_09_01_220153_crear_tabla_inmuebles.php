<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaInmuebles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',100);
            $table->text('descripcion');
            $table->decimal('lat',10,2);
            $table->decimal('lng',10,2);            
            $table->decimal('terreno',6,2); 
            $table->decimal('construccion',10,2); 
            $table->int('recamaras');
            $table->int('baños');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inmuebles');
    }
}
