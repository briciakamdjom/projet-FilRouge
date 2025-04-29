<?php

namespace App\Http\Controllers;

use App\Models\Logement;
use Illuminate\Http\Request;

class LogementController extends Controller
{
    public function index()
    {
        $logements = Logement::with('proprietaire')->get();
        return view('logements.index', compact('logements'));
    }

    public function create()
    {
        return view('logements.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'adresse' => 'required|string',
            'surface' => 'required|integer|min:1',
            'nombre_pieces' => 'required|integer|min:1',
            'loyer' => 'required|numeric|min:0',
        ]);

        $validated['user_id'] = auth()->id();
        Logement::create($validated);

        return redirect()->route('logements.index')->with('success', 'Logement created successfully');
    }

    public function show(Logement $logement)
    {
        return view('logements.show', compact('logement'));
    }

    public function edit(Logement $logement)
    {
        return view('logements.edit', compact('logement'));
    }

    public function update(Request $request, Logement $logement)
    {
        $validated = $request->validate([
            'adresse' => 'required|string',
            'surface' => 'required|integer|min:1',
            'nombre_pieces' => 'required|integer|min:1',
            'loyer' => 'required|numeric|min:0',
        ]);

        $logement->update($validated);
        return redirect()->route('logements.index')->with('success', 'Logement updated successfully');
    }

    public function destroy(Logement $logement)
    {
        $logement->delete();
        return redirect()->route('logements.index')->with('success', 'Logement deleted successfully');
    }
}
