<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Afficher la liste des étudiants
    public function index()
    {
        $etudiants = Etudiant::all();
        return response()->json($etudiants);
    }

    // Afficher un étudiant spécifique
    public function show($id)
    {
        return Etudiant::findOrFail($id);
    }

    // Créer un nouvel étudiant
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nom' => 'required|string|max:255',
                'prenom' => 'nullable|string|max:255',
                'email' => 'nullable|email|unique:etudiants',
                'adresse' => 'nullable|string|max:255',
                'date_naissance' => 'nullable|date',
                'telephone' => 'nullable|string|max:20',
                'mot_de_passe' => 'nullable|string|min:8',
                'photo' => 'nullable|string|max:255',
            ]);
    
            $etudiant = Etudiant::create($request->all());
            return response()->json($etudiant, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
    // Mettre à jour un étudiant existant
    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->update($request->all());
        return response()->json($etudiant, 200);
    }

    // Supprimer un étudiant
    public function destroy($id)
    {
        Etudiant::destroy($id);
        return response()->json(null, 204);
    }
    public function trashed()
    {
        $etudiants = Etudiant::onlyTrashed()->get();
        return response()->json($etudiants);
    }

   
    public function restore($id)
    {
        $etudiant = Etudiant::withTrashed()->findOrFail($id);
        $etudiant->restore();
        return response()->json($etudiant, 200);
    }

}
