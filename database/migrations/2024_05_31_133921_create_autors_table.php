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
        Schema::create('autors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nombre', 200);
            $table->string('email', 200);
            $table->string('imagen', 200);
            $table->string('resenia', 200);
            $table->integer('status');
 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autors');
    }
};
