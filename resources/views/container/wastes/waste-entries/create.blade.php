@extends('dashboard')


@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md p-6 animate-fade-in">
    <h2 class="text-2xl font-bold text-text-primary mb-6">Crear Entrada de Residuo</h2>

    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-100 text-red-800 rounded-lg">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('WasteEntrie.store') }}" method="POST" class="space-y-6">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Fecha de ingreso -->
            <div>
                <label for="date" class="block text-sm font-medium text-text-secondary">Fecha de ingreso</label>
                <input type="date" name="date" id="date" value="{{ old('date') }}" 
                       class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm p-2 focus:ring-primary focus:border-primary">
            </div>

            <!-- Área -->
            <div>
                <label for="area" class="block text-sm font-medium text-text-secondary">Área</label>
                <input type="text" name="area" id="area" value="{{ old('area') }}" 
                       class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm p-2 focus:ring-primary focus:border-primary" placeholder="Nombre del área">
            </div>

            <!-- Tipo de residuo -->
            <div>
                <label for="waste_type" class="block text-sm font-medium text-text-secondary">Tipo de residuo</label>
                <input type="text" name="waste_type" id="waste_type" value="{{ old('waste_type') }}" 
                       class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm p-2 focus:ring-primary focus:border-primary" placeholder="Ej: Orgánico, Plástico">
            </div>

            <!-- Cantidad -->
            <div>
                <label for="quantity" class="block text-sm font-medium text-text-secondary">Cantidad</label>
                <input type="number" step="0.01" name="quantity" id="quantity" value="{{ old('quantity') }}" 
                       class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm p-2 focus:ring-primary focus:border-primary" placeholder="Cantidad">
            </div>

            <!-- Unidad -->
            <div>
                <label for="unit" class="block text-sm font-medium text-text-secondary">Unidad</label>
                <select name="unit" id="unit" 
                        class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm p-2 focus:ring-primary focus:border-primary">
                    <option value="">Seleccione una unidad</option>
                    <option value="kg" {{ old('unit') == 'kg' ? 'selected' : '' }}>Kg</option>
                    <option value="m³" {{ old('unit') == 'm³' ? 'selected' : '' }}>m³</option>
                    <option value="unidades" {{ old('unit') == 'unidades' ? 'selected' : '' }}>Unidades</option>
                </select>
            </div>

            <!-- Entregado por -->
            <div>
                <label for="delivered_by" class="block text-sm font-medium text-text-secondary">Entregado por</label>
                <input type="text" name="delivered_by" id="delivered_by" value="{{ old('delivered_by') }}" 
                       class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm p-2 focus:ring-primary focus:border-primary" placeholder="Nombre de la persona">
            </div>

            <!-- Responsable del área -->
            <div>
                <label for="area_responsible" class="block text-sm font-medium text-text-secondary">Responsable del área</label>
                <input type="text" name="area_responsible" id="area_responsible" value="{{ old('area_responsible') }}" 
                       class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm p-2 focus:ring-primary focus:border-primary" placeholder="Nombre del responsable">
            </div>

            <!-- Número de documento -->
            <div>
                <label for="document_number" class="block text-sm font-medium text-text-secondary">Número de documento</label>
                <input type="text" name="document_number" id="document_number" value="{{ old('document_number') }}" 
                       class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm p-2 focus:ring-primary focus:border-primary" placeholder="Ej: Remisión, factura">
            </div>

            <!-- Firma -->
            <div>
                <label for="signature" class="block text-sm font-medium text-text-secondary">Firma</label>
                <input type="text" name="signature" id="signature" value="{{ old('signature') }}" 
                       class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm p-2 focus:ring-primary focus:border-primary" placeholder="Referencia o firma digital">
            </div>

        </div>

        <!-- Observaciones -->
        <div>
            <label for="observations" class="block text-sm font-medium text-text-secondary">Observaciones</label>
            <textarea name="observations" id="observations" rows="3" 
                      class="mt-1 block w-full rounded-lg border border-gray-300 shadow-sm p-2 focus:ring-primary focus:border-primary" placeholder="Notas adicionales">{{ old('observations') }}</textarea>
        </div>

        <!-- Botones -->
        <div class="flex justify-end space-x-4">
            <a href="{{ route('WasteEntrie.index') }}" 
               class="px-6 py-2 rounded-lg border border-gray-300 text-text-secondary hover:bg-gray-50 transition">Cancelar</a>
            <button type="submit" 
               class="px-6 py-2 rounded-lg bg-primary text-white hover:bg-primary-dark transition">Guardar</button>
        </div>

    </form>
</div>
@endsection
