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
        //Création de la table recommendations
        Schema::create('recommendations', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('commentary');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('boardgame_id')->constrained('boardgames')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recommendations');
    }
};
