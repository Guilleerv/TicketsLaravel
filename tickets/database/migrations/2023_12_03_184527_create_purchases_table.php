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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('id_cliente'); 
            $table->unsignedBigInteger('id_evento'); 
            $table->timestamps();

            $table->foreign('id_evento')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('id_cliente')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
