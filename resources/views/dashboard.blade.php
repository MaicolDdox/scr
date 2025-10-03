<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Sistema de Clasificación de Residuos') }} - Dashboard</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-surface antialiased">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside id="sidebar"
            class="sidebar-container bg-white border-r border-gray-200 transition-all duration-300 ease-in-out">
            <!-- Logo y Header -->
            <div class="sidebar-header p-6 border-b border-gray-200">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                        </svg>
                    </div>
                    <div class="sidebar-title">
                        <h2 class="text-lg font-bold text-text-primary">SENA</h2>
                        <p class="text-xs text-text-muted">Gestión Ambiental</p>
                    </div>
                </div>
            </div>

            <!-- Navigation Menu -->
            <nav class="sidebar-nav p-4 pb-10 overflow-y-auto" style="height: calc(100vh - 180px);">

                <!-- Gestión de usuarios -->
                <div class="menu-section mb-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-xs font-semibold text-text-muted uppercase tracking-wider mb-3 px-3">Gestión de
                        usuarios</h3>
                    <ul class="space-y-1">
                        <li>
                            <a href="#"
                                class="menu-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-text-secondary hover:bg-gray-50 hover:border-l-4 hover:border-primary hover:text-text-primary transition-all duration-200 group border-l-4 border-transparent">
                                <svg class="w-5 h-5 text-gray-500 group-hover:text-primary transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                                <span class="font-medium sidebar-text">Usuarios</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="menu-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-text-secondary hover:bg-gray-50 hover:border-l-4 hover:border-primary hover:text-text-primary transition-all duration-200 group border-l-4 border-transparent">
                                <svg class="w-5 h-5 text-gray-500 group-hover:text-primary transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                <span class="font-medium sidebar-text">Roles</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Áreas y puntos ecológicos -->
                <div class="menu-section mb-6" data-aos="fade-up" data-aos-delay="150">
                    <h3 class="text-xs font-semibold text-text-muted uppercase tracking-wider mb-3 px-3">Áreas y puntos
                        ecológicos</h3>
                    <ul class="space-y-1">
                        <li>
                            <a href="#"
                                class="menu-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-text-secondary hover:bg-gray-50 hover:border-l-4 hover:border-primary hover:text-text-primary transition-all duration-200 group border-l-4 border-transparent">
                                <svg class="w-5 h-5 text-gray-500 group-hover:text-primary transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                                <span class="font-medium sidebar-text">Áreas</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="menu-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-text-secondary hover:bg-gray-50 hover:border-l-4 hover:border-primary hover:text-text-primary transition-all duration-200 group border-l-4 border-transparent">
                                <svg class="w-5 h-5 text-gray-500 group-hover:text-primary transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span class="font-medium sidebar-text">Puntos ecológicos</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="menu-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-text-secondary hover:bg-gray-50 hover:border-l-4 hover:border-primary hover:text-text-primary transition-all duration-200 group border-l-4 border-transparent">
                                <svg class="w-5 h-5 text-gray-500 group-hover:text-primary transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                </svg>
                                <span class="font-medium sidebar-text">Inspecciones</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Gestión de residuos -->
                <div class="menu-section mb-6" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-xs font-semibold text-text-muted uppercase tracking-wider mb-3 px-3">Gestión de
                        residuos</h3>
                    <ul class="space-y-1">
                        <li>
                            <a href="#"
                                class="menu-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-text-secondary hover:bg-gray-50 hover:border-l-4 hover:border-primary hover:text-text-primary transition-all duration-200 group border-l-4 border-transparent">
                                <svg class="w-5 h-5 text-gray-500 group-hover:text-primary transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                                <span class="font-medium sidebar-text">Tipos de residuos</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="menu-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-text-secondary hover:bg-gray-50 hover:border-l-4 hover:border-primary hover:text-text-primary transition-all duration-200 group border-l-4 border-transparent">
                                <svg class="w-5 h-5 text-gray-500 group-hover:text-primary transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                                </svg>
                                <span class="font-medium sidebar-text">Entradas de residuos</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="menu-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-text-secondary hover:bg-gray-50 hover:border-l-4 hover:border-primary hover:text-text-primary transition-all duration-200 group border-l-4 border-transparent">
                                <svg class="w-5 h-5 text-gray-500 group-hover:text-primary transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 16v2a2 2 0 01-2 2H5a2 2 0 01-2-2v-7a2 2 0 012-2h2m3-4H9a2 2 0 00-2 2v7a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-1m-1 4l-3 3m0 0l-3-3m3 3V3" />
                                </svg>
                                <span class="font-medium sidebar-text">Salidas de residuos</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="menu-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-text-secondary hover:bg-gray-50 hover:border-l-4 hover:border-primary hover:text-text-primary transition-all duration-200 group border-l-4 border-transparent">
                                <svg class="w-5 h-5 text-gray-500 group-hover:text-primary transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                <span class="font-medium sidebar-text">Residuos peligrosos</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Campañas ambientales -->
                <div class="menu-section mb-6" data-aos="fade-up" data-aos-delay="250">
                    <h3 class="text-xs font-semibold text-text-muted uppercase tracking-wider mb-3 px-3">Reportes</h3>
                    <ul class="space-y-1">
                        <li>
                            <a href="#"
                                class="menu-item flex items-center space-x-3 px-3 py-2.5 rounded-lg text-text-secondary hover:bg-gray-50 hover:border-l-4 hover:border-primary hover:text-text-primary transition-all duration-200 group border-l-4 border-transparent">
                                <svg class="w-5 h-5 text-gray-500 group-hover:text-primary transition-colors"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                </svg>
                                <span class="font-medium sidebar-text">Gráficos</span>
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="menu-item w-full flex items-center space-x-3 px-3 py-2.5 rounded-lg text-text-secondary hover:bg-red-50 hover:border-l-4 hover:border-red-500 hover:text-red-600 transition-all duration-200 group border-l-4 border-transparent">
                                    <svg class="w-5 h-5 text-gray-500 group-hover:text-red-500 transition-colors"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                    <span class="font-medium sidebar-text">Cerrar sesión</span>
                                </button>
                            </form>
                        </li>                                                    
                    </ul>
                </div>             
            </nav>
        </aside>

        <!-- Main Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation Bar -->
            <header class="bg-white border-b border-gray-200 shadow-sm" data-aos="fade-down">
                <div class="flex items-center justify-between px-6 py-4">
                    <!-- Toggle Sidebar Button -->
                    <button id="toggleSidebar"
                        class="text-gray-500 hover:text-primary focus:outline-none focus:ring-2 focus:ring-primary rounded-lg p-2 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>

                    <!-- Page Title -->
                    <div class="flex-1 px-6">
                        <h1 class="text-2xl font-bold text-text-primary">@yield('page-title', 'Dashboard')</h1>
                    </div>

                    <!-- User Menu -->
                    <div class="flex items-center space-x-4">
                        <!-- Notifications -->
                        <button
                            class="relative text-gray-500 hover:text-primary focus:outline-none focus:ring-2 focus:ring-primary rounded-lg p-2 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="absolute top-1 right-1 w-2 h-2 bg-accent rounded-full"></span>
                        </button>

                        <!-- User Profile -->
                        <div class="flex items-center space-x-3">
                            <div class="text-right">
                                <p class="text-sm font-semibold text-text-primary">
                                    {{ Auth::user()->name ?? 'Usuario' }}</p>
                                <p class="text-xs text-text-muted">{{ Auth::user()->role ?? 'Administrador' }}</p>
                            </div>
                            <div class="w-10 h-10 bg-secondary rounded-full flex items-center justify-center">
                                <span
                                    class="text-white font-semibold text-sm">{{ substr(Auth::user()->name ?? 'U', 0, 1) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto bg-surface p-6">
                <div class="container-custom" data-aos="fade-up">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Sidebar Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const toggleBtn = document.getElementById('toggleSidebar');

            toggleBtn.addEventListener('click', function() {
                sidebar.classList.toggle('sidebar-collapsed');
            });
        });
    </script>

    <style>
        .sidebar-container {
            width: 280px;
            flex-shrink: 0;
        }

        .sidebar-container.sidebar-collapsed {
            width: 80px;
        }

        .sidebar-collapsed .sidebar-header h2,
        .sidebar-collapsed .sidebar-header p,
        .sidebar-collapsed .menu-section h3,
        .sidebar-collapsed .sidebar-text {
            opacity: 0;
            visibility: hidden;
        }

        .sidebar-collapsed .sidebar-header {
            justify-content: center;
        }

        .sidebar-collapsed .menu-item {
            justify-content: center;
        }

        /* Updated active state to use border instead of full background */
        .menu-item.active {
            background-color: rgba(var(--color-primary), 0.1);
            border-left: 4px solid rgb(var(--color-primary));
            color: rgb(var(--color-primary));
        }

        .menu-item.active svg {
            color: rgb(var(--color-primary));
        }
    </style>
</body>

</html>
