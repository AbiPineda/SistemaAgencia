// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function () {
    $('#configuracionAsientos').hide();
    $('#dibujoAsientos').hide();
    inicializarGaleria();
    inicializarFoto();
    inicializarValidaciones();
    inicializarComboContacto();
    inicializarComboTipo();

    //BOTON DE GUARDAR
    $(document).on('click', '#btnguardar', function (evento) {
        evento.preventDefault();//para evitar que la pagina se recargue
        let form = $("#miFormulario");
        form.validate();
        if (form.valid()) {
            guardar();
        }
    });
    //BOTON PARA AGREGAR UN NUEVO CONTACTO 
    $(document).on('click', '#btnAgregar', function (evento) {
        evento.preventDefault();//para evitar que la pagina se recargue
        let form = $("#formularioAgregar");
        form.validate();
        if (form.valid()) {

            guardarContacto();
        }
    });
    //BOTON PARA AGREGAR UN NUEVO TIPO 
    $(document).on('click', '#btnAgregarTipo', function (evento) {
        evento.preventDefault();//para evitar que la pagina se recargue
        let form = $("#formularioAgregarTipo");
        form.validate();
        if (form.valid()) {
            guardarTipo();
        }
    });
    //BOTON DE NUEVO
    $(document).on('click', '#btn-nuevo', function (evento) {
        $('#modal-agregar').modal('show');
    });
    //BOTON DE NUEVO TIPO
    $(document).on('click', '#btn-nuevoTipo', function (evento) {
        $('#modal-agregarTipo').modal('show');
    });
    //CAMBIO EN EL COMBO TIPO PARA MOSTRAR EL DIBUJO DEL TRANSPORTE
    $('#tipo_servicio').on('select2:select', function (e) {
        let data = e.params.data;
        if (data.text === "Transporte") {
            $('#configuracionAsientos').show();
            $('#dibujoAsientos').show();

        } else {
            $('#configuracionAsientos').hide();
            $('#dibujoAsientos').hide();
        }

    });

    function guardar() {
        $('#loading').show();
        let form = new FormData();
        //ESTO ES PARA L A GALERIA 
        let galeria = document.getElementById("fotos").files;
        for (let i = 0; i < galeria.length; i++) {
            form.append('fotos[]', galeria[i]);
        }
        form.append("id_tipo_servicio", document.getElementById("tipo_servicio").value);
        form.append("nombre_servicio", document.getElementById("nombre").value);
        form.append("costos_defecto", document.getElementById("costos_defecto").value);
        form.append("descripcion_servicio", document.getElementById("descripcion_servicio").value);
        form.append("id_contacto", document.getElementById("contacto_servicio").value);

        let tipoServicio = $('#tipo_servicio').select2("data");
        if (tipoServicio[0].text === "Transporte") {
            let asientos_disponibles = numero_filas * (asientos_derecho + asientos_izquierdo);
            if ($('#checkTrasero').prop('checked')) {
                asientos_disponibles += asientos_derecho + asientos_izquierdo + 1;
            }
            asientos_disponibles -= sc.find('e.selected').seatIds.length;
            form.append("mapa", miMapa);
            form.append("asientos_deshabilitados", sc.find('e.selected').seatIds);
            form.append("asientos_dispobibles", asientos_disponibles);
        }

        //OCUPAR ESTA CONFIGURACION CUANDO SE ENVIAEN ARCHIVOS(FOTOS-IMAGENES)
        $.ajax({
            url: URL_SERVIDOR + "ServiciosAdicionales/save",
            method: "POST",
            mimeType: "multipart/form-data",
            data: form,
            timeout: 0,
            processData: false,
            contentType: false,
        }).done(function (response) {
            //REST_Controller::HTTP_OK
            let respuestaDecodificada = JSON.parse(response);
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: respuestaDecodificada.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                //TODO BIEN Y RECARGAMOS LA PAGINA

                $("#tipo_servicio").val('1').trigger('change');
                $('#configuracionAsientos').hide();
                $('#dibujoAsientos').hide();
                $("#miFormulario").trigger("reset");
                miMapa = [];
                numero_filas = 2;
                crearStrFila();
                borrarTodo();
                crearFilas();
                dibujarAsientos();
            });
        }).fail(function (response) {
            //SI HUBO UN ERROR EN LA RESPUETA REST_Controller::HTTP_BAD_REQUEST
            console.log(response);

            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: "ERROR EN EL ENVIO DE INFORMACIÓN",
                showConfirmButton: true,
            });

        }).always(function (xhr, opts) {
            $('#loading').hide();
        });
    }
    function guardarContacto() {
        $('#loading').show();
        let form = new FormData();

        let foto_perfil = document.getElementById("foto").files[0];
        form.append('foto', foto_perfil);
        form.append("nombre_contacto", document.getElementById("nombreContacto").value);
        form.append("telefono", document.getElementById("telefonoContacto").value);
        form.append("correo", document.getElementById("correoContacto").value);
        form.append("id_contacto", document.getElementById("contacto_servicio"));
        //OCUPAR ESTA CONFIGURACION CUANDO SE ENVIAEN ARCHIVOS(FOTOS-IMAGENES)
        $.ajax({
            url: URL_SERVIDOR + "Contacto/save",
            method: "POST",
            mimeType: "multipart/form-data",
            data: form,
            timeout: 0,
            processData: false,
            contentType: false,
        }).done(function (response) {
            //REST_Controller::HTTP_OK
            let respuestaDecodificada = JSON.parse(response);
            //AGREGAMOS RESPUESTA AL COMBO
            let texto = respuestaDecodificada.contacto.nombre_contacto;
            let id = respuestaDecodificada.id;
            let newOption = new Option(texto, id, false, false);
            $('#contacto_servicio').append(newOption).trigger('change');
            //mandamos un mensaje al usuario
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: respuestaDecodificada.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                //TODO BIEN Y RECARGAMOS LA PAGINA 
                $("#formularioAgregar").trigger("reset");
                $('#modal-agregar').modal('hide');
            });
        }).fail(function (response) {
            //SI HUBO UN ERROR EN LA RESPUETA REST_Controller::HTTP_BAD_REQUEST
            console.log(response);
            let listaErrores = "ERROR EN EL ENVIO DE INFORMACION";
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: listaErrores,
                showConfirmButton: true,
            });

        }).always(function (xhr, opts) {
            $("#formularioAgregar").trigger("reset");
            $('#modal-agregar').modal('hide');
            $('#loading').hide();
        });
    }
    function guardarTipo() {
        $('#loading').show();
        let myData = {
            tipo_servicio: document.getElementById("nombreTipo").value
        }
        console.log(myData);
        $.ajax({
            url: URL_SERVIDOR + "TipoServicio/save",
            method: "POST",
            data: myData,
            timeout: 0,

        }).done(function (response) {
            //REST_Controller::HTTP_OK
            let respuestaDecodificada = response;
            //AGREGAMOS RESPUESTA AL COMBO
            let texto = respuestaDecodificada.tipo.tipo_servicio;
            let id = respuestaDecodificada.id;
            let newOption = new Option(texto, id, false, false);
            $('#tipo_servicio').append(newOption).trigger('change');
            //mandamos un mensaje al usuario
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: respuestaDecodificada.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                //TODO BIEN Y RECARGAMOS LA PAGINA 
                $("#formularioAgregarTipo").trigger("reset");
                $('#modal-agregarTipo').modal('hide');
            });
        }).fail(function (response) {
            //SI HUBO UN ERROR EN LA RESPUETA REST_Controller::HTTP_BAD_REQUEST
            console.log(response);
            let listaErrores = "ERROR EN EL ENVIO DE INFORMACION";
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: listaErrores,
                showConfirmButton: true,
            });

        }).always(function (xhr, opts) {
            $("#formularioAgregarTipo").trigger("reset");
            $('#modal-agregarTipo').modal('hide');
            $('#loading').hide();
        });
    }
    function inicializarGaleria() {
        // ESTO ES PARA INICIALIZAR EL ELEMENTO DE SUBIDA DE FOTOS (EN ESTE CASO UNA GALERIA )
        $('#fotos').fileinput({
            theme: 'fas',
            language: 'es',
            //uploadUrl: '#',
            showUpload: false,
            //showCaption: false,
            maxFileSize: 2000,
            maxFilesNum: 10,
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            required: true,
            uploadAsync: false,
            showClose: false,
        });
    }
    function inicializarFoto() {
        // ESTO ES PARA INICIALIZAR EL ELEMENTO DE SUBIDA DE UNA UNICA FOTO
        $('#foto').fileinput({
            theme: 'fas',
            language: 'es',
            required: true,
            maxFileSize: 2000,
            maxFilesNum: 10,
            showUpload: false,
            showClose: false,
            showCaption: true,
            browseLabel: '',
            removeLabel: '',
            //removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-1',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="../../img/avatar.png" alt="Your Avatar">',
            layoutTemplates: { main2: '{preview} {remove} {browse}' },
            allowedFileExtensions: ["jpg", "png", "gif"]
        });
    }
    function inicializarComboContacto() {
        //COMBO DE TIPOS 
        $('#tipo_servicio').select2();
        //COMBO DE CONTACTOS
        $.ajax({
            url: URL_SERVIDOR + "Contacto/show",
            method: "GET"
        }).done(function (response) {
            //REST_Controller::HTTP_OK
            let myData = [];
            if (response.contactos) {
                let lista = response.contactos;
                for (let index = 0; index < lista.length; index++) {
                    myData.push({
                        id: lista[index].id_contacto,
                        text: lista[index].nombre_contacto
                    });
                }
                $('#contacto_servicio').select2(
                    { data: myData }
                );
            } else {
                $('#contacto_servicio').select2();
            }
        }).fail(function (response) {
            $('#contacto_servicio').select2();

        }).always(function (xhr, opts) {
            //  $('#loading').hide();
        });
    }
    function inicializarComboTipo() {

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
                descripcion_servicio: {
                    required: true,
                    minlength: 10,
                }, fotos: {
                    required: true
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

        $('#formularioAgregar').validate({
            rules: {
                correoContacto: {
                    email: true
                },
                nombreContacto: {
                    required: true,
                    minlength: 3,
                }
            },
            messages: {
                correoContacto: {
                    email: "Ingrese un correo electrónico válido"
                },
                nombreContacto: {
                    required: "Es necesario un nombre",
                    minlength: "Debe de tener una longitud minima de 3"
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
        $('#formularioAgregarTipo').validate({
            rules: {
                nombreTipo: {
                    required: true,
                    minlength: 3,
                }
            },
            messages: {
                nombreTipo: {
                    required: "Es necesario un nombre",
                    minlength: "Debe de tener una longitud minima de 3"
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
});