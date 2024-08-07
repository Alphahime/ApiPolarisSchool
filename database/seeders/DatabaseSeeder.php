<?php

// database/seeders/DatabaseSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Créez des utilisateurs de test
        User::factory()->count(10)->create(); // Crée 10 utilisateurs de test

        // Appel du seeder pour les évaluations
        $this->call([
            EvaluationSeeder::class,
            // Ajoutez d'autres seeders ici si nécessaire
        ]);
    }
}

