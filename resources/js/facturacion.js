import $ from 'jquery';
$(document).ready(function () {

    //Guardar el valor del input cliente y servicio



    $(function () {
        // Input servicios
        $('#inputServicio').on('input', function () {
            let query = $(this).val();
            // Verificar si el checkbox está marcado
            let buscarPorCodigo = $('#buscarPorCodigo').is(':checked');
            const urlCodigo = $(this).data('url-codigo');
            const urlNombre = $(this).data('url-nombre');


            if (buscarPorCodigo && query.length >= 1) {
                $.ajax({
                    url: urlCodigo,
                    data: {
                        term: query
                    },
                    success: function (data) {
                        let lista = $('#listaServicios');
                        console.table(data);
                        lista.empty().removeClass('hidden');

                        if (data.length === 0) {
                            lista.append(
                                '<li class="p-2 text-gray-500">No se encontraron servicios</li>'
                            );
                        } else {
                            data.forEach(function (item) {
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
                    url: urlNombre,
                    data: {
                        term: query
                    },
                    success: function (data) {
                        let lista = $('#listaServicios');
                        console.table(data);
                        lista.empty().removeClass('hidden');

                        if (data.length === 0) {
                            lista.append(
                                '<li class="p-2 text-gray-500">No se encontraron servicios</li>'
                            );
                        } else {
                            data.forEach(function (item) {
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

        // Agregar servicio a la tabla
        $(document).on('click', '#listaServicios li', function () {
            //Se crean variables y se agregan los valores
            const nombre = $(this).data('nombre');
            const id = $(this).data('id');
            var precio = $(this).data('precio');
            //guardar el valor del input servicio
            $('#idServicio').val(id);

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
        $(document).on('click', '.btn-eliminar', function () {
            $(this).closest('tr').remove();
        });

        // Ocultar la lista si se hace clic fuera
        $(document).on('click', function (e) {
            if (!$(e.target).closest('#inputServicio, #listaServicios').length) {
                $('#listaServicios').addClass('hidden');
            }
        });
    });

    // Buscar cliente
    $('#documentoidentidad').on('input', function () {
        let documento = $(this).val();

        const url = $(this).data('url-cliente');
        if (documento.length >= 3) {
            $.ajax({
                url: url,
                data: {
                    term: documento
                },
                success: function (data) {
                    let listaDui = $('#listaDui');
                    listaDui.empty().removeClass('hidden');
                    if (data.length === 0) {
                        listaDui.append(
                            '<li class="p-2 text-gray-500">No se encontraron clientes</li>'
                        );
                    } else {
                        data.forEach(function (item) {
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

    $(document).on('click', '#listaDui li', function () {
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

    $(document).on('click', 'button[name="btnEliminarDui"]', function (e) {
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
    $(document).on('click', function (e) {
        if (!$(e.target).closest('#documentoidentidad, #listaDui').length) {
            $('#listaDui').addClass('hidden');
        }
    });

    // Cancelar factura
    $('button[name="btnCancelar"]').click(function () {
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
            $('#departamentoCliente').text().trim() !== '';
    }


    // Procesar factura
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

        // Guardar el valor del input cliente
        let inputCliente = $('#documentoidentidad').val();
        // Guardar el valor del input servicio
        let inputServicio = $('#idservicio').val();

        console.log('Valor del input cliente:', inputCliente);
        console.log('Valor del input servicio:', inputServicio);
    });


});
