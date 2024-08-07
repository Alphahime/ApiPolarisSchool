<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insérer des données dans la table 'etudiants'
        DB::table('etudiants')->insert([
            [
                'nom' => 'Doe',
                'prenom' => 'John',
                'email' => 'john.doe@example.com',
                'adresse' => '123 Main St',
                'date_naissance' => '2003-05-15',
                'telephone' => '1234567890',
                'mot_de_passe' => Hash::make('password123'),
                'photo' => 'john_doe.jpg',
            ],
            [
                'nom' => 'Smith',
                'prenom' => 'Jane',
                'email' => 'jane.smith@example.com',
                'adresse' => '456 Oak Ave',
                'date_naissance' => '2002-08-20',
                'telephone' => '0987654321',
                'mot_de_passe' => Hash::make('password456'),
                'photo' => 'jane_smith.jpg',
            ],
            // Ajoutez plus d'étudiants si nécessaire
        ]);
    }
}
