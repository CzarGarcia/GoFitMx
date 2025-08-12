@extends('welcome')

@section('content')
    <main class="pt-20 bg-gray-950 text-gray-100">  <!-- Ajuste para el header fixed -->

        <!-- Sección Hero -->
        @livewire('Home.banner-home')

        <!-- Sección Sucursales (ID para enlace del menú) -->
        @livewire('home.branches-home')

        <!-- Sección Planes -->
        @livewire('home.plan-home')

        <!-- Sección Nosotros -->
        @include('components.home.about-us')

        <!-- Sección Contacto -->
        @include('components.home.contact-home')
    </main>
@endsection
