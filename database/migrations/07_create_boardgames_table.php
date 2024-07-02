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
        Schema::create('boardgames', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->string('description');
            $table->boolean('is_borrowed')->default(false);
            $table->integer('number_of_recommendation')->nullable();
            $table->string('number_of_player');
            $table->string('playing_time');
            $table->string('picture')->nullable();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boardgames');
    }
};
