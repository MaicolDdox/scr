@extends('dashboard')

@section('page-title', 'Editar Entrada de Residuo')

@section('content')
<div class="max-w-3xl mx-auto bg-white rounded-xl shadow-md p-6 animate-fade-in">
    <h2 class="text-2xl font-bold text-text-primary mb-6">Editar Entrada de Residuo</h2>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('WasteEntrie.update', $WasteEntrie->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="date" class="block text-sm font-medium text-text-secondary">Fecha</label>
                <input type="date" name="date" id="date" value="{{ old('date', $WasteEntrie->date) }}" 
                       class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary-light focus:ring-opacity-50">
            </div>

            <div>
                <label for="area" class="block text-sm font-medium text-text-secondary">Área</label>
                <input type="text" name="area" id="area" value="{{ old('area', $WasteEntrie->area) }}" 
                       class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary-light focus:ring-opacity-50">
            </div>

            <div>
                <label for="waste_type" class="block text-sm font-medium text-text-secondary">Tipo de residuo</label>
                <input type="text" name="waste_type" id="waste_type" value="{{ old('waste_type', $WasteEntrie->waste_type) }}" 
                       class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary-light focus:ring-opacity-50">
            </div>

            <div>
                <label for="quantity" class="block text-sm font-medium text-text-secondary">Cantidad</label>
                <input type="number" step="0.01" name="quantity" id="quantity" value="{{ old('quantity', $WasteEntrie->quantity) }}" 
                       class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary-light focus:ring-opacity-50">
            </div>

            <div>
                <label for="unit" class="block text-sm font-medium text-text-secondary">Unidad</label>
                <input type="text" name="unit" id="unit" value="{{ old('unit', $WasteEntrie->unit) }}" 
                       class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary-light focus:ring-opacity-50">
            </div>

            <div>
                <label for="delivered_by" class="block text-sm font-medium text-text-secondary">Entregado por</label>
                <input type="text" name="delivered_by" id="delivered_by" value="{{ old('delivered_by', $WasteEntrie->delivered_by) }}" 
                       class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary-light focus:ring-opacity-50">
            </div>

            <div>
                <label for="area_responsible" class="block text-sm font-medium text-text-secondary">Responsable del área</label>
                <input type="text" name="area_responsible" id="area_responsible" value="{{ old('area_responsible', $WasteEntrie->area_responsible) }}" 
                       class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary-light focus:ring-opacity-50">
            </div>

            <div>
                <label for="document_number" class="block text-sm font-medium text-text-secondary">Número de documento</label>
                <input type="text" name="document_number" id="document_number" value="{{ old('document_number', $WasteEntrie->document_number) }}" 
                       class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary-light focus:ring-opacity-50">
            </div>

            <div>
                <label for="signature" class="block text-sm font-medium text-text-secondary">Firma</label>
                <input type="text" name="signature" id="signature" value="{{ old('signature', $WasteEntrie->signature) }}" 
                       class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary-light focus:ring-opacity-50">
            </div>

            <div class="md:col-span-2">
                <label for="observations" class="block text-sm font-medium text-text-secondary">Observaciones</label>
                <textarea name="observations" id="observations" rows="3" 
                          class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary-light focus:ring-opacity-50">{{ old('observations', $WasteEntrie->observations) }}</textarea>
            </div>
        </div>

        <div class="flex justify-end space-x-2 mt-6">
            <a href="{{ route('WasteEntrie.index') }}" 
               class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">Cancelar</a>
            <button type="submit" 
                    class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition">Actualizar</button>
        </div>
    </form>
</div>
@endsection
