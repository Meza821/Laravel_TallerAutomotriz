<x-app-layout>
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
                                name="documentoidentidad" id="documentoidentidad">
                            <ul id="listaDui"
                                class="absolute w-full bg-white border border-gray-300 mt-1 max-h-60 overflow-y-auto hidden z-50">
                            </ul>
                        </div>
                        <button class="bg-red-500 text-white px-2 py-1 rounded btn-eliminar"
                            name="btnEliminarDui">Eliminar</button>

                        <!-- Fecha de emisión -->
                        <div>
                            <label class="text-sm block mb-1">Fecha de Emisión</label>
                            <input type="date" class="form-input w-full text-sm" name="fechaEmision" disabled value="{{ date('Y-m-d') }}">
                        </div>
                        <div>
                            <label class="text-sm block mb-1">Nombre completo</label>
                            <p class="form-input w-full text-sm bg-gray-100 cursor-not-allowed" id="nombreCliente" name="nombreCliente"></p>
                        </div>

                        <div>
                            <label class="text-sm block mb-1">Nombre empresa</label>
                            <p class="form-input w-full text-sm bg-gray-100 cursor-not-allowed" id="nombreEmpresa" name="nombreEmpresa"></p>
                        </div>
                        <div>
                            <label class="text-sm block mb-1">Correo Electrónico</label>
                            <p class="form-input w-full text-sm bg-gray-100 cursor-not-allowed" id="correoCliente" name="correoCliente"></p>
                        </div>

                        <div>
                            <label class="text-sm block mb-1">Dirección</label>
                            <p class="form-input w-full text-sm bg-gray-100 cursor-not-allowed" id="direccionCliente" name="direccionCliente"></p>
                        </div>
                        <div>
                            <label class="text-sm block mb-1">Teléfono</label>
                            <p class="form-input w-full text-sm bg-gray-100 cursor-not-allowed" id="telefonoCliente" name="telefonoCliente"></p>
                        </div>
                        <div>
                            <label class="text-sm block mb-1">Departamento</label>
                            <p class="form-input w-full text-sm bg-gray-100 cursor-not-allowed" id="departamentoCliente" name="departamentoCliente"></p>
                        </div>
                        <div>
                            <label class="text-sm block mb-1">Municipio</label>
                            <p class="form-input w-full text-sm bg-gray-100 cursor-not-allowed" id="municipioCliente" name="municipioCliente"></p>
                        </div>
                        <!-- tipo de documento tributario-->
                        <div>
                            <label class="text-sm block mb-1">Tipo de Documento</label>
<<<<<<< HEAD
                            <select class="form-select w-full text-sm">
                                <option selected>Factura</option>
                                <option name="tipoPago" value="contado">Contado</option>
                                <option name="tipoPago" value="credito">Crédito</option>
                            </select>
                        </div>


=======
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

