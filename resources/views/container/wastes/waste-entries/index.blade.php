@extends('dashboard')

@section('content')
<div class="max-w-6xl mx-auto bg-white rounded-xl shadow-md p-6 animate-fade-in">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-text-primary">Entradas de Residuos</h2>
        <a href="{{ route('WasteEntrie.create') }}" 
           class="px-4 py-2 bg-primary text-white rounded-lg hover:bg-primary-dark transition">Agregar Residuo</a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-text-muted uppercase">Fecha</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-text-muted uppercase">Área</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-text-muted uppercase">Tipo de residuo</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-text-muted uppercase">Cantidad</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-text-muted uppercase">Unidad</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-text-muted uppercase">Entregado por</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-text-muted uppercase">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse ($wasteEntries as $entry)
                    <tr>
                        <td class="px-4 py-2 text-sm text-text-secondary">{{ $entry->date }}</td>
                        <td class="px-4 py-2 text-sm text-text-secondary">{{ $entry->area }}</td>
                        <td class="px-4 py-2 text-sm text-text-secondary">{{ $entry->waste_type }}</td>
                        <td class="px-4 py-2 text-sm text-text-secondary">{{ $entry->quantity }}</td>
                        <td class="px-4 py-2 text-sm text-text-secondary">{{ $entry->unit }}</td>
                        <td class="px-4 py-2 text-sm text-text-secondary">{{ $entry->delivered_by }}</td>
                        <td class="px-4 py-2 text-sm text-text-secondary flex space-x-2">
                            <a href="{{ route('WasteEntrie.edit', $entry->id) }}" 
                               class="px-3 py-1 bg-yellow-100 text-yellow-700 rounded-lg hover:bg-yellow-200 transition">Editar</a>
                            <form action="{{ route('WasteEntrie.destroy', $entry->id) }}" method="POST" onsubmit="return confirm('¿Está seguro de eliminar este registro?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="px-3 py-1 bg-red-100 text-red-700 rounded-lg hover:bg-red-200 transition">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-6 text-center text-text-muted">No hay registros disponibles</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        {{ $wasteEntries->links() }}
    </div>

</div>
@endsection
