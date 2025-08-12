<section id="planes" class="py-20 bg-gradient-to-b from-black to-gray-900"
         x-data="{ modalOpen: false, selectedPlan: null }">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">NUESTROS</span>
                <span class="block text-emerald-400">PLANES</span>
            </h2>
            <div class="mt-2 h-1 w-20 bg-emerald-400 mx-auto"></div>
            <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-300">
                Elige el plan que se adapte a tus metas fitness y comienza tu transformación hoy mismo.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($this->getPlans as $plan)
                <div class="relative group overflow-hidden rounded-xl border border-gray-800 hover:border-emerald-400 transition duration-500 bg-gray-900/50 backdrop-blur-sm p-6 flex flex-col">
                    <h3 class="text-2xl font-bold text-white mb-2">{{ $plan->name }}</h3>
                    <p class="text-gray-300 mb-4 flex-grow">{{ $plan->description }}</p>

                    <div class="my-6">
                        <span class="text-4xl font-extrabold text-white">${{ $plan->price }}</span>
                        <span class="text-lg text-gray-400"> / {{ $plan->duration_days }} días</span>
                    </div>

                    <ul class="space-y-3 text-gray-300 mb-8">
                        @foreach ($plan->benefits as $feature)
                            <li class="flex items-center">
                                <svg class="h-5 w-5 text-emerald-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                {{ $feature['benefit'] }}
                            </li>
                        @endforeach
                    </ul>

                    <button
                        @click="selectedPlan = '{{ $plan->name }}'; modalOpen = true;"
                        class="w-full inline-flex justify-center items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-black bg-emerald-400 hover:bg-emerald-500 transition duration-300">
                        Comenzar ahora
                    </button>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div x-show="modalOpen" x-cloak x-transition.opacity
         class="fixed inset-0 bg-black/80 flex items-center justify-center z-50 p-4">
        <div @click.away="modalOpen = false"
             class="bg-gray-900 rounded-xl max-w-lg w-full p-6 shadow-lg text-white transform transition-all scale-95"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90">

            <h2 class="text-2xl font-bold mb-4">Comenzar plan: <span class="text-emerald-400" x-text="selectedPlan"></span></h2>

            <p class="mb-6 text-gray-300">Para continuar, por favor descarga nuestra app o inicia sesión.</p>

            <div class="flex flex-col sm:flex-row gap-4">
                <a href="/descargar-app"
                   class="flex-1 text-center px-4 py-3 bg-emerald-500 hover:bg-emerald-600 rounded-md font-semibold text-black transition">
                    Descargar App
                </a>
                <a href="/login"
                   class="flex-1 text-center px-4 py-3 border border-emerald-500 hover:bg-emerald-600 rounded-md font-semibold text-emerald-400 hover:text-white transition">
                    Iniciar Sesión
                </a>
            </div>

            <button @click="modalOpen = false"
                    class="mt-6 w-full py-2 bg-gray-700 hover:bg-gray-600 rounded-md text-sm text-gray-400">
                Cancelar
            </button>
        </div>
    </div>
</section>
