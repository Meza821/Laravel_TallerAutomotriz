<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            EDITAR CLIENTE
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
        <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <!-- Campo: Descripción -->
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 font-semibold mb-2">Nombre del cliente</label>
                <input type="text" name="nombre" value="{{ old('nombre', $cliente->nombre) }}"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300">
            </div>

            <div class="mb-4">
                <label for="tipo_persona" class="block text-gray-700 font-semibold mb-2">Tipo de persona</label>
                <select name="tipo_persona"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300">
                    <option value="">Seleccione un tipo de persona</option>
                    <option value="Natural" {{ $cliente->tipo_persona == 'Natural' ? 'selected' : '' }}>Natural
                    </option>
                    <option value="Juridica" {{ $cliente->tipo_persona == 'Juridica' ? 'selected' : '' }}>Jurídica
                    </option>
                </select>
            </div>

            <div class="mb-4">
                <label for="direccion" class="block text-gray-700 font-semibold mb-2">Dirección del cliente</label>
                <input type="text" name="direccion" value="{{ old('direccion', $cliente->direccion) }}"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300">
            </div>

            <!-- Campo: Departamento del cliente -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Departamento del cliente</label>
                <select id="departamento" name="departamento"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300" required>
                    <option value="">Seleccione un departamento</option>
                    <option value="San Salvador">San Salvador</option>
                    <option value="La Libertad">La Libertad</option>
                    <option value="Santa Ana">Santa Ana</option>
                    <option value="Sonsonate">Sonsonate</option>
                    <option value="Ahuachapan">Ahuachapan</option>
                    <option value="Cabañas">Cabañas</option>
                    <option value="Chalatenango">Chalatenango</option>
                    <option value="Cuscatlan">Cuscatlan</option>
                    <option value="La Paz">La Paz</option>
                    <option value="San Vicente">San Vicente</option>
                    <option value="Usulutan">Usulutan</option>
                    <option value="San Miguel">San Miguel</option>
                    <option value="Morazan">Morazan</option>
                    <option value="La Union">La Union</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Municipio del cliente</label>
                <select id="municipio" name="municipio"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300" required>
                    <option value="">Seleccione un municipio</option>
                </select>
            </div>

            <script>
                const departamentoSelect = document.getElementById('departamento');
                departamentoSelect.value = "{{ old('departamento', $cliente->departamento) }}";
                const departamentoOld = "{{ old('departamento', $cliente->departamento) }}";

                const municipioSelect = document.getElementById('municipio');
                const municipio = "{{ old('municipio', $cliente->municipio) }}";
                municipioSelect.value = "{{ old('municipio', $cliente->municipio) }}";
                console.log(municipio);
                const municipiosPorDepartamento = {
                    "San Salvador": ["San Salvador", "Soyapango", "Mejicanos", "Apopa", "Ilopango", "San Marcos",
                        "Ciudad Delgado"
                    ],
                    "La Libertad": ["Santa Tecla", "Antiguo Cuscatlán", "Colón", "Quezaltepeque", "Zaragoza", "Chiltiupán"],
                    "Santa Ana": ["Santa Ana", "Chalchuapa", "Metapán", "Coatepeque", "Texistepeque"],
                    "Sonsonate": ["Sonsonate", "Acajutla", "Nahuizalco", "Izalco", "Juayúa"],
                    "Ahuachapan": ["Ahuachapán", "Atiquizaya", "Apaneca", "Tacuba", "San Francisco Menéndez"],
                    "Cabañas": ["Sensuntepeque", "Victoria", "Ilobasco", "Guacotecti"],
                    "Chalatenango": ["Chalatenango", "La Palma", "Dulce Nombre de María", "San Ignacio"],
                    "Cuscatlan": ["Cojutepeque", "Suchitoto", "San Ramón", "San Cristóbal"],
                    "La Paz": ["Zacatecoluca", "San Luis Talpa", "San Pedro Masahuat", "Olocuilta"],
                    "San Vicente": ["San Vicente", "Tecoluca", "Apastepeque", "San Cayetano Istepeque"],
                    "Usulutan": ["Usulután", "Jiquilisco", "Santa Elena", "Puerto El Triunfo"],
                    "San Miguel": ["San Miguel", "Chinameca", "Ciudad Barrios", "San Rafael Oriente"],
                    "Morazan": ["San Francisco Gotera", "Joateca", "Arambala", "Perquín"],
                    "La Union": ["La Unión", "Santa Rosa de Lima", "Conchagua", "El Carmen"]
                };



                    document.getElementById('departamento').addEventListener('change', function() {
                        const departamento = this.value;
                        municipioSelect.innerHTML = '<option value="">Seleccione un Municipio</option>';

                        if (municipiosPorDepartamento[departamento]) {
                            municipiosPorDepartamento[departamento].forEach(function(municipio) {
                                const option = document.createElement('option');
                                option.value = municipio;
                                option.textContent = municipio;
                                municipioSelect.appendChild(option);
                            });
                        }
                    });

                // Preseleccionar el municipio basado en el valor antiguo
                if (municipiosPorDepartamento[departamentoSelect.value]) {

                    const optionMunicipio = "{{ old('municipio', $cliente->municipio) }}";
                    municipioSelect.innerHTML = '<option value="">Seleccione un Municipio</option>';

                    municipiosPorDepartamento[departamentoSelect.value].forEach(function(municipio) {
                        const option = document.createElement('option');
                        option.value = municipio;
                        option.textContent = municipio;
                        if (municipio === optionMunicipio) {
                            option.selected = true;
                        }
                        municipioSelect.appendChild(option);
                    });
                }


            </script>
            <div class="mb-4">
                <label for="telefono" class="block text-gray-700 font-semibold mb-2">Teléfono</label>
                <input type="text" name="telefono" value="{{ old('telefono', $cliente->telefono) }}"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300">
            </div>

            <div class="mb-4">
                <label for="numero_registro" class="block text-gray-700 font-semibold mb-2">Número de registro</label>
                <input type="text" name="numero_registro"
                    value="{{ old('numero_registro', $cliente->numero_registro) }}"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300">
            </div>

            <div class="mb-4">
                <label for="nit" class="block text-gray-700 font-semibold mb-2">NIT</label>
                <input type="text" name="nit" value="{{ old('nit', $cliente->nit) }}"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300">

            </div>
            <div class="mb-4">
                <label for="dui" class="block text-gray-700 font-semibold mb-2">DUI</label>
                <input type="text" name="dui" value="{{ old('dui', $cliente->dui) }}"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300">
            </div>


            <div class="mb-4">
                <label for="giro" class="block text-gray-700 font-semibold mb-2">Giro</label>
                <input type="text" name="giro" value="{{ old('giro', $cliente->giro) }}"
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300">

            </div>

            <div class="mb-4">
                <label for="correo" class="block text-gray-700 font-semibold mb-2">Correo</label>
                <input type="email" name="email" value="{{ old('email', $cliente->email) }}"
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