>>>>>>> 17801d48358668c09034a6ad288470bc95088b38
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
                        class="border p-2 w-full" autocomplete="off">
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
                    <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded flex items-center gap-2" name="btnCancelar">
                        Cancelar
                    </button>
                    <button
                        class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded flex items-center gap-2" name="btnProcesar">
                        Procesar
                    </button>
                </div>

            </div>
        </div>
    </div>




    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            //Hacer la busqueda con la function input
            $('#inputServicio').on('input', function() {
                let query = $(this).val();
                // Verificar si el checkbox está marcado
                let buscarPorCodigo = $('#buscarPorCodigo').is(':checked');
                if (buscarPorCodigo && query.length >= 1) {
                    $.ajax({
                        url: "{{ route('buscar.servicio.codigo') }}",
                        data: {
                            term: query
                        },
                        success: function(data) {
                            let lista = $('#listaServicios');
                            console.table(data);
                            lista.empty().removeClass('hidden');

                            if (data.length === 0) {
                                lista.append(
                                    '<li class="p-2 text-gray-500">No se encontraron servicios</li>'
                                );
                            } else {
                                data.forEach(function(item) {
                                    lista.append(
                                        `<li class="p-2 hover:bg-gray-100 cursor-pointer" data-id="${item.id}" data-nombre="${item.nombre}" data-precio="${item.precio}">${item.nombre}</li>`
                                    );
                                    console.log(item);
                                });
                            }
                        }
                    });
                } else if (query.length >= 2) {


                    $.ajax({
                        url: "{{ route('buscar.servicio') }}",
                        data: {
                            term: query
                        },
                        success: function(data) {
                            let lista = $('#listaServicios');
                            console.table(data);
                            lista.empty().removeClass('hidden');

                            if (data.length === 0) {
                                lista.append(
                                    '<li class="p-2 text-gray-500">No se encontraron servicios</li>'
                                );
                            } else {
                                data.forEach(function(item) {
                                    lista.append(
                                        `<li class="p-2 hover:bg-gray-100 cursor-pointer" data-id="${item.id}" data-nombre="${item.nombre}" data-precio="${item.precio}">${item.nombre}</li>`
                                    );
                                    console.log(item);
                                });
                            }
                        }
                    });


                } else {
                    $('#listaServicios').addClass('hidden');
                }
            });

            // Selección del item
            $(document).on('click', '#listaServicios li', function() {
                //Se crean variables y se agregan los valores
                const nombre = $(this).data('nombre');
                const id = $(this).data('id');
                var precio = $(this).data('precio');

                // Agregar el servicio a la tabla
                $('#tablaServicios tbody').append(`
                    <tr>
                        <td class="border px-4 py-2">${id}</td>
                        <td class="border px-4 py-2">${nombre}</td>
                        <td class="border px-1 py-1">
                        <input type="number" id="idServicio" value="1" class="w-16 text-sm px-1 py-0.5 border rounded">
                        </td>
                        <td class="border px-4 py-2">${precio}</td>
                        <td class="border px-4 py-2">${precio}</td>
                        <td class="border px-4 py-2 text-center">
                            <button class="bg-red-500 text-white px-2 py-1 rounded btn-eliminar">Eliminar</button>
                        </td>
                    </tr>
                `);

            });



            //Limpiar input y lista
            $(document).on('click', '.btn-eliminar', function() {
                $(this).closest('tr').remove();
            });

            // Ocultar la lista si se hace clic fuera
            $(document).on('click', function(e) {
                if (!$(e.target).closest('#inputServicio, #listaServicios').length) {
                    $('#listaServicios').addClass('hidden');
                }
            });
        });
    </script>
    <!-- JS Para autocompletar datos del cliente -->
    <script>
        $(document).ready(function() {
            $('#documentoidentidad').on('input', function() {
                let documento = $(this).val();
                if (documento.length >= 3) {
                    $.ajax({
                        url: "{{ route('buscar.cliente') }}",
                        data: {
                            term: documento
                        },
                        success: function(data) {
                            let listaDui = $('#listaDui');
                            console.table(data);
                            listaDui.empty().removeClass('hidden');
                            if (data.length === 0) {
                                listaDui.append(
                                    '<li class="p-2 text-gray-500">No se encontraron clientes</li>'
                                );
                            } else {
                                data.forEach(function(item) {
                                    listaDui.append(
                                        `<li class="p-2 hover:bg-gray-100 cursor-pointer" data-id="${item.id}" data-nombre="${item.nombre}" data-email="${item.email}"
                                        data-direccion="${item.direccion}" data-departamento="${item.departamento}" data-municipio="${item.municipio}" data-telefono="${item.telefono}" data-dui="${item.dui}">${item.dui}</li>`
                                    );
                                });
                            }
                        }
                    });
                } else {
                    $('#listaDui').addClass('hidden');
                }
            });
        });
        // Selección del item
        $(document).on('click', '#listaDui li', function() {
            //Se crean variables y se agregan los valores
            const nombre = $(this).data('nombre');
            const id = $(this).data('id');
            const correo = $(this).data('email');
            const direccion = $(this).data('direccion');
            const departamento = $(this).data('departamento');
            const municipio = $(this).data('municipio');
            const telefono = $(this).data('telefono');
            const dui = $(this).data('dui');

            // Asignar los datos del cliente a los campos correspondientes
            $('#nombreCliente').text(nombre);
            $('#correoCliente').text(correo);
            $('#direccionCliente').text(direccion);
            $('#telefonoCliente').text(telefono);
            $('#departamentoCliente').text(departamento);
            $('#municipioCliente').text(municipio);
            $('#documentoidentidad').val(dui);
            $('#listaDui').addClass('hidden');

        });
        // Limpiar input y lista
        $(document).on('click', 'button[name="btnEliminarDui"]', function(e) {
            e.preventDefault();
            $('#documentoidentidad').val('');
            $('#nombreCliente').text('');
            $('#correoCliente').text('');
            $('#direccionCliente').text('');
            $('#telefonoCliente').text('');
            $('#departamentoCliente').text('');
            $('#municipioCliente').text('');
        });
        // Ocultar la lista si se hace clic fuera
        $(document).on('click', function(e) {
            if (!$(e.target).closest('#documentoidentidad, #listaDui').length) {
                $('#listaDui').addClass('hidden');
            }
        });
    </script>

    <!-- JS para el boton Procesar y el boton Cancelar -->
    <script>
        $(document).ready(function() {
            // Botón Cancelar
            $('button[name="btnCancelar"]').click(function() {
                // Limpiar todos los inputs al cancelar
                $('#documentoidentidad').val('');
                $('#nombreCliente').text('');
                $('#correoCliente').text('');
                $('#direccionCliente').text('');
                $('#telefonoCliente').text('');
                $('#departamentoCliente').text('');
                $('#municipioCliente').text('');
                $('#nombreEmpresa').text('');
                $('input[name="tipoDocumento"]').prop('checked', false);
                $('select.form-select').prop('selectedIndex', 0);
                alert('Factura cancelada y campos limpiados');
                // Limpiar la tabla de servicios
                $('#tablaServicios tbody').empty();
                $('#sumaVentas').text('');
                $('#ivaRetenido').text('');
                $('#subTotal').text('');
                $('#ventasNoSujetas').text('');
                $('#ventasExentas').text('');
                $('#rentaRetenido').text('');
                $('#total').text('');
            });

            function camposCompletos() {
    return $('#documentoidentidad').val().trim() !== '' &&
        $('#nombreCliente').text().trim() !== '' &&
        $('#correoCliente').text().trim() !== '' &&
        $('#direccionCliente').text().trim() !== '' &&
        $('#municipioCliente').text().trim() !== '' &&
        $('#telefonoCliente').text().trim() !== '' &&
        $('#departamentoCliente').text().trim() !== '' &&
        $('#nombreEmpresa').text().trim() !== '';
}

$('button[name="btnProcesar"]').click(function () {
    if (!camposCompletos()) {
        alert('Por favor, complete todos los campos antes de procesar.');
        return;
    }
                // Validar que haya al menos un servicio en la tabla
                if ($('#tablaServicios tbody tr').length === 0) {
                    alert('Por favor, agregue al menos un servicio antes de procesar.');
                    return;
                }

                // Confirmar la acción de procesar
                if (confirm('¿Está seguro de que desea procesar esta factura?')) {
                    // Aquí puedes agregar la lógica para enviar los datos al servidor
                    alert('Factura procesada con éxito.');
                }
            });
        });
    </script>







</x-app-layout>
