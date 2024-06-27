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
            $table->boolean('is_recommended')->default(false);
            $table->string('number_of_player');
            $table->string('playing_time');
            $table->integer('quantity');
            $table->foreignId('shopping_cart_id')->constrained('shopping_carts')->onDelete('cascade');
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
