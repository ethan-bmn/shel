<?php

namespace Database\Seeders;

use App\Models\Boardgame;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Génération aléatoire de 50 users
        User::factory(50)->create();
        //Boardgame::factory(50)->create();
    }
}
