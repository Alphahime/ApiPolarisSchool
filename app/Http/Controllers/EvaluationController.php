<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    // Afficher la liste des évaluations
    public function index()
    {
        return Evaluation::with(['etudiant', 'matiere'])->get();
    }

    // Afficher une évaluation spécifique
    public function show($id)
    {
        return Evaluation::with(['etudiant', 'matiere'])->findOrFail($id);
    }

    // Créer une nouvelle évaluation
    public function store(Request $request)
    {
        $request->validate([
            'etudiant_id' => 'required|exists:etudiants,id',
            'matiere_id' => 'required|exists:matieres,id',
            'note' => 'nullable|numeric|min:0|max:20',
        ]);

        $evaluation = Evaluation::create($request->all());
        return response()->json($evaluation, 201);
    }

    // Mettre à jour une évaluation existante
    public function update(Request $request, $id)
    {
        $evaluation = Evaluation::findOrFail($id);
        $evaluation->update($request->all());
        return response()->json($evaluation, 200);
    }

    // Supprimer une évaluation
    public function destroy($id)
    {
        Evaluation::destroy($id);
        return response()->json(null, 204);
    }
}
