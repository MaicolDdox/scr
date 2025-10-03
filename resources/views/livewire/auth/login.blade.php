
{{-- Enhanced form design with better styling and user experience --}}
<div class="flex flex-col gap-6">
    {{-- Header --}}
    <div class="flex flex-col gap-2 text-center">
        <h2 class="text-2xl font-bold text-gray-900">Ingresa al Sistema</h2>
        <p class="text-sm text-gray-600">Ingresa tus datos para iniciar sesion</p>
    </div>

    {{-- Session Status --}}
    @if (session('status'))
        <div class="rounded-lg bg-sena-green-50 border border-sena-green-200 p-4 text-sm text-sena-green-800 text-center">
            {{ session('status') }}
        </div>
    @endif

    {{-- Formulario --}}
    <form method="POST" wire:submit="login" class="flex flex-col gap-5">

        {{-- Email Address --}}
        <div class="flex flex-col gap-2">
            <label for="email" class="text-sm font-medium text-gray-700">
                Correo electrónico
            </label>
            <input
                id="email"
                wire:model="email"
                type="email"
                required
                autocomplete="email"
                placeholder="correo@ejemplo.com"
                class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-white text-gray-900 placeholder-gray-400 focus:border-sena-green-500 focus:ring-2 focus:ring-sena-green-500/20 transition-all duration-200 outline-none"
            />
            @error('email')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        {{-- Password --}}
        <div class="flex flex-col gap-2">
            <label for="password" class="text-sm font-medium text-gray-700">
                Contraseña
            </label>
            <input
                id="password"
                wire:model="password"
                type="password"
                required
                autocomplete="new-password"
                placeholder="••••••••"
                class="w-full px-4 py-3 rounded-lg border border-gray-300 bg-white text-gray-900 placeholder-gray-400 focus:border-sena-green-500 focus:ring-2 focus:ring-sena-green-500/20 transition-all duration-200 outline-none"
            />
            @error('password')
                <span class="text-sm text-red-600">{{ $message }}</span>
            @enderror
        </div>

        {{-- Submit Button --}}
        <button 
            type="submit" 
            class="w-full px-6 py-3 bg-gradient-to-r from-sena-green-600 to-sena-green-700 border-gray-500 text-gray-800 font-semibold rounded-lg hover:from-sena-green-700 hover:to-sena-green-800 focus:ring-4 focus:ring-sena-green-500/20 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
        >
            Loguin
        </button>
    </form>

    {{-- Login Link --}}
    <div class="text-center text-sm text-gray-600">
        <span>¿No tienes una cuenta?</span>
        <a href="{{ route('register') }}" wire:navigate class="font-semibold text-sena-green-600 hover:text-sena-green-700 transition-colors duration-200 ml-1">
            Registrarse
        </a>
    </div>
</div>

