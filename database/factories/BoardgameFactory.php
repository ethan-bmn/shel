<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Boardgame>
 */
class BoardgameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(50),
            'number_of_player' => fake()->text(50),
            'number_of_recommendation' => fake()->numberBetween(0,150),
            'playing_time' => "5-10",
            'category_id' => fake()->numberBetween(1, 8),
        ];
    }
}
