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
        Schema::create('productos', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('codigo',64);
            $table->string('nombre',100)->unique();
            $table->string('descripcion',256)->nullable();
            $table->decimal('precio_venta',total:6,places:2);

            $table->unsignedSmallInteger('categoria_id');
            $table->timestamps();

            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
