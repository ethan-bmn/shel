<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name_category');
        });

        DB::table('categories')->insert([
            [
                'name_category' => 'Ambiance'
            ],
            [
                'name_category' => 'Observation'
            ],
            [
                'name_category' => 'Jeu De Cartes'
            ],
            [
                'name_category' => 'Escape Game'
            ],
            [
                'name_category' => 'Stratégie'
            ],
            [
                'name_category' => 'Jeu De Dés'
            ],
            [
                'name_category' => 'Jeu De Plateau'
            ],
            [
                'name_category' => 'Deck Building'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
