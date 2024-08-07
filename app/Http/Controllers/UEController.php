<?php

// app/Http/Controllers/UEController.php
namespace App\Http\Controllers;

use App\Models\UE;
use Illuminate\Http\Request;

class UEController extends Controller
{
    public function index()
    {
        $ues = UE::all();
        return response()->json($ues);
    }

    public function show($id)
    {
        $ue = UE::findOrFail($id);
        return response()->json($ue);
    }

    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
        ]);

        $ue = UE::create($request->all());
        return response()->json($ue, 201);
    }

    public function update(Request $request, $id)
    {
        $ue = UE::findOrFail($id);
        $ue->update($request->all());
        return response()->json($ue, 200);
    }

    public function destroy($id)
    {
        UE::destroy($id);
        return response()->json(null, 204);
    }
}
