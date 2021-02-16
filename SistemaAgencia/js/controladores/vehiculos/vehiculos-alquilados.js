$(document).ready(function() {
    let explorer = $("#kv-explorer");
    let idAlquiler;
    let tabla;


    // inicializarValidaciones();
    inicializarTabla();

    //BOTON DE EDITAR
    $(document).on('click', '.btn-group .btn-primary', function() {

        idAlquiler = $(this).attr("name");

        $('#loadingActualizar').show();
        $.ajax({
            url: "http://localhost/API-REST-PHP/DetalleVehiculo/obtenerDetalleVehiculo?activo=2&id_detalle=" + idAlquiler,
            method: "GET"
        }).done(function(response) {
            //MANDALOS LOS VALORES AL MODAL
            for (let i = 0, ien = response.detalleVehiculo.length; i < ien; i++) {

                document.getElementById("idDetalle").value = response.detalleVehiculo[i].id_detalle;
                document.getElementById("cliente").value = response.detalleVehiculo[i].id_cliente;
                document.getElementById("vehiculo").value = response.detalleVehiculo[i].id_vehiculo;
                document.getElementById("total").value = response.detalleVehiculo[i].total;
                document.getElementById("recogida").value = response.detalleVehiculo[i].direccionRecogida;
                document.getElementById("devolucion").value = response.detalleVehiculo[i].direccionDevolucion;
                document.getElementById("fechaHora").value = response.detalleVehiculo[i].fechaHora;
                document.getElementById("servicios").value = response.detalleVehiculo[i].nombre;
              
            }




        }).fail(function(response) {

        }).always(function(xhr, opts) {
            $('#modal-editar').modal('show');
            $('#loadingActualizar').hide();
        });
    });


    //BOTON PARA ELIMINAR
    $(document).on('click', '.btn-group .btn-danger', function(evento) {
        idAlquiler = $(this).attr("name");
        fila = $(this).closest("tr");

        const Toast = Swal.mixin();
        Swal.fire({
            title: '¿Estas seguro?',
            text: "Se Eliminará este registro!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar!'
        }).then((result) => {
            console.log(result);
            if (result.value) {
                eliminar();
            }
        })
    });
    //BOTON PARA ACTUALIZAR
    $(document).on('click', '#btnActualizar', function(evento) {
        evento.preventDefault(); //para evitar que la pagina se recargue
        let form = $("#miFormulario");
        form.validate();
        if (form.valid()) {
            actualizar();
        }
    });
    //CUANDO EL MODAL SE CIERRA
    $('#modal-imagenes').on('hidden.bs.modal', function(e) {
        console.log("cerrando modal")
        explorer.fileinput('destroy');
    })

    function inicializarTabla() {
        tabla = $("#tabla_mantenimientos").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "ajax": {
                "url": URL_SERVIDOR + "DetalleVehiculo/obtenerDetalleVehiculo?activo=2",
                "method": "GET",
                "dataSrc": function(json) {
                    console.log(json.detalleVehiculo);

                    if (json.detalleVehiculo) {
                        for (let i = 0, ien = json.detalleVehiculo.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.detalleVehiculo[i].id_detalle + '" class="btn btn-primary" data-toggle="modal"';
                            html += '            data-target="#modal-editar">';
                            html += '            <i class="fas fa-edit" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.detalleVehiculo[i].id_detalle + '" class="btn btn-danger" data-toggle="modal"';
                            html += '            data-target="#modal-eliminar">';
                            html += '            <i class="fas fa-trash" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.detalleVehiculo[i]["botones"] = html;

                        }
                        $('#loading').hide();
                        return json.detalleVehiculo;
                    } else {
                        $('#loading').hide();
                        return [];
                    }
                }
            },
            columns: [
                { data: "id_detalle" },
                { data: "id_cliente" },
                { data: "id_vehiculo" },
                { data: "total" },
                { data: "fechaHora" },
                { data: "botones" }
            ]
        });

    }

    function inicializarValidaciones() {
        $('#miFormulario').validate({
            rules: {
                placa: {
                    required: true,
                    minlength: 3,
                    maxlength: 40
                },
                anio: {
                    required: true,
                    number: true,
                    min: 2010
                },
                tipoCombustible: {
                    required: true,
                    minlength: 10,
                },
                precio_diario: {
                    required: true,
                    number: true,
                    min: 1
                }
            },
            messages: {
                placa: {
                    required: "Ingrese un nombre",
                    minlength: "Logitud del nombre debe ser mayor a 3",
                    maxlength: "Logitud del nombre no debe exceder a 40",
                },
                anio: {
                    required: "Ingrese un numero",
                    number: "Ingrese un numero",
                    min: "Debe de ser mayor que 0"
                },
                tipoCombustible: {
                    required: "La informacion de contacto es necesaria",
                    minlength: "Debe de tener una longitud minima de 10",
                },
                precio_diario: {
                    required: "Ingrese un numero",
                    number: "Ingrese un numero",
                    min: "Debe de ser mayor que 0"
                }

            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');

            }
        });

    }

    function actualizar() {
        $('#loadingActualizar').show();
        let data = {
            "id_mantenimiento": idAlquiler,
            "fecha": document.getElementById("fecha").value,
            "lugar": document.getElementById("lugar").value

        };
        ///OCUPAR ESTA CONFIGURACION CUANDO SOLO SEA TEXTO
        $.ajax({
            url: URL_SERVIDOR + "mantenimientoVehiculo/actualizarMantenimiento",
            method: "PUT",
            timeout: 0,
            data: data
        }).done(function(response) {
            //REST_Controller::HTTP_OK
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: response.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                $('#modal-editar').modal('hide');;
                tabla.ajax.reload(null, false);
            });
        }).fail(function(response) {
            console.log(response);

            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: "ERROR EN ENVIO DE INFORMACION",
                showConfirmButton: true,
            });

        }).always(function(xhr, opts) {
            $('#loadingActualizar').hide();
        });
    }

    function eliminar() {
        let data = {
            "id_mantenimiento": idAlquiler
        };
        ///OCUPAR ESTA CONFIGURACION CUANDO SOLO SEA TEXTO

        $.ajax({
            url: URL_SERVIDOR + "mantenimientoVehiculo/eliminarMantenimiento",
            method: "DELETE",
            timeout: 0,
            data: data
        }).done(function(response) {
            //REST_Controller::HTTP_OK
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: response.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                tabla.ajax.reload(null, false);
            });
        }).fail(function(response) {

            console.log(response);
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: "ERROR EN EL ENVIO DE INFORMACION",
                showConfirmButton: true,
            });

        }).always(function(xhr, opts) {
            $('#loadingActualizar').hide();
        });
    }



});