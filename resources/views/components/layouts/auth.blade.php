<x-layouts.auth.simple>
    {{-- Enhanced layout with logo, improved card design and footer --}}
    <div class="flex flex-col gap-8">
        {{-- Logo y Header --}}
        <div class="flex flex-col items-center gap-4 text-center">
            <a href="{{ route('home') }}" class="group flex flex-col items-center gap-3 transition-transform duration-300 hover:scale-105" wire:navigate>
                {{-- Logo Container --}}
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-sena-green-500 to-sena-blue-500 rounded-2xl blur-xl opacity-20 group-hover:opacity-30 transition-opacity duration-300"></div>
                    <div class="relative bg-white rounded-2xl p-4 shadow-lg group-hover:shadow-xl transition-all duration-300 border border-gray-100">
                        <svg class="w-12 h-12 text-sena-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                </div>
                
                {{-- Título --}}
                <div class="flex flex-col gap-1">
                    <h1 class="text-2xl font-bold text-gray-900">SCR SENA</h1>
                    <p class="text-sm text-gray-600">Sistema de Clasificación de Residuos</p>
                </div>
            </a>
        </div>

        {{-- Card Principal --}}
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden backdrop-blur-sm">
            <div class="p-8">
                {{ $slot }}
            </div>
        </div>

        {{-- Footer --}}
        <div class="text-center text-sm text-gray-600">
            <p>&copy; {{ date('Y') }} SENA - Centro Agroindustrial</p>
        </div>
    </div>
</x-layouts.auth.simple>