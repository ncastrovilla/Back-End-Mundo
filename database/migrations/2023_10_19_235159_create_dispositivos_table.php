<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dispositivos', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            //Foreign Key Marcas
            $table->bigInteger('id_marca')->unsigned();
            $table->foreign('id_marca')->references('id')->on('marcas');
            //Foreign Key Bodegas
            $table->bigInteger('id_bodega')->unsigned();
            $table->foreign('id_bodega')->references('id')->on('bodegas');
            //Foreign Key Modelos
            $table->bigInteger('id_modelo')->unsigned();
            $table->foreign('id_modelo')->references('id')->on('modelos');

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispositivos');
    }
};
