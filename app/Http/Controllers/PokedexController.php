<?php

namespace App\Http\Controllers;

use App\Models\Pokedex;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function index()
    {
        $pokedexs = Pokedex::orderBy('id','desc')->paginate(10);
        return view('pokedexs.index', compact('pokedexs'));
    }

    public function create()
    {
        return view('pokedexs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'nullable|string|max:255',
            'species' => 'nullable|string|max:255',
            'height' => 'nullable|string|max:255',
            'weight' => 'nullable|string|max:255',
            'hp' => 'nullable|integer',
            'attack' => 'nullable|integer',
            'defense' => 'nullable|integer',
            'image_url' => 'nullable|url'
        ]);

        Pokedex::create($data);
        return redirect()->route('pokedexs.index')->with('success', 'Pokedex entry created.');
    }

    public function show(Pokedex $pokedex)
    {
        return view('pokedexs.show', compact('pokedex'));
    }

    public function edit(Pokedex $pokedex)
    {
        return view('pokedexs.edit', compact('pokedex'));
    }

    public function update(Request $request, Pokedex $pokedex)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'nullable|string|max:255',
            'species' => 'nullable|string|max:255',
            'height' => 'nullable|string|max:255',
            'weight' => 'nullable|string|max:255',
            'hp' => 'nullable|integer',
            'attack' => 'nullable|integer',
            'defense' => 'nullable|integer',
            'image_url' => 'nullable|url'
        ]);

        $pokedex->update($data);
        return redirect()->route('pokedexs.index')->with('success', 'Pokedex entry updated.');
    }

    public function destroy(Pokedex $pokedex)
    {
        $pokedex->delete();
        return redirect()->route('pokedexs.index')->with('success', 'Pokedex entry deleted.');
    }
}
