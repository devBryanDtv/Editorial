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
        Schema::create('editorials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 200);
            $table->string('domicilio', 150);
            $table->string('correo', 200);
            $table->integer('estatus');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editorials');
    }
};
