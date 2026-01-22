<?php

namespace App\Http\Controllers;

use App\Models\Prenda;
use Illuminate\Http\Request;

class PrendaController extends Controller
{
    public function index() {
        $prendas = Prenda::all();
        return view('prendas.index', compact('prendas'));
    }

    public function create() {
        return view('prendas.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric'
        ], [
            'nombre.required' => 'El nombre es obligatorio',
            'descripcion.required' => 'La descripción es obligatoria',
            'precio.required' => 'El precio es obligatorio',
            'precio.numeric' => 'El precio debe ser un número'
        ]);

        Prenda::create($request->only(['nombre', 'descripcion', 'precio']));
        return redirect()->route('prendas.index');
    }

    public function show($id) {
        $prenda = Prenda::findOrFail($id);
        return view('prendas.show', compact('prenda'));
    }

    public function edit($id) {
        $prenda = Prenda::findOrFail($id);
        return view('prendas.edit', compact('prenda'));
    }

    public function update(Request $request, $id) {
        $request->validate(['nombre' => 'required', 'descripcion' => 'required', 'precio' => 'required|numeric']);
        $prenda = Prenda::findOrFail($id);
        $prenda->update($request->only(['nombre', 'descripcion', 'precio']));
        return redirect()->route('prendas.index');
    }

    public function confirmDelete($id) {
        $prenda = Prenda::findOrFail($id);
        return view('prendas.confirmDelete', compact('prenda'));
    }

    public function destroy($id) {
        Prenda::findOrFail($id)->delete();
        return redirect()->route('prendas.index');
    }
}
