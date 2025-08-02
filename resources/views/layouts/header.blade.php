<!-- resources/views/layouts/header.blade.php -->
<header class="bg-black bg-opacity-90 backdrop-blur-md border-b border-cyan-500/20 fixed w-full z-50" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo - Visible en todas las pantallas -->
            <div class="flex-shrink-0 flex items-center">
                <a href="#" class="flex items-center group">
                    <div class="relative">
                        <div class="absolute -inset-1 bg-cyan-500 rounded-lg blur opacity-75 group-hover:opacity-100 transition duration-200"></div>
                        <div class="relative flex items-center justify-center h-10 w-10 bg-black border-2 border-cyan-400 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                    </div>
                    <span class="ml-3 text-2xl font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-cyan-400 to-emerald-400 tracking-tight">
                        GO<span class="text-white">FIT</span>MX
                    </span>
                </a>
            </div>

            <!-- Menú desktop - Oculto en móviles -->
            <nav class="hidden md:flex space-x-1 lg:space-x-2 xl:space-x-4" x-data="{
                    scrollTo(id) {
                        document.getElementById(id)?.scrollIntoView({
                            behavior: 'smooth'
                        });
                        mobileMenuOpen = false; // Cierra el menú móvil si está abierto
                    }
                }">
                <a @click="scrollTo('inicio')" class="cursor-pointer relative group px-3 py-2 text-sm font-medium transition-all duration-300">
                    <span class="text-gray-300 hover:text-white">INICIO</span>
                    <span class="absolute left-1/2 transform -translate-x-1/2 bottom-0 w-0 h-0.5 bg-cyan-400 group-hover:w-4/5 transition-all duration-300"></span>
                </a>
                <a @click="scrollTo('sucursales')" class="cursor-pointer relative group px-3 py-2 text-sm font-medium transition-all duration-300">
                    <span class="text-gray-300 hover:text-white">SUCURSALES</span>
                    <span class="absolute left-1/2 transform -translate-x-1/2 bottom-0 w-0 h-0.5 bg-cyan-400 group-hover:w-4/5 transition-all duration-300"></span>
                </a>
                <a @click="scrollTo('planes')" class="cursor-pointer relative group px-3 py-2 text-sm font-medium transition-all duration-300">
                    <span class="text-gray-300 hover:text-white">PLANES</span>
                    <span class="absolute left-1/2 transform -translate-x-1/2 bottom-0 w-0 h-0.5 bg-cyan-400 group-hover:w-4/5 transition-all duration-300"></span>
                </a>
                <a @click="scrollTo('nosotros')" class="cursor-pointer relative group px-3 py-2 text-sm font-medium transition-all duration-300">
                    <span class="text-gray-300 hover:text-white">NOSOTROS</span>
                    <span class="absolute left-1/2 transform -translate-x-1/2 bottom-0 w-0 h-0.5 bg-cyan-400 group-hover:w-4/5 transition-all duration-300"></span>
                </a>
                <a @click="scrollTo('contacto')" class="cursor-pointer relative group px-3 py-2 text-sm font-medium transition-all duration-300">
                    <span class="text-gray-300 hover:text-white">CONTACTO</span>
                    <span class="absolute left-1/2 transform -translate-x-1/2 bottom-0 w-0 h-0.5 bg-cyan-400 group-hover:w-4/5 transition-all duration-300"></span>
                </a>
            </nav>

            <!-- Botones de acción desktop - Oculto en móviles -->
            <div class="hidden md:flex items-center space-x-2 lg:space-x-4">
                <a href="#" class="px-3 py-1.5 lg:px-4 lg:py-2 rounded-md text-xs lg:text-sm font-medium text-gray-300 hover:text-white border border-cyan-400/30 hover:border-cyan-400/60 transition-all duration-300">
                    INGRESAR
                </a>
                <a href="#" class="px-3 py-1.5 lg:px-4 lg:py-2 rounded-md text-xs lg:text-sm font-medium bg-gradient-to-r from-cyan-500 to-emerald-500 text-black hover:shadow-lg hover:shadow-cyan-500/30 transition-all duration-300">
                    INSCRÍBETE
                </a>
            </div>

            <!-- Botón menú móvil - Solo visible en móviles -->
            <div class="md:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-800 focus:outline-none transition duration-150">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="mobileMenuOpen ? 'M6 18L18 6M6 6l12 12' : 'M4 6h16M4 12h16M4 18h16'" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Menú móvil - Solo visible en móviles -->
    <div class="md:hidden" x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-150"
         x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-125" x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95" style="display: none;">
        <div class="px-2 pt-2 pb-4 space-y-1 sm:px-3 bg-gray-900/95 backdrop-blur-lg">
            <a @click="scrollTo('inicio'); mobileMenuOpen = false" class="block px-3 py-3 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-800 transition duration-150 border-l-2 border-transparent hover:border-cyan-400">
                INICIO
            </a>
            <a @click="scrollTo('sucursales'); mobileMenuOpen = false" class="block px-3 py-3 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-800 transition duration-150 border-l-2 border-transparent hover:border-cyan-400">
                SUCURSALES
            </a>
            <a @click="scrollTo('planes'); mobileMenuOpen = false" class="block px-3 py-3 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-800 transition duration-150 border-l-2 border-transparent hover:border-cyan-400">
                PLANES
            </a>
            <a @click="scrollTo('nosotros'); mobileMenuOpen = false" class="block px-3 py-3 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-800 transition duration-150 border-l-2 border-transparent hover:border-cyan-400">
                NOSOTROS
            </a>
            <a @click="scrollTo('contacto'); mobileMenuOpen = false" class="block px-3 py-3 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-800 transition duration-150 border-l-2 border-transparent hover:border-cyan-400">
                CONTACTO
            </a>

            <div class="pt-2 mt-2 border-t border-gray-800">
                <a href="#" @click="mobileMenuOpen = false" class="block w-full px-4 py-3 my-1 text-center rounded-md text-sm font-medium text-white bg-gradient-to-r from-cyan-500 to-emerald-500 transition duration-200">
                    INSCRÍBETE
                </a>
                <a href="#" @click="mobileMenuOpen = false" class="block w-full px-4 py-3 my-1 text-center rounded-md text-sm font-medium text-cyan-400 border border-cyan-400 hover:bg-cyan-400 hover:bg-opacity-10 transition duration-200">
                    INGRESAR
                </a>
            </div>
        </div>
    </div>
</header>
