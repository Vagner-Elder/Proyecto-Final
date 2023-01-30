<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class General extends Migration
{
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('color')->nullable();            
            $table->float('precio',8,2)->nullable();
            $table->double('stock')->nullable();
            $table->string('descripcion')->nullable();
            $table->timestamps();
        });

        Schema::create('ventas', function (Blueprint $table) {
            $table->id();            
                        
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')
            ->on('users')->onDelete('cascade');


            $table->float('monto_total',8,2)->nullable();
            $table->timestamps();
        });
        Schema::create('articulo_venta', function (Blueprint $table) {

            $table->unsignedBigInteger('articulo_id');
            $table->foreign('articulo_id')->references('id')
            ->on('articulos')->onDelete('cascade');

            $table->unsignedBigInteger('venta_id');
            $table->foreign('venta_id')->references('id')
            ->on('ventas')->onDelete('cascade');

            $table->primary(['articulo_id','venta_id']);
            
            $table->float('costo',8,2)->nullable();
            $table->float('cantidad',8,2)->nullable();
            $table->float('total',8,2)->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('articulo_venta');
        Schema::dropIfExists('ventas');
        Schema::dropIfExists('articulos');
    }
}
