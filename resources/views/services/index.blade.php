<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            LISTA DE TODOS LOS SERVICIOS.
        </h2>
    </x-slot>

    <div class="container mx-auto px-4">
      

        <!-- 2. Mensajes de éxito -->
        @if(session('success'))
            <!-- bg-green-100 y text-green-700 para fondo y texto en tonos de éxito -->
            <!-- px-4 py-2 añade padding; rounded curva los bordes; mb-4 agrega margen inferior -->
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

     

        <!-- 4. Tabla -->
        <!-- min-w-full fuerza a la tabla a usar todo el ancho mínimo posible -->
        <!-- border-collapse elimina el espacio entre celdas; lo hace unificado -->
        <table class="min-w-full border-collapse">
            <thead>
                <!-- bg-gray-200 para fondo gris claro en cabecera; text-left para alinear texto a la izquierda -->
                <tr class="bg-gray-200 text-left">
                    <!-- py-2 px-4 = padding en vertical y horizontal -->
                    <!-- border-b = borde inferior para separar la cabecera del cuerpo -->
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Nombre</th>
                    <th class="py-2 px-4 border-b">Descripción</th>
                    <th class="py-2 px-4 border-b">Precio</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $service)
                    <!-- hover:bg-gray-50 = al pasar el mouse, fondo gris claro -->
                    <tr class="hover:bg-gray-50">
                        <!-- Reutilizamos las clases “py-2 px-4 border-b” para estilo coherente -->
                        <td class="py-2 px-4 border-b">{{ $service->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $service->nombre }}</td>
                        <td class="py-2 px-4 border-b">{{ $service->descripcion }}</td>
                        <td class="py-2 px-4 border-b">{{ $service->precio }}</td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex flex-col gap-2">
                                <!-- Botón de editar -->
                                <a href="{{ route('services.edit', $service->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-5 rounded inline-flex items-center">
                                    Editar
                                </a>

                                <!-- Formulario para eliminar -->
                                <form action="{{ route('services.destroy', $service->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded inline-flex items-center"
                                        onclick="return confirm('¿Seguro que deseas eliminar este servicio?')">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <!-- col-span-5 para que la celda abarque 5 columnas -->
                        <!-- text-center para centrar el texto; py-2 px-4 como en las demás celdas -->
                        <td class="py-2 px-4 text-center" colspan="5">
                            No hay servicios registrados.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- 5. Paginación -->
        <!-- mt-4 para darle margen por encima -->
        <div class="mt-4">
            {{ $services->links() }}
        </div>
    </div>
</x-app-layout>