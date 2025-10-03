<?php

namespace App\Http\Controllers;

use App\Models\HazardousWastes;
use Illuminate\Http\Request;

class HazardousWastesController extends Controller
{
    /**
     * Mostrar lista de residuos peligrosos
     */
    public function index()
    {
        $HazardousWastes = HazardousWastes::latest()->paginate(10);
        return view('container.wastes.hazardous-wastes.index', compact('HazardousWastes'));
    }

    /**
     * Mostrar formulario para crear un nuevo residuo peligroso
     */
    public function create()
    {
        return view('container.wastes.hazardous-wastes.create');
    }

    /**
     * Guardar un nuevo residuo peligroso en la base de datos
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'generating_unit' => 'nullable|string|max:255',
            'waste_name' => 'nullable|string|max:255',
            'hazard_characteristic' => 'nullable|string|max:255',
            'frequency' => 'nullable|string|max:100',
            'physical_state' => 'nullable|string|max:50',
            'quantity' => 'nullable|numeric',
            'unit' => 'nullable|string|max:50',
            'delivered_by' => 'nullable|string|max:255',
            'registered_by' => 'nullable|string|max:255',
        ]);

        HazardousWastes::create($validated);

        return redirect()->route('HazardousWaste.index')
            ->with('success', 'Residuo peligroso registrado correctamente.');
    }

    /**
     * Mostrar formulario para editar un residuo peligroso existente
     */
    public function edit(HazardousWastes $HazardousWaste)
    {
        return view('container.wastes.hazardous-wastes.edit', compact('HazardousWaste'));
    }

    /**
     * Actualizar un residuo peligroso existente
     */
    public function update(Request $request, HazardousWastes $HazardousWaste)
    {
        $validated = $request->validate([
            'date' => 'required|date',
            'generating_unit' => 'nullable|string|max:255',
            'waste_name' => 'nullable|string|max:255',
            'hazard_characteristic' => 'nullable|string|max:255',
            'frequency' => 'nullable|string|max:100',
            'physical_state' => 'nullable|string|max:50',
            'quantity' => 'nullable|numeric',
            'unit' => 'nullable|string|max:50',
            'delivered_by' => 'nullable|string|max:255',
            'registered_by' => 'nullable|string|max:255',
        ]);

        $HazardousWaste->update($validated);

        return redirect()->route('HazardousWaste.index')
            ->with('success', 'Residuo peligroso actualizado correctamente.');
    }

    /**
     * Eliminar un residuo peligroso
     */
    public function destroy(HazardousWastes $HazardousWaste)
    {
        $HazardousWaste->delete();

        return redirect()->route('HazardousWaste.index')
            ->with('success', 'Residuo peligroso eliminado correctamente.');
    }

    /**
     * Mostrar detalles de un residuo peligroso (opcional)
     */
    public function show(HazardousWastes $HazardousWaste)
    {
        return view('container.wastes.hazardous-wastes.show', compact('HazardousWaste'));
    }
}
