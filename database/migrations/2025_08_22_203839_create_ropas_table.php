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
        Schema::create('ropas', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // nombre de la prenda
            $table->string('description'); // descripción breve
            $table->double('price', 8, 2); // precio
            $table->integer('stock'); // cantidad en inventario
            $table->string('size', 10); // talla (S, M, L, XL, etc.)
            $table->string('color', 50); // color
            $table->string('brand')->nullable(); // marca de la prenda
            $table->enum('gender', ['Hombre', 'Mujer', 'Unisex']); // género
            $table->date('release_date')->nullable(); // fecha de lanzamiento
            $table->boolean('is_active')->default(true); // disponible o no
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ropas');
    }
};
