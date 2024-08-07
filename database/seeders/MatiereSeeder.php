<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insérer des données dans la table 'matieres'
        DB::table('matieres')->insert([
            [
                'libelle' => 'Mathematics',
                'date_debut' => '2024-01-01',
                'date_fin' => '2024-06-30',
            ],
            [
                'libelle' => 'Physics',
                'date_debut' => '2024-02-01',
                'date_fin' => '2024-07-15',
            ],
            [
                'libelle' => 'Chemistry',
                'date_debut' => '2024-03-01',
                'date_fin' => '2024-08-30',
            ],
            // Ajoutez plus de matières si nécessaire
        ]);
    }
}
