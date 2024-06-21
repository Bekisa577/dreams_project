<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::all();
        return view('materials.index', compact('materials'));
    }

    public function create()
    {
        return view('materials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'material_name' => 'required',
            'target_audience' => 'required|in:10-14,15-19',
        ]);

        Material::create($request->all());

        return redirect()->route('materials.index')->with('success', 'Material created successfully.');
    }

    public function show(Material $material)
    {
        return view('materials.show', compact('material'));
    }

    public function edit(Material $material)
    {
        return view('materials.edit', compact('material'));
    }

    public function update(Request $request, Material $material)
    {
        $request->validate([
            'material_name' => 'required',
            'target_audience' => 'required|in:10-14,15-19',
        ]);

        $material->update($request->all());

        return redirect()->route('materials.index')->with('success', 'Material updated successfully.');
    }

    public function destroy(Material $material)
    {
        $material->delete();

        return redirect()->route('materials.index')->with('success', 'Material deleted successfully.');
    }
}
