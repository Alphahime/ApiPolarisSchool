<?php

// app/Models/UE.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UE extends Model
{
    protected $fillable = ['libelle', 'date_debut', 'date_fin'];

    public function matieres()
    {
        return $this->belongsToMany(Matiere::class, 'ue_matiere')
                    ->withTimestamps();
    }
}
