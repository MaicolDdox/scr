<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen bg-gradient-to-br from-gray-50 via-white to-sena-green-50/30 antialiased">
    {{-- Improved background with subtle gradient and better structure --}}
    <div class="flex min-h-screen flex-col items-center justify-center gap-6 p-6 md:p-10">
        <div class="w-full max-w-md">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
