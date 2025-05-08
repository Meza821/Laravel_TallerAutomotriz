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
                    class="w-full p-3 border border-gray-300 rounded focus:ring focus:ring-blue-300" required
                    onchange="cargarMunicipios()">
                    <option value="">Seleccione un departamento</option>
                    <option value="00">Otros</option>
                    <option value="01">Ahuachapan</option>
                    <option value="02">Santa Ana</option>
                    <option value="03">Sonsonate</option>
                    <option value="04">Chalatenango</option>
                    <option value="05">La Libertad</option>
                    <option value="06">San Salvador</option>
                    <option value="07">Cuscatlan</option>
                    <option value="08">La Paz</option>
                    <option value="09">Cabañas</option>
                    <option value="10">San Vicente</option>
                    <option value="11">Usulutan</option>
                    <option value="12">San Miguel</option>
                    <option value="13">Morazan</option>
                    <option value="14">La Union</option>


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
                const municipios = {
                    "00": [{ codigo: "00", nombre: "Otro (Para extranjeros)" }],
                    "01": [
                        { codigo: "13", nombre: "Ahuachapan Norte" },
                        { codigo: "14", nombre: "Ahuachapan Centro" },
                        { codigo: "15", nombre: "Ahuachapan Sur" }
                    ],
                    "02": [
                        { codigo: "14", nombre: "Santa Ana Norte" },
                        { codigo: "15", nombre: "Santa Ana Centro" },
                        { codigo: "16", nombre: "Santa Ana Este" },
                        { codigo: "17", nombre: "Santa Ana Oeste" }
                    ],
                    "03": [
                        { codigo: "17", nombre: "Sonsonate Norte" },
                        { codigo: "18", nombre: "Sonsonate Centro" },
                        { codigo: "19", nombre: "Sonsonate Este" },
                        { codigo: "20", nombre: "Sonsonate Oeste" }
                    ],
                    "04": [
                        { codigo: "34", nombre: "Chalatenango Norte" },
                        { codigo: "35", nombre: "Chalatenango Centro" },
                        { codigo: "36", nombre: "Chalatenango Sur" }
                    ],
                    "05": [
                        { codigo: "23", nombre: "La Libertad Norte" },
                        { codigo: "24", nombre: "La Libertad Centro" },
                        { codigo: "25", nombre: "La Libertad Oeste" },
                        { codigo: "26", nombre: "La Libertad Este" },
                        { codigo: "27", nombre: "La Libertad Costa" },
                        { codigo: "28", nombre: "La Libertad Sur" }
                    ],
                    "06": [
                        { codigo: "20", nombre: "San Salvador Norte" },
                        { codigo: "21", nombre: "San Salvador Oeste" },
                        { codigo: "22", nombre: "San Salvador Este" },
                        { codigo: "23", nombre: "San Salvador Centro" },
                        { codigo: "24", nombre: "San Salvador Sur" }
                    ],
                    "07": [
                        { codigo: "17", nombre: "Cuscatlan Norte" },
                        { codigo: "18", nombre: "Cuscatlan Sur" }
                    ],
                    "08": [
                        { codigo: "23", nombre: "La Paz Oeste" },
                        { codigo: "24", nombre: "La Paz Centro" },
                        { codigo: "25", nombre: "La Paz Este" }
                    ],
                    "09": [
                        { codigo: "10", nombre: "Cabañas Oeste" },
                        { codigo: "11", nombre: "Cabañas Este" }
                    ],
                    "10": [
                        { codigo: "14", nombre: "San Vicente Norte" },
                        { codigo: "15", nombre: "San Vicente Sur" }
                    ],
                    "11": [
                        { codigo: "24", nombre: "Usulutan Norte" },
                        { codigo: "25", nombre: "Usulutan Este" },
                        { codigo: "26", nombre: "Usulutan Oeste" }
                    ],
                    "12": [
                        { codigo: "21", nombre: "San Miguel Norte" },
                        { codigo: "22", nombre: "San Miguel Centro" },
                        { codigo: "23", nombre: "San Miguel Oeste" }
                    ],
                    "13": [
                        { codigo: "27", nombre: "Morazan Norte" },
                        { codigo: "28", nombre: "Morazan Sur" }
                    ],
                    "14": [
                        { codigo: "19", nombre: "La Union Norte" },
                        { codigo: "20", nombre: "La Union Sur" }
                    ]
                };

                function cargarMunicipios() {
                    const departamentoSelect = document.getElementById("departamento");
                    const municipioSelect = document.getElementById("municipio");
                    const departamento = departamentoSelect.value;

                    municipioSelect.innerHTML = '<option value="">Seleccione un municipio</option>';

                    if (municipios[departamento]) {
                        municipios[departamento].forEach(muni => {
                            const option = document.createElement("option");
                            option.value = muni.codigo;
                            option.text = muni.nombre;
                            municipioSelect.appendChild(option);
                        });
                    }
                }

                function capturarValores() {
                    const departamentoSelect = document.getElementById("departamento");
                    const municipioSelect = document.getElementById("municipio");

                    const departamentoSeleccionado = departamentoSelect.value; // ejemplo "06"
                    const municipioSeleccionado = municipioSelect.value; // ejemplo "20"

                    // Mostrar los valores (puedes enviar esto a tu servidor en un formulario también)
                    document.getElementById("resultado").innerText =
                        "Departamento seleccionado: " + departamentoSeleccionado +
                        "\nMunicipio seleccionado: " + municipioSeleccionado;
                }
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
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">
                    Guardar cliente
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
