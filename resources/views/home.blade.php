@extends('welcome')

@section('content')
<main class="pt-20 bg-gray-950 text-gray-100"> <!-- Ajuste para el header fixed -->

    <!-- Sección Hero -->
    <section id="inicio" class="relative bg-gradient-to-br from-gray-900 to-black py-20 overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1605296867424-35fc25c9212a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80')] bg-cover bg-center"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center py-16 md:py-24">
                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-emerald-400">
                    REVOLUCIONA TU ENTRENAMIENTO
                </h1>
                <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-300">
                    Tecnología de vanguardia meets fitness en nuestras instalaciones de última generación
                </p>
                <div class="mt-10 flex justify-center gap-4">
                    <a href="#" class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-black bg-cyan-400 hover:bg-cyan-300 transition duration-300 shadow-lg shadow-cyan-500/20">
                        Prueba gratis
                    </a>
                    <a href="#" class="px-8 py-3 border border-cyan-400 text-base font-medium rounded-md text-cyan-400 bg-transparent hover:bg-cyan-400/10 transition duration-300">
                        Conoce más
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Sucursales (ID para enlace del menú) -->
    <section id="sucursales" class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block">NUESTRAS</span>
                    <span class="block text-cyan-400">SUCURSALES FUTURISTAS</span>
                </h2>
                <div class="mt-2 h-1 w-20 bg-cyan-400 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Sucursal 1 -->
                <div class="relative group overflow-hidden rounded-xl border border-gray-800 hover:border-cyan-400/50 transition duration-500">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-900 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1571902943202-507ec2618e8f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1075&q=80"
                             alt="Sucursal Norte" class="object-cover w-full h-64 group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6 bg-gray-900/80 backdrop-blur-sm">
                        <h3 class="text-xl font-bold text-white mb-2">Zona Norte</h3>
                        <p class="text-gray-300 mb-4">Tecnología fitness de última generación en el corazón financiero</p>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li class="flex items-center">
                                <svg class="h-4 w-4 text-cyan-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Lunes a Viernes: 5:00 - 23:00
                            </li>
                            <li class="flex items-center">
                                <svg class="h-4 w-4 text-cyan-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Av. Tecnológico 1500
                            </li>
                        </ul>
                        <a href="#" class="mt-4 inline-flex items-center text-cyan-400 hover:text-white transition duration-300">
                            Ver más detalles
                            <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Sucursal 2 -->
                <div class="relative group overflow-hidden rounded-xl border border-gray-800 hover:border-cyan-400/50 transition duration-500">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-900 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581009146145-b5ef050c2e1e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                             alt="Sucursal Centro" class="object-cover w-full h-64 group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6 bg-gray-900/80 backdrop-blur-sm">
                        <h3 class="text-xl font-bold text-white mb-2">Centro Histórico</h3>
                        <p class="text-gray-300 mb-4">Combina tradición con tecnología fitness de punta</p>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li class="flex items-center">
                                <svg class="h-4 w-4 text-cyan-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Lunes a Domingo: 6:00 - 22:00
                            </li>
                            <li class="flex items-center">
                                <svg class="h-4 w-4 text-cyan-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Calle Futurismo 220
                            </li>
                        </ul>
                        <a href="#" class="mt-4 inline-flex items-center text-cyan-400 hover:text-white transition duration-300">
                            Ver más detalles
                            <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Sucursal 3 -->
                <div class="relative group overflow-hidden rounded-xl border border-gray-800 hover:border-cyan-400/50 transition duration-500">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-900 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1545205597-3d9d02c29597?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                             alt="Sucursal Sur" class="object-cover w-full h-64 group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6 bg-gray-900/80 backdrop-blur-sm">
                        <h3 class="text-xl font-bold text-white mb-2">Zona Sur</h3>
                        <p class="text-gray-300 mb-4">El gimnasio más grande con tecnología de realidad virtual</p>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li class="flex items-center">
                                <svg class="h-4 w-4 text-cyan-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                24/7 para miembros Black
                            </li>
                            <li class="flex items-center">
                                <svg class="h-4 w-4 text-cyan-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                Blvd. Innovación 3500
                            </li>
                        </ul>
                        <a href="#" class="mt-4 inline-flex items-center text-cyan-400 hover:text-white transition duration-300">
                            Ver más detalles
                            <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Planes -->
    <section id="planes" class="py-20 bg-gradient-to-b from-black to-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block">NUESTROS</span>
                    <span class="block text-emerald-400">PLANES FUTURISTAS</span>
                </h2>
                <div class="mt-2 h-1 w-20 bg-emerald-400 mx-auto"></div>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-300">
                    Elige el plan que se adapte a tus metas fitness con tecnología de punta
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Plan Básico -->
                <div class="relative group overflow-hidden rounded-xl border border-gray-800 hover:border-emerald-400 transition duration-500">
                    <div class="p-6 bg-gray-900/50 backdrop-blur-sm">
                        <h3 class="text-2xl font-bold text-white mb-2">BÁSICO</h3>
                        <p class="text-gray-300 mb-4">Acceso a equipos básicos y 2 clases grupales por semana</p>

                        <div class="my-6">
                            <span class="text-4xl font-extrabold text-white">$599</span>
                            <span class="text-lg text-gray-400">/mes</span>
                        </div>

                        <ul class="space-y-3 text-gray-300 mb-8">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-emerald-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Acceso a zona cardio
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-emerald-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                2 clases grupales/semana
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-emerald-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                App móvil básica
                            </li>
                        </ul>

                        <a href="#" class="w-full inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-black bg-gray-300 hover:bg-white transition duration-300">
                            Comenzar ahora
                        </a>
                    </div>
                </div>

                <!-- Plan Premium (Destacado) -->
                <div class="relative group overflow-hidden rounded-xl border-2 border-emerald-400 transform scale-105 z-10 shadow-lg shadow-emerald-500/20">
                    <div class="absolute top-0 right-0 bg-emerald-400 text-black text-xs font-bold px-3 py-1 transform translate-x-2 -translate-y-2 rotate-12">
                        POPULAR
                    </div>
                    <div class="p-6 bg-gray-900">
                        <h3 class="text-2xl font-bold text-white mb-2">PREMIUM</h3>
                        <p class="text-gray-300 mb-4">Acceso ilimitado + tecnología avanzada de seguimiento</p>

                        <div class="my-6">
                            <span class="text-4xl font-extrabold text-white">$999</span>
                            <span class="text-lg text-gray-400">/mes</span>
                        </div>

                        <ul class="space-y-3 text-gray-300 mb-8">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-emerald-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Acceso ilimitado 24/7
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-emerald-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Clases grupales ilimitadas
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-emerald-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                App premium con IA
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-emerald-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Entrenador virtual
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-emerald-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Análisis de movimiento
                            </li>
                        </ul>

                        <a href="#" class="w-full inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-black bg-emerald-400 hover:bg-emerald-300 transition duration-300 shadow-lg shadow-emerald-400/30">
                            Comenzar ahora
                        </a>
                    </div>
                </div>

                <!-- Plan Black -->
                <div class="relative group overflow-hidden rounded-xl border border-gray-800 hover:border-emerald-400 transition duration-500">
                    <div class="p-6 bg-gray-900/50 backdrop-blur-sm">
                        <h3 class="text-2xl font-bold text-white mb-2">BLACK</h3>
                        <p class="text-gray-300 mb-4">Experiencia fitness completa con tecnología de punta</p>

                        <div class="my-6">
                            <span class="text-4xl font-extrabold text-white">$1,499</span>
                            <span class="text-lg text-gray-400">/mes</span>
                        </div>

                        <ul class="space-y-3 text-gray-300 mb-8">
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-emerald-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Todo en Premium +
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-emerald-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Entrenador personal 1x/semana
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-emerald-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Acceso a zona VIP
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-emerald-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Realidad virtual fitness
                            </li>
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-emerald-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                Nutricionista digital
                            </li>
                        </ul>

                        <a href="#" class="w-full inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-black bg-gray-300 hover:bg-white transition duration-300">
                            Comenzar ahora
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Nosotros -->
    <section id="nosotros" class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-16 items-center">
                <div class="mb-12 lg:mb-0">
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl mb-6">
                        <span class="block">INNOVACIÓN EN</span>
                        <span class="block text-cyan-400">CADA ENTRENAMIENTO</span>
                    </h2>
                    <div class="h-1 w-20 bg-cyan-400 mb-8"></div>
                    <p class="text-lg text-gray-300 mb-6">
                        En GoFitMx combinamos lo último en tecnología fitness con metodologías probadas para ofrecerte una experiencia de entrenamiento revolucionaria.
                    </p>
                    <p class="text-lg text-gray-300 mb-8">
                        Nuestros sensores de movimiento, realidad virtual integrada y sistemas de análisis en tiempo real te ayudarán a alcanzar tus metas como nunca antes.
                    </p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-900 p-4 rounded-lg border border-gray-800">
                            <div class="text-cyan-400 text-2xl font-bold mb-2">2018</div>
                            <div class="text-white text-sm">Año de fundación</div>
                        </div>
                        <div class="bg-gray-900 p-4 rounded-lg border border-gray-800">
                            <div class="text-cyan-400 text-2xl font-bold mb-2">15K+</div>
                            <div class="text-white text-sm">Miembros activos</div>
                        </div>
                        <div class="bg-gray-900 p-4 rounded-lg border border-gray-800">
                            <div class="text-cyan-400 text-2xl font-bold mb-2">120+</div>
                            <div class="text-white text-sm">Tecnologías implementadas</div>
                        </div>
                        <div class="bg-gray-900 p-4 rounded-lg border border-gray-800">
                            <div class="text-cyan-400 text-2xl font-bold mb-2">9</div>
                            <div class="text-white text-sm">Premios de innovación</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative rounded-xl overflow-hidden border border-gray-800">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                             alt="Tecnología GoFitMx" class="w-full h-auto">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-2/3 rounded-xl overflow-hidden border border-cyan-400/50 z-10">
                        <img src="https://images.unsplash.com/photo-1571019614242-c5c5dee9f50b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                             alt="Entrenamiento con tecnología" class="w-full h-auto">
                        <div class="absolute inset-0 bg-cyan-400/10 backdrop-blur-sm flex items-center justify-center">
                            <button class="bg-cyan-400/80 hover:bg-cyan-400 text-white rounded-full p-4 transition duration-300 shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Contacto -->
    <section id="contacto" class="py-20 bg-gradient-to-b from-gray-900 to-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block">CONTACTO</span>
                    <span class="block text-emerald-400">FUTURISTA</span>
                </h2>
                <div class="mt-2 h-1 w-20 bg-emerald-400 mx-auto"></div>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-300">
                    ¿Listo para llevar tu entrenamiento al siguiente nivel? Contáctanos.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Formulario -->
                <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl border border-gray-800 p-8">
                    <form>
                        <div class="grid grid-cols-1 gap-6">
                            <div>
                                <label for="nombre" class="block text-sm font-medium text-gray-300 mb-1">Nombre completo</label>
                                <input type="text" id="nombre" class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 focus:border-cyan-400 focus:outline-none text-white transition duration-300">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Correo electrónico</label>
                                <input type="email" id="email" class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 focus:border-cyan-400 focus:outline-none text-white transition duration-300">
                            </div>
                            <div>
                                <label for="telefono" class="block text-sm font-medium text-gray-300 mb-1">Teléfono</label>
                                <input type="tel" id="telefono" class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 focus:border-cyan-400 focus:outline-none text-white transition duration-300">
                            </div>
                            <div>
                                <label for="mensaje" class="block text-sm font-medium text-gray-300 mb-1">Mensaje</label>
                                <textarea id="mensaje" rows="4" class="w-full px-4 py-3 rounded-lg bg-gray-800 border border-gray-700 focus:border-cyan-400 focus:outline-none text-white transition duration-300"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-cyan-500 to-emerald-500 text-black font-medium rounded-lg hover:shadow-lg hover:shadow-cyan-500/30 transition duration-300">
                                    Enviar mensaje
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Info de contacto -->
                <div class="space-y-8">
                    <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl border border-gray-800 p-8">
                        <h3 class="text-xl font-bold text-white mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Contacto directo
                        </h3>
                        <ul class="space-y-4 text-gray-300">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span>info@gofitmx.com<br>
                                <span class="text-sm text-gray-400">Respuesta en menos de 24h</span></span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cyan-400 mr-3 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                                <span>+52 81 1234 5678<br>
                                <span class="text-sm text-gray-400">Lunes a Viernes de 9:00 a 18:00</span></span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-gray-900/50 backdrop-blur-sm rounded-xl border border-gray-800 p-8">
                        <h3 class="text-xl font-bold text-white mb-6 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            Visítanos
                        </h3>
                        <div class="aspect-w-16 aspect-h-9 rounded-lg overflow-hidden border border-gray-700 mb-4">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14377.926165115052!2d-100.3183475!3d25.67254545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662c13b96b4f8a5%3A0x6a5c8010e69b1fdf!2sCentro%20de%20Tecnolog%C3%ADa%20Avanzada%20CIATEQ!5e0!3m2!1ses!2smx!4v1684875421211!5m2!1ses!2smx" class="w-full h-64" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <p class="text-gray-300">
                            Av. Tecnológico 1234, Zona Futurista<br>
                            Monterrey, N.L. México
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
