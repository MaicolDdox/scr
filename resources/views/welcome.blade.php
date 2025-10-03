<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistema de Clasificación de Residuos Sólidos - Centro Agroindustrial SENA">
    <title>Sistema de Clasificación de Residuos Sólidos - SENA</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface">
    
      
    @if (Route::has('login'))
        <header class="navbar-scroll fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-200 transition-all duration-300">
            <div class="container-custom">
                <div class="flex items-center justify-between h-16">
                      
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                        </div>
                        <div class="hidden sm:block">
                            <h1 class="text-lg font-bold text-text-primary">Sistema de Residuos</h1>
                            <p class="text-xs text-text-muted">SENA Agroindustrial</p>
                        </div>
                    </div>
                    
                      
                    <nav class="flex items-center gap-2">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-text-primary bg-white border border-gray-300 rounded-lg hover:bg-gray-50 hover:border-gray-400 transition-all duration-200"
                            >
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="inline-flex items-center px-4 py-2 text-sm font-medium text-text-primary hover:text-primary transition-colors duration-200"
                            >
                                Iniciar Sesión
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-primary hover:bg-primary-dark rounded-lg transition-all duration-200 shadow-sm hover:shadow-md"
                                >
                                    Registrarse
                                </a>
                            @endif
                        @endauth
                    </nav>
                </div>
            </div>
        </header>
        <div class="h-16"></div>
    @endif
     </CHANGE> 
    
     
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
         
        <div class="absolute inset-0 gradient-hero opacity-10"></div>
        <div class="absolute inset-0 bg-white/80 backdrop-blur-sm"></div>
        
         
        <div class="container-custom relative z-10">
            <div class="text-center max-w-4xl mx-auto">
                 
                <div class="mb-8" data-aos="fade-down">
                    <div class="inline-flex items-center justify-center w-24 h-24 bg-primary rounded-2xl shadow-xl">
                        <svg class="w-14 h-14 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                </div>
                
                 
                <h1 class="mb-6 text-text-primary" data-aos="fade-up" data-aos-delay="100">
                    Sistema de Clasificación de <span class="text-primary">Residuos Sólidos</span>
                </h1>
                
                
                <p class="text-xl md:text-2xl text-text-secondary mb-8 leading-relaxed" data-aos="fade-up" data-aos-delay="200">
                    Centro Agroindustrial SENA - Gestión inteligente y sostenible de residuos con reportes gráficos avanzados
                </p>
                
                  
                <div class="flex flex-wrap justify-center gap-3 mb-12" data-aos="fade-up" data-aos-delay="300">
                    <span class="badge badge-success">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        Clasificación Inteligente
                    </span>
                    <span class="badge badge-info">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"/>
                        </svg>
                        Reportes Gráficos
                    </span>
                    <span class="badge badge-warning">
                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                        </svg>
                        Gestión en Tiempo Real
                    </span>
                </div>
                
                  
                <div class="flex flex-col sm:flex-row gap-4 justify-center" data-aos="fade-up" data-aos-delay="400">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            Ir al Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                            </svg>
                            Iniciar Sesión
                        </a>
                    @endauth
                    <a href="#features" class="btn btn-outline">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Conocer Más
                    </a>
                </div>
            </div>
        </div>
        
         
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2" data-aos="fade-up" data-aos-delay="500">
            <a href="#features" class="flex flex-col items-center text-text-muted hover:text-primary transition-colors">
                <span class="text-sm mb-2">Desliza para explorar</span>
                <svg class="w-6 h-6 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                </svg>
            </a>
        </div>
    </section>
    
      
    <section id="features" class="section bg-white">
        <div class="container-custom">
             
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="mb-4 text-text-primary">Características Principales</h2>
                <p class="text-lg text-text-secondary leading-relaxed">
                    Herramientas avanzadas para la gestión eficiente de residuos sólidos en todo el centro agroindustrial
                </p>
            </div>
            
             
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body">
                        <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-text-primary">Clasificación Precisa</h3>
                        <p class="text-text-secondary leading-relaxed">
                            Sistema de categorización inteligente para todos los tipos de residuos generados en el centro agroindustrial
                        </p>
                    </div>
                </div>
                
                  
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body">
                        <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-text-primary">Reportes Gráficos</h3>
                        <p class="text-text-secondary leading-relaxed">
                            Visualización avanzada de datos con gráficos interactivos y estadísticas detalladas en tiempo real
                        </p>
                    </div>
                </div>
                
                  
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-body">
                        <div class="w-14 h-14 bg-orange-100 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-text-primary">Monitoreo Continuo</h3>
                        <p class="text-text-secondary leading-relaxed">
                            Seguimiento en tiempo real de todos los residuos registrados y procesados en el sistema
                        </p>
                    </div>
                </div>
                
                 
                <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body">
                        <div class="w-14 h-14 bg-green-100 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-text-primary">Registro Detallado</h3>
                        <p class="text-text-secondary leading-relaxed">
                            Documentación completa de cada residuo con información de origen, tipo, peso y fecha de registro
                        </p>
                    </div>
                </div>
                
                 
                <div class="card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body">
                        <div class="w-14 h-14 bg-blue-100 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-text-primary">Gestión Colaborativa</h3>
                        <p class="text-text-secondary leading-relaxed">
                            Sistema multiusuario con roles y permisos para todo el personal del centro agroindustrial
                        </p>
                    </div>
                </div>
                
                
                <div class="card" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-body">
                        <div class="w-14 h-14 bg-orange-100 rounded-xl flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-text-primary">Análisis Avanzado</h3>
                        <p class="text-text-secondary leading-relaxed">
                            Herramientas de análisis para identificar tendencias y optimizar la gestión de residuos
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     
    <section class="section bg-surface">
        <div class="container-custom">
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div data-aos="fade-up" data-aos-delay="100">
                    <div class="text-5xl font-bold text-primary mb-2">
                        <span class="counter" data-target="100">0</span>%
                    </div>
                    <p class="text-text-secondary text-lg">Cobertura del Centro</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <div class="text-5xl font-bold text-secondary mb-2">
                        <span class="counter" data-target="24">0</span>/7
                    </div>
                    <p class="text-text-secondary text-lg">Disponibilidad</p>
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <div class="text-5xl font-bold text-accent mb-2">
                        <span class="counter" data-target="10">0</span>+
                    </div>
                    <p class="text-text-secondary text-lg">Tipos de Residuos</p>
                </div>
            </div>
        </div>
    </section>
    
     
    <section class="section bg-white">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
                <div class="card">
                    <div class="card-body py-12">
                        <h2 class="mb-4 text-text-primary">¿Listo para comenzar?</h2>
                        <p class="text-lg text-text-secondary mb-8 leading-relaxed">
                            Accede al sistema y comienza a gestionar los residuos sólidos de manera eficiente y sostenible
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                                    Ir al Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-primary">
                                    Acceder al Sistema
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-outline">
                                        Registrarse
                                    </a>
                                @endif
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <footer class="bg-text-primary text-gray-400 py-12">
        <div class="container-custom">
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h4 class="font-bold mb-4">Sistema de Clasificación</h4>
                    <p class="text-gray-400 leading-relaxed">
                        Gestión inteligente de residuos sólidos para el Centro Agroindustrial SENA
                    </p>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Enlaces Rápidos</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Inicio</a></li>
                        <li><a href="#features" class="text-gray-400 hover:text-white transition-colors">Características</a></li>
                        <li><a href="{{ route('login') }}" class="text-gray-400 hover:text-white transition-colors">Iniciar Sesión</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold mb-4">Contacto</h4>
                    <p class="text-gray-400 leading-relaxed">
                        Centro Agroindustrial SENA<br>
                        Gestión Ambiental
                    </p>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} SENA - Sistema de Clasificación de Residuos Sólidos. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
    
</body>
</html>
