<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Etudiant extends Model
{
    use SoftDeletes;  // Ajout du trait SoftDeletes

    protected $fillable = ['nom', 'prenom', 'email', 'adresse', 'date_naissance', 'telephone', 'mot_de_passe', 'photo'];

    // Ajoutez ici la relation avec Matiere, si nécessaire
    public function matieres()
    {
        return $this->belongsToMany(Matiere::class, 'evaluations')
                    ->withPivot('note')
                    ->withTimestamps();
    }
}
