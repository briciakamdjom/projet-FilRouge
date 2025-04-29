<?php

namespace App\Http\Controllers;

use App\Models\Paiement;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    public function index()
    {
        $paiements = Paiement::with('contratLocation')->get();
        return view('paiements.index', compact('paiements'));
    }

    public function create()
    {
        return view('paiements.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'contrat_id' => 'required|exists:contrats_de_location,id',
            'date_paiement' => 'required|date',
            'montant' => 'required|numeric|min:0',
        ]);

        Paiement::create($validated);
        return redirect()->route('paiements.index')->with('success', 'Payment created successfully');
    }

    public function show(Paiement $paiement)
    {
        return view('paiements.show', compact('paiement'));
    }

    public function edit(Paiement $paiement)
    {
        return view('paiements.edit', compact('paiement'));
    }

    public function update(Request $request, Paiement $paiement)
    {
        $validated = $request->validate([
            'date_paiement' => 'required|date',
            'montant' => 'required|numeric|min:0',
        ]);

        $paiement->update($validated);
        return redirect()->route('paiements.index')->with('success', 'Payment updated successfully');
    }

    public function destroy(Paiement $paiement)
    {
        $paiement->delete();
        return redirect()->route('paiements.index')->with('success', 'Payment deleted successfully');
    }
}
