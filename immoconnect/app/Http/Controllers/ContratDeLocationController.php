<?php

namespace App\Http\Controllers;

use App\Models\ContratDeLocation;
use Illuminate\Http\Request;

class ContratDeLocationController extends Controller
{
    public function index()
    {
        $contrats = ContratDeLocation::with(['logement', 'locataire'])->get();
        return view('contrats.index', compact('contrats'));
    }

    public function create()
    {
        return view('contrats.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'logement_id' => 'required|exists:logements,id',
            'user_id' => 'required|exists:users,id',
            'date_debut' => 'required|date',
            'date_fin' => 'nullable|date|after:date_debut',
            'montant_loyer' => 'required|numeric|min:0',
        ]);

        ContratDeLocation::create($validated);
        return redirect()->route('contrats.index')->with('success', 'Contract created successfully');
    }

    public function show(ContratDeLocation $contrat)
    {
        return view('contrats.show', compact('contrat'));
    }

    public function edit(ContratDeLocation $contrat)
    {
        return view('contrats.edit', compact('contrat'));
    }

    public function update(Request $request, ContratDeLocation $contrat)
    {
        $validated = $request->validate([
            'date_debut' => 'required|date',
            'date_fin' => 'nullable|date|after:date_debut',
            'montant_loyer' => 'required|numeric|min:0',
        ]);

        $contrat->update($validated);
        return redirect()->route('contrats.index')->with('success', 'Contract updated successfully');
    }

    public function destroy(ContratDeLocation $contrat)
    {
        $contrat->delete();
        return redirect()->route('contrats.index')->with('success', 'Contract deleted successfully');
    }
}
