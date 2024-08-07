<?php

// database/factories/MatiereFactory.php
namespace Database\Factories;

use App\Models\Matiere;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatiereFactory extends Factory
{
    protected $model = Matiere::class;

    public function definition()
    {
        return [
            'libelle' => $this->faker->word,
            'date_debut' => $this->faker->date,
            'date_fin' => $this->faker->date,
        ];
    }
}
