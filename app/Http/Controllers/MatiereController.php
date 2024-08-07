<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    // Afficher la liste des matières
    public function index()
    {
        return Matiere::all();
    }

    // Afficher une matière spécifique
    public function show($id)
    {
        return Matiere::findOrFail($id);
    }

    // Créer une nouvelle matière
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
        ]);

        $matiere = Matiere::create($request->all());
        return response()->json($matiere, 201);
    }

    // Mettre à jour une matière existante
    public function update(Request $request, $id)
    {
        $matiere = Matiere::findOrFail($id);
        $matiere->update($request->all());
        return response()->json($matiere, 200);
    }

    // Supprimer une matière
    public function destroy($id)
    {
        Matiere::destroy($id);
        return response()->json(null, 204);
    }
}
