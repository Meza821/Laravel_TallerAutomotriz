<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            LISTA DE TODOS LOS CLIENTES.
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
                    <th class="py-2 px-4 border-b">Tipo persona</th>
                    <th class="py-2 px-4 border-b">Dirección</th>
                    <th class="py-2 px-4 border-b">Departamento</th>
                    <th class="py-2 px-4 border-b">Municipio</th>
                    <th class="py-2 px-4 border-b">Número de registro</th>
                    <th class="py-2 px-4 border-b">NIT</th>
                    <th class="py-2 px-4 border-b">DUI</th>
                    <th class="py-2 px-4 border-b">Giro</th>
                    <th class="py-2 px-4 border-b">Teléfono</th>
                    <th class="py-2 px-4 border-b">Correo</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clientes as $cliente)
                    <!-- hover:bg-gray-50 = al pasar el mouse, fondo gris claro -->
                    <tr class="hover:bg-gray-50">
                        <!-- Reutilizamos las clases “py-2 px-4 border-b” para estilo coherente -->
                        <td class="py-2 px-4 border-b">{{ $cliente->id }}</td>
                        <td class="py-2 px-4 border-b">{{ $cliente->nombre }}</td>
                        <td class="py-2 px-4 border-b">{{ $cliente->tipo_persona }}</td>
                        <td class="py-2 px-4 border-b">{{ $cliente->direccion }}</td>
                        <td class="py-2 px-4 border-b">{{ $cliente->departamento }}</td>
                        <td class="py-2 px-4 border-b">{{ $cliente->municipio }}</td>
                        <td class="py-2 px-4 border-b">{{ $cliente->numero_registro }}</td>
                        <td class="py-2 px-4 border-b">{{ $cliente->nit }}</td>
                        <td class="py-2 px-4 border-b">{{ $cliente->dui }}</td>
                        <td class="py-2 px-4 border-b">{{ $cliente->giro }}</td>
                        <td class="py-2 px-4 border-b">{{ $cliente->telefono }}</td>
                        <td class="py-2 px-4 border-b">{{ $cliente->email }}</td>
                        <!-- Aquí se pueden agregar más columnas según sea necesario -->
                        <td class="py-2 px-4 border-b">
                            <div class="flex flex-col gap-2">
                                <!-- Botón de editar -->
                                <a href="{{ route('clientes.edit', $cliente->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-5 rounded inline-flex items-center">
                                    Editar
                                </a>

                                <!-- Formulario para eliminar -->
                                <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-3 rounded inline-flex items-center"
                                        onclick="return confirm('¿Seguro que deseas eliminar este cliente?')">
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
                            No hay clientes registrados.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- 5. Paginación -->
        <!-- mt-4 para darle margen por encima -->
        <div class="mt-4">
            {{ $clientes->links() }}
        </div>
    </div>
    <script>

    </script>
        // Aquí puedes agregar cualquier script adicional que necesites
</x-app-layout>
