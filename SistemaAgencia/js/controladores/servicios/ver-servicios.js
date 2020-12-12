$(document).ready(function () {
    let explorer = $("#kv-explorer");
    let ListaDatos;
    let idSerevicio;
    let tabla;
    inicializarValidaciones();
    inicializarTabla();
    inicializarCombo();

    //BOTON DE EDITAR
    $(document).on('click', '.btn-group .btn-primary', function () {
        $('#loadingActualizar').hide();
        let fila = $(this).closest("tr");
        let data = tabla.row(fila).data();
        idSerevicio = $(this).attr("name");

        console.log(data);

        // //MANDALOS LOS VALORES AL MODAL
        document.getElementById("nombre").value = data.nombre_servicio;
        document.getElementById("costos_defecto").value = data.costos_defecto;
        document.getElementById("descripcion_servicio").value = data.descripcion_servicio;
        $('#tipo_servicio').val(data.id_tipo_servicio);
        $('#tipo_servicio').trigger('change');
        // for (let index = 0; index < ListaDatos.length; index++) {
        //     if (ListaDatos[index].text == tipoSeleccionado) {
        //         $('#tipo_servicio').val(ListaDatos[index].id); // Select the option with a value of '1'
        //         $('#tipo_servicio').trigger('change'); // Notify any JS components that the value changed
        //         break;
        //     }
        // }
        $('#modal-editar').modal('show');

    });
    //BOTON EDITAR LA FOTO
    $(document).on('click', '.btn-group .btn-warning', function () {
        $('#modal-imagenes').modal('show');
        let identificador = $(this).attr("name");
        let nombreTabla = 'servicios_adicionales';
        let informacionAdicional = { tipo: nombreTabla, identificador: identificador };
        let urlFotos = [];
        let infoFotos = [];

        $.ajax({
            url: URL_SERVIDOR + "Imagen/show?tipo=" + nombreTabla + "&identificador=" + identificador,
            method: "GET",

        }).done(function (response) {
            //REST_Controller::HTTP_OK
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
                "url": URL_SERVIDOR + "ServiciosAdicionales/obtenerServicio",
                "method": "GET",
                "dataSrc": function (json) {
                    console.log(json);
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

                            let html2 = "";
                            html2 += '<a href="#">' + json.servicio[i].nombre_contacto + '';
                            html2 += '    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">';
                            html2 += '        <div class="ocultar card bg-light">';
                            html2 += '            <div class="card-body">';
                            html2 += '                <div class="row">';
                            html2 += '                    <div class="col-7">';
                            html2 += '                        <p class="text-muted text-sm">';
                            html2 += '                            <b>Nombre de Contacto</b>';
                            html2 += '                            ' + json.servicio[i].nombre_contacto + '';
                            html2 += '                        </p>';
                            html2 += '                        <ul class="ml-4 mb-0 fa-ul text-muted">';
                            html2 += '                            <li class="small">';
                            html2 += '                                <span class="fa-li">';
                            html2 += '                                    <i class="fas fa-lg fa-mail-bulk"> </i>';
                            html2 += '                                </span> ' + json.servicio[i].correo + '';
                            html2 += '                            </li>';
                            html2 += '                            <li class="small">';
                            html2 += '                                <span class="fa-li">';
                            html2 += '                                    <i class="fas fa-lg fa-phone"></i>';
                            html2 += '                                </span> Teléfono #: ' + json.servicio[i].telefono + '';
                            html2 += '                            </li>';
                            html2 += '                        </ul>';
                            html2 += '                    </div>';
                            html2 += '                    <div class="col-5 text-center">';
                            html2 += '                        <img src="' + json.servicio[i].url + '" alt=""';
                            html2 += '                            class="img-fluid">';
                            html2 += '                    </div>';
                            html2 += '                </div>';
                            html2 += '            </div>';
                            html2 += '            <div class="card-footer"></div>';
                            html2 += '        </div>';
                            html2 += '    </div>';
                            html2 += '</a>';

                            json.servicio[i]["contacto"] = html2;


                        }
                        $('#loading').hide();
                        return json.servicio;
                    } else {
                        $('#loading').hide();
                        return [];
                    }
                }
            },
            columns: [
                { data: "tipo_servicio" },
                { data: "nombre_servicio" },
                { data: "costos_defecto" },
                { data: "contacto" },
                { data: "descripcion_servicio" },
                { data: "botones" },
            ]
        });

    }
    function inicializarCombo() {
        $.ajax({
            url: URL_SERVIDOR + "TipoServicio/show",
            method: "GET"
        }).done(function (response) {
            //REST_Controller::HTTP_OK
            let myData = [];
            if (response.tipo) {
                let lista = response.tipo;
                for (let index = 0; index < lista.length; index++) {
                    myData.push({
                        id: lista[index].id_tipo_servicio,
                        text: lista[index].tipo_servicio
                    });
                }
                $('#tipo_servicio').select2(
                    { data: myData }
                );
            } else {
                $('#tipo_servicio').select2();
            }
        }).fail(function (response) {
            $('#tipo_servicio').select2();

        }).always(function (xhr, opts) {
            $('#loading').hide();
        });
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
            "nombre_servicio": document.getElementById("nombre").value,
            "costos_defecto": document.getElementById("costos_defecto").value,
            "descripcion_servicio": document.getElementById("descripcion_servicio").value,
            "tipo_servicio": tipoSeleccionado

        };
        ///OCUPAR ESTA CONFIGURACION CUANDO SOLO SEA TEXTO
        $.ajax({
            url: URL_SERVIDOR + "ServiciosAdicionales/update",
            method: "PUT",
            timeout: 0,
            data: data
        }).done(function (response) {
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
            console.log(response);

            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: "ERROR EN ENVIO DE INFORMACION",
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

        $.ajax({
            url: URL_SERVIDOR + "ServiciosAdicionales/elimination",
            method: "DELETE",
            timeout: 0,
            data: data
        }).done(function (response) {
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

            console.log(response);
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: "ERROR EN EL ENVIO DE INFORMACION",
                showConfirmButton: true,
            });

        }).always(function (xhr, opts) {
            $('#loadingActualizar').hide();
        });
    }
});