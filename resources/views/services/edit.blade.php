<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            EDITAR SERVICIO
        </h2>
    </x-slot>
    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-6">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <!-- Formulario -->
        <form action="{{ route('services.update', $service->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <!-- Campo: Descripción -->
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre del servicio</label>
                <input type="text" name="nombre" value="{{ old('nombre', $service->nombre) }}"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300">
            </div>

            <div class="mb-4">
                <label for="descripcion" class="block text-gray-700 font-semibold mb-2">Descripción del servicio</label>
                <textarea name="descripcion" class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300">{{ old('descripcion', $service->descripcion) }}</textarea>
            </div>

            <div class="mb-4">
                <label for="precio" class="block text-gray-700 font-semibold mb-2">Precio ($)</label>
                <input type="text" name="precio" value="{{ old('precio', $service->precio) }}"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                    Actualizar
                </button>
            </div>
        </form>

    </div>

</x-app-layout>
