$(document).ready(function () {
    $('#loadingActualizar').hide();
    let explorer = $("#kv-explorer");
    let ListaDatos;
    let idSerevicio;
    let tabla;
    inicializarValidaciones();
    inicializarTabla();
    inicializarCombo();

    //BOTON DE EDITAR
    $(document).on('click', '.btn-group .btn-primary', function () {
        idSerevicio = $(this).attr("name");
        fila = $(this).closest("tr");


        tipoSeleccionado = fila.find('td:eq(0)').text();
        nombreSeleccionado = fila.find('td:eq(1)').text();
        descripcionSeleccionada = fila.find('td:eq(2)').text();
        costoSeleccionado = fila.find('td:eq(3)').text();

        //MANDALOS LOS VALORES AL MODAL
        document.getElementById("nombre").value = nombreSeleccionado;
        document.getElementById("costos_defecto").value = costoSeleccionado;
        document.getElementById("descripcion_servicio").value = descripcionSeleccionada;
        for (let index = 0; index < ListaDatos.length; index++) {
            if (ListaDatos[index].text == tipoSeleccionado) {
                $('#tipo_servicio').val(ListaDatos[index].id); // Select the option with a value of '1'
                $('#tipo_servicio').trigger('change'); // Notify any JS components that the value changed
                break;
            }
        }
        $('#modal-editar').modal('show');;

    });
    //BOTON EDITAR LA FOTO
    $(document).on('click', '.btn-group .btn-warning', function () {
        $('#modal-imagenes').modal('show');
        let identificador = $(this).attr("name");
        let nombreTabla = 'servicios_adicionales';
        let informacionAdicional ={  tipo:nombreTabla, identificador:identificador};
        let urlFotos = [];
        let infoFotos = [];


        $.ajax({
            url: URL_SERVIDOR + "Imagen/show?tipo=" + nombreTabla + "&identificador=" + identificador,
            success: function (response) {
                response.forEach(element => {
                    let informacion = {
                        url: URL_SERVIDOR + "Imagen/delete",
                        key: element.id_foto
                    };
                    infoFotos.push(informacion);
                    urlFotos.push(element.foto_path);
                });
                explorer.fileinput({
                    theme: 'fas',
                    language: 'es',
                    uploadUrl: URL_SERVIDOR + '/Imagen/save',
                    uploadExtraData: informacionAdicional,
                    overwriteInitial: false,
                    initialPreviewAsData: true,
                    initialPreview: urlFotos,
                    initialPreviewConfig: infoFotos,
                    required: true,
                    maxFileSize: 2000,
                    maxFilesNum: 10,
                    allowedFileExtensions: ["jpg", "png", "gif"]

                });
            }
        });

    });
    //BOTON PARA ELIMINAR
    $(document).on('click', '.btn-group .btn-danger', function (evento) {
        idSerevicio = $(this).attr("name");
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
    $(document).on('click', '#btnActualizar', function (evento) {
        evento.preventDefault();//para evitar que la pagina se recargue
        let form = $("#miFormulario");
        form.validate();
        if (form.valid()) {
            actualizar();
        }
    });
    //CUANDO EL MODAL SE CIERRA
    $('#modal-imagenes').on('hidden.bs.modal', function (e) {
        console.log("cerrando modal")
        explorer.fileinput('destroy');
    })

    function inicializarTabla() {
        tabla = $("#tabla_servicios").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "ajax": {
                "method": "GET",
                "url": URL_SERVIDOR + "ServiciosAdicionales/obtenerServicio",
                "dataSrc": function (json) {
                    //PARA CONPROVAR QUE EL SERVICIO EXISTE
                    if (json.servicio) {
                        for (let i = 0, ien = json.servicio.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.servicio[i].id_servicios + '" class="btn btn-primary" data-toggle="modal"';
                            html += '            data-target="">';
                            html += '            <i class="fas fa-edit" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.servicio[i].id_servicios + '" class="btn btn-warning" data-toggle="modal"';
                            html += '            data-target="#modal-galeria">';
                            html += '            <i class="fas fa-image" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.servicio[i].id_servicios + '" class="btn btn-danger" data-toggle="modal"';
                            html += '            data-target="#modal-eliminar">';
                            html += '            <i class="fas fa-trash" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.servicio[i]["botones"] = html;

                        }
                        return json.servicio;
                    } else {
                        return [];
                    }
                }
            },
            columns: [
                { data: "tipo_servicio" },
                { data: "nombre" },
                { data: "descripcion_servicio" },
                { data: "costos_defecto" },
                { data: "botones" },
            ]
        });
        $('#loading').hide();
    }
    function inicializarCombo() {
        //Initialize Select2 Elements
        ListaDatos = [
            {
                "id": 1,
                "text": "Vehiculo"
            }, {
                "id": 2,
                "text": "Guia Turistico"
            }, {
                "id": 3,
                "text": "Busero"
            },
            {
                "id": 4,
                "text": "Taxista"
            },
            {
                "id": 5,
                "text": "Cocinero"
            },
            {
                "id": 6,
                "text": "Payaso"
            }
        ];
        $('#tipo_servicio').select2(
            {
                data: ListaDatos
            }
        );
    }
    function inicializarValidaciones() {
        $('#miFormulario').validate({
            rules: {
                nombre: {
                    required: true,
                    minlength: 3,
                    maxlength: 40
                },
                costos_defecto: {
                    required: true,
                    number: true,
                    min: 0
                },
                informacion_contacto: {
                    required: true,
                    minlength: 10,
                },
                descripcion_servicio: {
                    required: true,
                    minlength: 10,
                }
            },
            messages: {
                nombre: {
                    required: "Ingrese un nombre",
                    minlength: "Logitud del nombre debe ser mayor a 3",
                    maxlength: "Logitud del nombre no debe exceder a 40",
                },
                costos_defecto: {
                    required: "Ingrese un numero",
                    number: "Ingrese un numero",
                    min: "Debe de ser mayor que 0"
                },
                informacion_contacto: {
                    required: "La informacion de contacto es necesaria",
                    minlength: "Debe de tener una longitud minima de 10",
                },
                descripcion_servicio: {
                    required: "La descripcion del servico es necesaria",
                    minlength: "Debe de tener una longitud minima de 10",
                }

            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');

            }
        });

    }
    function actualizar() {
        $('#loadingActualizar').show();
        tipoSeleccionado = "";
        tipo = document.getElementById("tipo_servicio").value;//esto captura el id, y lo que yo quiero guardar es el texto
        for (let index = 0; index < ListaDatos.length; index++) {
            if (tipo == ListaDatos[index].id) {
                tipoSeleccionado = ListaDatos[index].text;
            }
        }
        let data = {
            "id_servicios": idSerevicio,
            "nombre": document.getElementById("nombre").value,
            "costos_defecto": document.getElementById("costos_defecto").value,
            "descripcion_servicio": document.getElementById("descripcion_servicio").value,
            "tipo_servicio": tipoSeleccionado

        };
        ///OCUPAR ESTA CONFIGURACION CUANDO SOLO SEA TEXTO
        let settings = {
            "url": URL_SERVIDOR + "ServiciosAdicionales/update",
            "method": "PUT",
            "timeout": 0,
            "data": data
        };
        $.ajax(settings).done(function (response) {
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
        }).fail(function (response) {

            //SI HUBO UN ERROR EN LA RESPUETA REST_Controller::HTTP_BAD_REQUEST
            let respuestaDecodificada = JSON.parse(response.responseText);
            let listaErrores = "";

            if (respuestaDecodificada.errores) {
                ///ARREGLO DE ERRORES 
                let erroresEnvioDatos = respuestaDecodificada.errores;
                for (mensaje in erroresEnvioDatos) {
                    listaErrores += erroresEnvioDatos[mensaje] + "\n";
                };
            } else {
                listaErrores = respuestaDecodificada.mensaje
            }
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: listaErrores,
                showConfirmButton: true,
            });

        }).always(function (xhr, opts) {
            $('#loadingActualizar').hide();
        });
    }
    function eliminar() {
        let data = {
            "id_servicios": idSerevicio
        };
        ///OCUPAR ESTA CONFIGURACION CUANDO SOLO SEA TEXTO
        var settings = {
            "url": URL_SERVIDOR + "ServiciosAdicionales/elimination",
            "method": "DELETE",
            "timeout": 0,
            "data": data
        };
        $.ajax(settings).done(function (response) {
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
        }).fail(function (response) {

            //SI HUBO UN ERROR EN LA RESPUETA REST_Controller::HTTP_BAD_REQUEST
            let respuestaDecodificada = JSON.parse(response.responseText);
            let listaErrores = "";

            if (respuestaDecodificada.errores) {
                ///ARREGLO DE ERRORES 
                let erroresEnvioDatos = respuestaDecodificada.errores;
                for (mensaje in erroresEnvioDatos) {
                    listaErrores += erroresEnvioDatos[mensaje] + "\n";
                };
            } else {
                listaErrores = respuestaDecodificada.mensaje
            }
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: listaErrores,
                showConfirmButton: true,
            });

        }).always(function (xhr, opts) {
            //  $('#loadingActualizar').hide();
        });
    }
});