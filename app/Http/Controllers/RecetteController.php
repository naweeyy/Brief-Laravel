<?php

namespace App\Http\Controllers;

use App\Models\Recette;
use Illuminate\Http\Request;

class RecetteController extends Controller
{
    public function create()
    {
        return view('recettes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string',
            'description' => 'required|string',
            'temps_preparation' => 'required|integer',
            'temps_cuisson' => 'required|integer',
            'instructions' => 'required|string',
        ]);

        Recette::create($validated);
        return redirect()->route('recettes.index');
    }

    public function edit($id)
    {
        $recette = Recette::findOrFail($id);
        return view('recettes.edit', compact('recette'));
    }

    public function update(Request $request, $id)
    {
        $recette = Recette::findOrFail($id);
        $recette->update($request->validate([
            'nom' => 'required|string',
            'description' => 'required|string',
            'temps_preparation' => 'required|integer',
            'temps_cuisson' => 'required|integer',
            'instructions' => 'required|string',
        ]));

        return redirect()->route('recettes.index');
    }

    public function destroyView($id)
    {
        $recette = Recette::findOrFail($id);
        return view('recettes.delete', compact('recette'));
    }

    public function destroy($id)
    {
        $recette = Recette::findOrFail($id);
        $recette->delete();
        return redirect()->route('recettes.index');
    }
}
