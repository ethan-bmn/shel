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
        //Création de la table role
        Schema::create('roles', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('role_name');
        });

        //Insertion automatique des rôles Client et Admin
        DB::table('roles')->insert([
            [
                'role_name' => 'client'
            ],
            [
                'role_name' => 'admin'
            ]

        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
