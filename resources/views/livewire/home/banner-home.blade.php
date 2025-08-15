<!-- app/Livewire/Home/banner-home.blade.php -->
@php
    $page = \App\Models\page::get()->first();
@endphp
<section id="inicio" class="relative bg-gradient-to-br from-gray-900 to-black py-20 overflow-hidden h-screen min-h-[600px]">
    <div x-data="bannerCarousel()"
         x-init="init()"
         class="relative h-full overflow-hidden">

        <!-- Contenedor principal de banners -->
        <div class="absolute inset-0 flex transition-transform duration-500 ease-in-out"
             :style="`transform: translateX(-${activeSlide * 100}%)`">

            @foreach($this->getBanner as $banner)
            <div class="w-full h-full flex-shrink-0 relative">
                <!-- Imagen de fondo -->
                <img src="{{ Storage::url($banner->image) }}"
                     alt="{{ $banner->title }}"
                     class="absolute inset-0 w-full h-full object-cover opacity-20">

                <!-- Contenido del banner -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                        <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight bg-clip-text text-transparent bg-gradient-to-r "
                             style="color: {{ $page->color_primary }};">
                            {{ $banner->title }}
                        </h1>
                        <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-300">
                            {{ $banner->description }}
                        </p>
                        <div class="mt-10 flex justify-center gap-4">
                            @if(!empty($banner->link))
                                <a href="{{ $banner->link }}" class="px-8 py-3 border border-transparent text-base font-medium rounded-md text-black transition duration-300 shadow-lg shadow-cyan-500/20" style="background-color: {{ $page->color_primary }}; color: white;">
                                    Ir!
                                </a>

                            @endif

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Controles de navegación -->
        <div class="absolute inset-0 flex items-center justify-between px-4 z-10">
            <button @click="prevSlide()"
                    class="p-2 rounded-full bg-black/50  hover:bg-cyan-400/10 transition" style="color: {{ $page->color_primary }};">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button @click="nextSlide()"
                    class="p-2 rounded-full bg-black/50 hover:bg-cyan-400/10 transition" style="color: {{ $page->color_primary }};">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Indicadores de posición -->
        <div class="absolute bottom-10 left-0 right-0 z-20 flex justify-center gap-2">
            @foreach($this->getBanner as $banner)
            <button @click="goToSlide({{ $loop->index }})"
                    class="w-3 h-3 rounded-full transition-all duration-300"
                    :class="{ ' w-6': activeSlide === {{ $loop->index }}, 'bg-gray-500': activeSlide !== {{ $loop->index }}}"
                    style="background-color: {{ $page->color_primary }};"
                    aria-label="Ir a slide {{ $loop->index + 1 }}">
            </button>
            @endforeach
        </div>
    </div>

    <script>
        function bannerCarousel() {
            return {
                activeSlide: 0,
                totalSlides: {{ count($this->getBanner) }},
                interval: null,
                timeout: 10000, // 10 segundos

                init() {
                    if (this.totalSlides > 1) {
                        this.startInterval();
                    }
                },

                startInterval() {
                    this.interval = setInterval(() => this.nextSlide(), this.timeout);
                },

                nextSlide() {
                    this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
                    this.resetInterval();
                },

                prevSlide() {
                    this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides;
                    this.resetInterval();
                },

                goToSlide(index) {
                    this.activeSlide = index;
                    this.resetInterval();
                },

                resetInterval() {
                    clearInterval(this.interval);
                    this.startInterval();
                }
            }
        }
    </script>
</section>
