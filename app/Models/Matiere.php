<?php

// app/Models/Matiere.php
namespace App\Models;

use App\Models\UE;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $fillable = ['libelle', 'date_debut', 'date_fin'];

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'evaluations')
                    ->withPivot('note')
                    ->withTimestamps();
    }

    public function ues()
    {
        return $this->belongsToMany(UE::class, 'ue_matiere')
                    ->withTimestamps();
    }
}
