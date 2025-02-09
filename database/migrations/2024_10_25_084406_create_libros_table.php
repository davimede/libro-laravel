<?php

use App\Models\libros;
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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->integer('isan')->unique();
            $table->string('titulo', 50);
            $table->integer('ano');
            $table->string('director', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
