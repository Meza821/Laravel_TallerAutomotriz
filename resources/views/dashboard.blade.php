<x-app-layout>
    <!-- Header con bienvenida -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            
            @auth
            <!-- Esto solo se muestra si el usuario está autenticado -->
            <div>  Bienvenido, {{ Auth::user()->name }} 👋</div>
        @endauth
        </h2>
        
        <p class="text-gray-500 text-sm">Aquí puedes ver el estado del taller.</p>
    </x-slot>

    <!-- Contenedor Principal -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-6">

        <!-- GRID de Cards con datos -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

            <!-- Card Servicios -->
            <a href="{{ route('services.index') }}"
                class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="p-6">
                    <h3 class="text-lg font-semibold">Servicios Activos</h3>
                    <p class="text-3xl font-bold text-blue-500">15</p>
                    <p class="text-gray-600">Servicios en proceso en el taller.</p>
                </div>
            </a>

            <!-- Card Clientes -->
            <a href="#" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="p-6">
                    <h3 class="text-lg font-semibold">Clientes Registrados</h3>
                    <p class="text-3xl font-bold text-green-500">250</p>
                    <p class="text-gray-600">Total de clientes en el sistema.</p>
                </div>
            </a>

            <!-- Card Reportes -->
            <a href="#" class="block bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                <div class="p-6">
                    <h3 class="text-lg font-semibold">Reportes Generados</h3>
                    <p class="text-3xl font-bold text-red-500">8</p>
                    <p class="text-gray-600">Últimos reportes de ingresos y reparaciones.</p>
                </div>
            </a>

        </div>

    </div>
</x-app-layout>