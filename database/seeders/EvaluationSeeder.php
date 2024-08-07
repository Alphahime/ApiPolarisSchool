<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Evaluation;

class EvaluationSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Evaluation::create([
            'etudiant_id' => 1,
            'matiere_id' => 1,  
            'note' => 15,
        ]);

        Evaluation::create([
            'etudiant_id' => 2,
            'matiere_id' => 2,
            'note' => 12,
        ]);

      
    }
}
