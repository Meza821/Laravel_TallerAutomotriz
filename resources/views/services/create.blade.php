<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CREAR UN NUEVO SERVICIO
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-6">
        <!-- Mensajes de error -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulario -->
        <form action="{{ route('services.store') }}" method="POST">
            @csrf

            <!-- Campo: Nombre del servicio -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Nombre del Servicio</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300"
                    placeholder="Ej. Mantenimiento de motor" required>
            </div>

            <!-- Campo: Descripción -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Descripción</label>
                <textarea name="descripcion" rows="4"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300"
                    placeholder="Ej. Cambio de aceite, ajuste de frenos..." required>{{ old('descripcion') }}</textarea>
            </div>

            <!-- Campo: Precio -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Precio ($)</label>
                <input type="number" name="precio" value="{{ old('precio') }}" step="0.01"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300"
                    placeholder="Ej. 30.00" required>
            </div>

            <!-- Botón de enviar -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                    Guardar Servicio
                </button>
            </div>
        </form>
    </div>
</x-app-layout>


