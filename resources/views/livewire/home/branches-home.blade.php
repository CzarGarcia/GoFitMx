<section id="sucursales" class="py-20 bg-black"
    x-data="{ modalOpen: false, selectedBranch: {}, currentImage: 0 }">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">NUESTRAS</span>
                <span class="block text-cyan-400">SUCURSALES</span>
            </h2>
            <div class="mt-2 h-1 w-20 bg-cyan-400 mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($this->getBranches as $branch)
                <div class="relative group overflow-hidden rounded-xl border border-gray-800 hover:border-cyan-400/50 transition duration-500">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-900 overflow-hidden">
                        <img src="{{ Storage::url($branch->images[0] ?? '') ?? 'https://via.placeholder.com/400x300' }}"
                             alt="{{ $branch->name }}" class="object-cover w-full h-64 group-hover:scale-105 transition duration-500">
                    </div>
                    <div class="p-6 bg-gray-900/80 backdrop-blur-sm">
                        <h3 class="text-xl font-bold text-white mb-2">{{ $branch->name }}</h3>
                        <p class="text-gray-300 mb-4">{{ $branch->description }}</p>
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li class="flex items-center">
                                <svg class="h-4 w-4 text-cyan-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                {{ $branch->opening_hours }} - {{ $branch->closing_hours }}
                            </li>
                            <li class="flex items-center">
                                <svg class="h-4 w-4 text-cyan-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                {{ $branch->address }}
                            </li>
                        </ul>

                        <button
                            @click="
                                selectedBranch = {
                                    name: '{{ $branch->name }}',
                                    description: '{{ $branch->description }}',
                                    address: '{{ $branch->address }}',
                                    phone: '{{ $branch->phone }}',
                                    hours: '{{ $branch->opening_hours }} - {{ $branch->closing_hours }}',
                                    images: @js($branch->images ?? [])
                                };
                                currentImage = 0;
                                modalOpen = true;
                            "
                            class="mt-4 inline-flex items-center text-cyan-400 hover:text-white transition duration-300">
                            Ver más detalles
                            <svg class="ml-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal -->
    <div x-show="modalOpen" x-transition.opacity x-cloak
         class="fixed inset-0 bg-black/80 flex items-center justify-center z-50 p-4">

        <div class="bg-gray-900 rounded-xl max-w-5xl w-full shadow-lg overflow-hidden transform transition-all scale-95"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90"
             @click.away="modalOpen = false">

            <!-- Carrusel -->
            <div class="relative h-96 bg-black">
                <template x-if="selectedBranch.images && selectedBranch.images.length > 0">
                    <img :src="'{{ Storage::url('') }}' + selectedBranch.images[currentImage]"
                         alt="" class="w-full h-full object-cover transition duration-500">
                </template>

                <!-- Botón anterior -->
                <button @click="currentImage = (currentImage - 1 + selectedBranch.images.length) % selectedBranch.images.length"
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-2 rounded-full">
                    &#8592;
                </button>

                <!-- Botón siguiente -->
                <button @click="currentImage = (currentImage + 1) % selectedBranch.images.length"
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-2 rounded-full">
                    &#8594;
                </button>

                <!-- Indicadores -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                    <template x-for="(img, index) in selectedBranch.images" :key="index">
                        <div @click="currentImage = index"
                             class="w-3 h-3 rounded-full cursor-pointer"
                             :class="currentImage === index ? 'bg-cyan-400' : 'bg-gray-500'">
                        </div>
                    </template>
                </div>
            </div>

            <!-- Información -->
            <div class="p-6">
                <h2 class="text-3xl font-bold text-cyan-400 mb-3" x-text="selectedBranch.name"></h2>
                <p class="text-gray-300 mb-4" x-text="selectedBranch.description"></p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-400">
                    <p><strong class="text-white">Horario:</strong> <span x-text="selectedBranch.hours"></span></p>
                    <p><strong class="text-white">Teléfono:</strong> <span x-text="selectedBranch.phone"></span></p>
                    <p class="md:col-span-2"><strong class="text-white">Dirección:</strong> <span x-text="selectedBranch.address"></span></p>
                </div>

                <div class="mt-6 text-right">
                    <button @click="modalOpen = false" class="px-6 py-2 bg-cyan-500 hover:bg-cyan-400 text-black rounded-lg font-semibold">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
