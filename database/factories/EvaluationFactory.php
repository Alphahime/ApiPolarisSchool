<?php

// database/factories/EvaluationFactory.php
namespace Database\Factories;

use App\Models\Evaluation;
use App\Models\Etudiant;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\Factory;

class EvaluationFactory extends Factory
{
    protected $model = Evaluation::class;

    public function definition()
    {
        return [
            'etudiant_id' => Etudiant::factory(),
            'matiere_id' => Matiere::factory(),
            'note' => $this->faker->numberBetween(0, 20),
        ];
    }
}
