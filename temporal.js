<script>
    $(document).ready(function() {
        //Hacer la busqueda con la function input
        $('#inputServicio').on('input', function () {
            let query = $(this).val();
            // Verificar si el checkbox está marcado
            let buscarPorCodigo = $('#buscarPorCodigo').is(':checked');
            if (buscarPorCodigo && query.length >= 1) {
                $.ajax({
                    url: "{{ route('buscar.servicio.codigo') }}",
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
            }
            else if (query.length >= 2) {


                $.ajax({
                    url: "{{ route('buscar.servicio') }}",
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
