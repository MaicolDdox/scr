@extends('dashboard')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-md">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Editar Residuo Peligroso</h2>

    {{-- Mensajes de error --}}
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded-lg mb-4">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('HazardousWaste.update', $HazardousWaste->id) }}" method="POST" class="space-y-5">
        @csrf
        @method('PUT')

        {{-- Fecha --}}
        <div>
            <label for="date" class="block text-sm font-medium text-gray-700">Fecha de generación</label>
            <input type="date" name="date" id="date" value="{{ old('date', $HazardousWaste->date) }}"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        {{-- Unidad generadora --}}
        <div>
            <label for="generating_unit" class="block text-sm font-medium text-gray-700">Unidad generadora</label>
            <input type="text" name="generating_unit" id="generating_unit" value="{{ old('generating_unit', $HazardousWaste->generating_unit) }}"
                placeholder="Ej: Laboratorio de Química"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        {{-- Nombre del residuo --}}
        <div>
            <label for="waste_name" class="block text-sm font-medium text-gray-700">Nombre del residuo</label>
            <input type="text" name="waste_name" id="waste_name" value="{{ old('waste_name', $HazardousWaste->waste_name) }}"
                placeholder="Ej: Ácido sulfúrico usado"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        {{-- Característica de peligrosidad --}}
        <div>
            <label for="hazard_characteristic" class="block text-sm font-medium text-gray-700">Característica de peligrosidad</label>
            <input type="text" name="hazard_characteristic" id="hazard_characteristic" value="{{ old('hazard_characteristic', $HazardousWaste->hazard_characteristic) }}"
                placeholder="Ej: Corrosivo, Inflamable"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        {{-- Frecuencia --}}
        <div>
            <label for="frequency" class="block text-sm font-medium text-gray-700">Frecuencia de generación</label>
            <input type="text" name="frequency" id="frequency" value="{{ old('frequency', $HazardousWaste->frequency) }}"
                placeholder="Ej: Mensual, Semanal"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        {{-- Estado físico --}}
        <div>
            <label for="physical_state" class="block text-sm font-medium text-gray-700">Estado físico</label>
            <select name="physical_state" id="physical_state"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                <option value="">Seleccione una opción</option>
                <option value="Sólido" {{ old('physical_state', $HazardousWaste->physical_state) == 'Sólido' ? 'selected' : '' }}>Sólido</option>
                <option value="Líquido" {{ old('physical_state', $HazardousWaste->physical_state) == 'Líquido' ? 'selected' : '' }}>Líquido</option>
                <option value="Gaseoso" {{ old('physical_state', $HazardousWaste->physical_state) == 'Gaseoso' ? 'selected' : '' }}>Gaseoso</option>
                <option value="Pasta" {{ old('physical_state', $HazardousWaste->physical_state) == 'Pasta' ? 'selected' : '' }}>Pasta</option>
            </select>
        </div>

        {{-- Cantidad --}}
        <div>
            <label for="quantity" class="block text-sm font-medium text-gray-700">Cantidad generada</label>
            <input type="number" step="0.01" name="quantity" id="quantity" value="{{ old('quantity', $HazardousWaste->quantity) }}"
                placeholder="Ej: 25.50"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        {{-- Unidad --}}
        <div>
            <label for="unit" class="block text-sm font-medium text-gray-700">Unidad de medida</label>
            <input type="text" name="unit" id="unit" value="{{ old('unit', $HazardousWaste->unit) }}"
                placeholder="Ej: kg, litros, unidades"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        {{-- Entregado por --}}
        <div>
            <label for="delivered_by" class="block text-sm font-medium text-gray-700">Entregado por</label>
            <input type="text" name="delivered_by" id="delivered_by" value="{{ old('delivered_by', $HazardousWaste->delivered_by) }}"
                placeholder="Nombre de la persona"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        {{-- Registrado por --}}
        <div>
            <label for="registered_by" class="block text-sm font-medium text-gray-700">Registrado por</label>
            <input type="text" name="registered_by" id="registered_by" value="{{ old('registered_by', $HazardousWaste->registered_by) }}"
                placeholder="Responsable del registro"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        {{-- Botones --}}
        <div class="flex justify-between items-center pt-4">
            <a href="{{ route('HazardousWaste.index') }}"
                class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">Cancelar</a>
            <button type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Actualizar</button>
        </div>
    </form>
</div>
@endsection
