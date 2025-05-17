<x-app-layout>
    @vite(['resources/js/facturacion.js'])
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modulo de facturación
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto px-4 py-6 space-y-6">

        <!-- Título -->
        <div class="bg-white shadow rounded p-4 text-center">
            <h1 class="text-xl font-semibold flex justify-center items-center gap-2">
                <i class="fa-solid fa-cash-register"></i> Facturación / Punto de Venta
            </h1>
        </div>

        <div class="flex flex-col md:flex-row gap-6">

            <!-- Cliente -->
            <div class="w-full md:w-1/3">
                <div class="bg-white shadow rounded p-4 space-y-4">

                    <div class="bg-gray-100 rounded p-2 font-semibold text-sm">
                        <i class="fa-regular fa-address-card mr-1"></i> Datos del Cliente
                    </div>

                    <form class="space-y-3" method="POST" action="{{ route('factura.generar') }}">
                        @csrf

                        <!-- input para el número de documento -->
                        <div class="flex items-center mb-4 space-x-4">
                            <div class="flex items-center">
                                <input type="radio" id="dui" name="tipoDocumento" value="dui" class="mr-2">
                                <label for="dui" class="text-sm">DUI</label>
                            </div>
                            <div class="flex items-center">
                                <input type="radio" id="nit" name="tipoDocumento" value="nit" class="mr-2">
                                <label for="nit" class="text-sm">NIT</label>
                            </div>
                        </div>
                        <p class="text-xs text-gray-500">Seleccione DUI si es persona natural y NIT si es persona
                            jurídica.</p>
                        <div class="relative">
                            <label class="text-sm block mb-1">Número de Documento</label>
                            <input type="text" class="form-input w-full text-sm" placeholder="DUI / NIT"
                                name="documentoidentidad" id="documentoidentidad"
                                data-url-cliente="{{ route('buscar.cliente') }}">
                            <ul id="listaDui"
                                class="absolute w-full bg-white border border-gray-300 mt-1 max-h-60 overflow-y-auto hidden z-50">
                            </ul>
                        </div>
                        <button class="bg-red-500 text-white px-2 py-1 rounded btn-eliminar"
                            name="btnEliminarDui">Eliminar</button>

                        <!-- Fecha de emisión -->
                        <div>
                            <label class="text-sm block mb-1">Fecha de Emisión</label>
                            <input type="date" class="form-input w-full text-sm" name="fechaEmision" disabled
                                value="{{ date('Y-m-d') }}">
                        </div>
                        <div>
                            <label class="text-sm block mb-1">Nombre completo</label>
                            <p class="form-input w-full text-sm bg-gray-100 cursor-not-allowed" id="nombreCliente"
                                name="nombreCliente"></p>
                        </div>

                        <div>
                            <label class="text-sm block mb-1">Nombre empresa</label>
                            <p class="form-input w-full text-sm bg-gray-100 cursor-not-allowed" id="nombreEmpresa"
                                name="nombreEmpresa"></p>
                        </div>
                        <div>
                            <label class="text-sm block mb-1">Correo Electrónico</label>
                            <p class="form-input w-full text-sm bg-gray-100 cursor-not-allowed" id="correoCliente"
                                name="correoCliente"></p>
                        </div>

                        <div>
                            <label class="text-sm block mb-1">Dirección</label>
                            <p class="form-input w-full text-sm bg-gray-100 cursor-not-allowed" id="direccionCliente"
                                name="direccionCliente"></p>
                        </div>
                        <div>
                            <label class="text-sm block mb-1">Teléfono</label>
                            <p class="form-input w-full text-sm bg-gray-100 cursor-not-allowed" id="telefonoCliente"
                                name="telefonoCliente"></p>
                        </div>
                        <div>
                            <label class="text-sm block mb-1">Departamento</label>
                            <p class="form-input w-full text-sm bg-gray-100 cursor-not-allowed" id="departamentoCliente"
                                name="departamentoCliente"></p>
                        </div>
                        <div>
                            <label class="text-sm block mb-1">Municipio</label>
                            <p class="form-input w-full text-sm bg-gray-100 cursor-not-allowed" id="municipioCliente"
                                name="municipioCliente"></p>
                        </div>
                        <!-- tipo de documento tributario-->
                        <div>
                            <label class="text-sm block mb-1">Tipo de Documento</label>
                            <select class="form-select w-full text-sm">
                                <option selected>Factura</option>
                                <option disabled>Nota de Crédito</option>
                                <option disabled>Nota de Débito</option>
                            </select>
                        </div>
                        <div>
                            <label class="text-sm block mb-1">Condición de Pago</label>
                            <select class="form-select w-full text-sm">
                                <option selected>Contado</option>
                                <option>Crédito</option>
                            </select>
                        </div>

                    </form>
                </div>
            </div>

            <!-- Producto y totales -->
            <div class="w-full md:w-2/3 space-y-4">
                <!-- Checkbox para buscar por codigo -->
                <div class="flex items-center mb-2">
                    <input type="checkbox" id="buscarPorCodigo" class="mr-2">
                    <label for="buscarPorCodigo" class="text-sm">Buscar por código</label>
                </div>

                <div class="relative w-full max-w-md">
                    <input type="text" id="inputServicio" placeholder="Escribe el nombre del servicio..."
                        class="border p-2 w-full" autocomplete="off"
                        data-url-codigo="{{ route('buscar.servicio.codigo') }}"
                        data-url-nombre="{{ route('buscar.servicio') }}">
                    <input type="hidden" id="idServicio" name="idServicio" value="">
                    <ul id="listaServicios"
                        class="absolute w-full bg-white border border-gray-300 mt-1 max-h-60 overflow-y-auto hidden z-50">
                    </ul>
                </div>





                <div class="bg-white shadow rounded p-4">
                    <h2 class="text-sm font-semibold mb-3"><i class="fa-solid fa-box-open mr-1"></i> Items</h2>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm border text-center" name="tablaServicios" id="tablaServicios">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="border px-2 py-1">Código</th>
                                    <th class="border px-2 py-1">Nombre producto</th>
                                    <th class="border px-2 py-1">Cantidad</th>
                                    <th class="border px-2 py-1">Precio</th>
                                    <th class="border px-2 py-1">Sub total</th>
                                    <th class="border px-2 py-1">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="bg-white shadow rounded p-4 text-sm text-right">
                    <p>Suma de ventas: <strong id="sumaVentas"></strong></p>
                    <p>I.V.A. Retenido: <strong id="ivaRetenido"></strong></p>
                    <p>Sub Total: <strong id="subTotal"></strong></p>
                    <p>Ventas No Sujetas: <strong id="ventasNoSujetas"></strong></p>
                    <p>Ventas Exentas: <strong id="ventasExentas"></strong></p>
                    <p>(-) Renta retenido: <strong id="rentaRetenido"></strong></p>
                    <hr class="my-2">
                    <p class="text-base font-bold">Total: <strong id="total"></strong></p>
                </div>

                <div class="flex justify-between">
                    <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded flex items-center gap-2"
                        name="btnCancelar">
                        Cancelar
                    </button>
                    <button
                        class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded flex items-center gap-2"
                        name="btnProcesar">
                        Procesar
                    </button>
                </div>

            </div>
        </div>
    </div>


</x-app-layout>
