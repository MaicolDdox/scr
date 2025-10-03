<?php

namespace App\Http\Controllers;

use App\Models\WasteEntrie;
use Illuminate\Http\Request;

class WasteEntrieController extends Controller
{
    /**
     * Mostrar todos los registros.
     */
    public function index()
    {
        $wasteEntries = WasteEntrie::latest()->paginate(10);
        return view('container.wastes.waste-entries.index', compact('wasteEntries'));
    }

    /**
     * Mostrar formulario para crear un nuevo registro.
     */
    public function create()
    {
        return view('container.wastes.waste-entries.create');
    }

    /**
     * Almacenar un nuevo registro en la base de datos.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'area' => 'required|string|max:255',
            'waste_type' => 'required|string|max:255',
            'quantity' => 'required|numeric',
            'unit' => 'required|string|max:50',
            'delivered_by' => 'required|string|max:255',
            'area_responsible' => 'required|string|max:255',
            'document_number' => 'nullable|string|max:100',
            'signature' => 'nullable|string|max:255',
            'observations' => 'nullable|string',
        ]);

        WasteEntrie::create($validated);

        return redirect()->route('WasteEntrie.index')
            ->with('success', 'Entrada de residuo creada correctamente.');
    }

    /**
     * Mostrar un registro específico.
     */
    public function show(WasteEntrie $WasteEntrie)
    {
        return view('container.wastes.waste-entries.show', compact('WasteEntrie'));
    }

    /**
     * Mostrar formulario para editar un registro.
     */
    public function edit(WasteEntrie $WasteEntrie)
    {
        return view('container.wastes.waste-entries.edit', compact('WasteEntrie'));
    }

    /**
     * Actualizar un registro específico en la base de datos.
     */
    public function update(Request $request, WasteEntrie $WasteEntrie)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'area' => 'required|string|max:255',
            'waste_type' => 'required|string|max:255',
            'quantity' => 'required|numeric',
            'unit' => 'required|string|max:50',
            'delivered_by' => 'required|string|max:255',
            'area_responsible' => 'required|string|max:255',
            'document_number' => 'nullable|string|max:100',
            'signature' => 'nullable|string|max:255',
            'observations' => 'nullable|string',
        ]);

        $WasteEntrie->update($validated);

        return redirect()->route('WasteEntrie.index')
            ->with('success', 'Entrada de residuo actualizada correctamente.');
    }

    /**
     * Eliminar un registro específico.
     */
    public function destroy(WasteEntrie $WasteEntrie)
    {
        $WasteEntrie->delete();

        return redirect()->route('WasteEntrie.index')
            ->with('success', 'Entrada de residuo eliminada correctamente.');
    }
}
