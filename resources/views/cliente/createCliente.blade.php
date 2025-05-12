<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            CREAR UN NUEVO CLIENTE
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
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf

            <!-- Campo: Nombre del cliente -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Nombre completo</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300"
                    placeholder="Ej. Kevin Meza" required>
            </div>
            <!-- Campo: Tipo de persona -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Tipo de persona</label>
                <select name="tipo_persona"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300" required>
                    <option value="">Seleccione un tipo de persona</option>
                    <option value="Natural">Natural</option>
                    <option value="Juridica">Jurídica</option>
                </select>
            </div>
            <!-- Campo: Direccion del cliente -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Dirección del cliente</label>
                <input type="text" name="direccion" value="{{ old('direccion') }}"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300"
                    placeholder="Ej. Maria Elena, Apopa" required>
            </div>
            <!-- Campo: Departamento del cliente -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Departamento del cliente</label>
                <select id="departamento" name="departamento"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300" required>
                    <option value="">Seleccione un departamento</option>
                    @foreach ($departamentos as $departamento)
                        <option value="{{ $departamento->codigo }}">{{ $departamento->nombre }}</option>
                    @endforeach


                </select>
            </div>
            <!-- Campo: distrito del cliente -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Distrito del cliente</label>
                <select id="distrito" name="distrito_id"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300" required>
                    <option value="">Seleccione un distrito</option>
                </select>
            </div>

            <script>
                document.getElementById('departamento').addEventListener('change', function() {
                    var deptoId = this.value;

                    fetch(`/clientes/distritos/${deptoId}`)
                        .then(res => res.json())
                        .then(data => {
                            let distritoSelect = document.getElementById('distrito');
                            distritoSelect.innerHTML = '<option value="">Seleccione un distrito</option>';
                            data.forEach(function(distrito) {
                                distritoSelect.innerHTML +=
                                    `<option value="${distrito.codigo_municipio}">${distrito.nombre_distrito}</option>`;
                            });
                        });
                });
            </script>



            <!-- Campo: Telefono del cliente -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Telefono</label>
                <input type="number" name="telefono" value="{{ old('telefono') }}" step="0.01"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300"
                    placeholder="Ej. 30.00" required>
            </div>

            <!-- Campo: Número registro del cliente -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Número de registro</label>
                <input type="number" name="numero_registro" value="{{ old('numero_registro') }}" step="0.01"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300"
                    placeholder="Ej. 30.00" required>
            </div>

            <!-- Campo: NIT del cliente -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">NIT del cliente</label>
                <input type="number" name="nit" value="{{ old('nit') }}" step="0.01"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300"
                    placeholder="Ej. 30.00" required>
            </div>
            <!-- Campo: DUI del cliente -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">DUI del cliente</label>
                <input type="number" name="dui" value="{{ old('dui') }}" step="0.01"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300"
                    placeholder="Ej. 30.00" required>
            </div>

            <!-- Campo: Giro -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Giro </label>
                <input type="text" name="giro" value="{{ old('giro') }}" step="0.01"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300"
                    placeholder="Ej. 30.00" required>
            </div>

            <!-- Campo: email -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Correo Electronico del cliente </label>
                <input type="email" name="email" value="{{ old('email') }}" step="0.01"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300"
                    placeholder="Ej. 30.00" required>
            </div>


            <!-- Botón de enviar -->
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                    Guardar cliente
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
