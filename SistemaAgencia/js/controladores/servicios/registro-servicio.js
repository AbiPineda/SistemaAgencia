// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function () {
    $('#configuracionAsientos').hide();
    $('#dibujoAsientos').hide();
    inicializarGaleriaServicio();
    inicializarFotoServicio();
    inicializarValidacionesServicio();
    inicializarComboContactoServicio();
    inicializarComboTipoServicio();

    //BOTON DE GUARDAR
    $(document).on('click', '#btnguardarServicio', function (evento) {
        evento.preventDefault();//para evitar que la pagina se recargue
        let form = $("#miFormularioServicio");
        form.validate();
        if (form.valid()) {
            guardarServicio();
        }
    });
    //BOTON PARA AGREGAR UN NUEVO CONTACTO 
    $(document).on('click', '#btnAgregarContactoServicio', function (evento) {
        evento.preventDefault();//para evitar que la pagina se recargue
        let form = $("#formularioAgregarContactoServicio");
        form.validate();
        if (form.valid()) {
            guardarContactoServicio();
        }
    });
    //BOTON PARA AGREGAR UN NUEVO TIPO 
    $(document).on('click', '#btnAgregarTipoServicio', function (evento) {
        evento.preventDefault();//para evitar que la pagina se recargue
        let form = $("#formularioAgregarTipoServicio");
        form.validate();
        if (form.valid()) {
            guardarTipoServicio();
        }
    });
    //BOTON DE + CONTACTO
    $(document).on('click', '#nuevoContactoServicio', function (evento) {
        $('#modal-agregarContactoServicio').modal('show');
    });
    //BOTON DE NUEVO TIPO
    $(document).on('click', '#btn-nuevoTipoServicio', function (evento) {
        $('#modal-agregarTipoServicio').modal('show');
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

    function guardarServicio() {
        $('#loadingServicio').show();
        let form = new FormData();
        //ESTO ES PARA L A GALERIA 
        let galeria = document.getElementById("fotosServicio").files;
        for (let i = 0; i < galeria.length; i++) {
            form.append('fotosServicio[]', galeria[i]);
        }
        form.append("id_tipo_servicio", document.getElementById("tipo_servicio").value);
        form.append("nombre_servicio", document.getElementById("nombreServicio").value);
        form.append("costos_defecto", document.getElementById("costos_defectoServicio").value);
        form.append("descripcion_servicio", document.getElementById("descripcion_servicio").value);
        form.append("id_contacto", document.getElementById("contacto_servicio").value);

        let tipoServicio = $('#tipo_servicio').select2("data");
        let fila_trasera = $('#checkTrasero').prop('checked');
        console.log("la fila trasera es " + fila_trasera);

        if (tipoServicio[0].text === "Transporte") {
            let asientos_disponibles = numero_filas * (asientos_derecho + asientos_izquierdo);
            if (fila_trasera) {
                asientos_disponibles += asientos_derecho + asientos_izquierdo + 1;
            }
            asientos_disponibles -= sc.find('e.selected').seatIds.length;

            form.append("asientos_deshabilitados", sc.find('e.selected').seatIds);
            form.append("filas", $('#numero_filas').val());
            form.append("asiento_derecho", $('#asientos_derecho').val());
            form.append("asiento_izquierdo", $('#asientos_izquierdo').val());
            form.append("fila_trasera", fila_trasera);
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
            console.log(response);
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: "Servicio Guardado Exitosamente",
                showConfirmButton: true,
            }).then((result) => {
                //TODO BIEN Y RECARGAMOS LA PAGINA

                $("#tipo_servicio").val('1').trigger('change');
                $('#configuracionAsientos').hide();
                $('#dibujoAsientos').hide();
                $("#miFormularioServicio").trigger("reset");
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
            $('#loadingServicio').hide();
        });
    }
    function guardarContactoServicio() {
        $('#loadingServicio').show();
        let form = new FormData();

        let foto_perfil = document.getElementById("fotoServicio").files[0];
        form.append('foto', foto_perfil);
        form.append("nombre_contacto", document.getElementById("nombreContactoServicio").value);
        form.append("telefono", document.getElementById("telefonoContactoServicio").value);
        form.append("correo", document.getElementById("correoContactoServicio").value);
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
                $("#formularioAgregarContactoServicio").trigger("reset");
                $('#modal-agregarContactoServicio').modal('hide');
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
            $("#formularioAgregarContactoServicio").trigger("reset");
            // $('#modal-agregarContactoServicio').modal('hide');
            $('#loadingServicio').hide();
        });
    }
    function guardarTipoServicio() {
        $('#loadingServicio').show();
        let myData = {
            tipo_servicio: document.getElementById("nombreTipoServicio").value
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
                $("#formularioAgregarTipoServicio").trigger("reset");
                $('#modal-agregarTipoServicio').modal('hide');
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
            $("#formularioAgregarTipoServicio").trigger("reset");
            $('#modal-agregarTipoServicio').modal('hide');
            $('#loadingServicio').hide();
        });
    }
    function inicializarGaleriaServicio() {
        // ESTO ES PARA INICIALIZAR EL ELEMENTO DE SUBIDA DE FOTOS (EN ESTE CASO UNA GALERIA )
        $('#fotosServicio').fileinput({
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
    function inicializarFotoServicio() {
        // ESTO ES PARA INICIALIZAR EL ELEMENTO DE SUBIDA DE UNA UNICA FOTO
        $('#fotoServicio').fileinput({
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
    function inicializarComboContactoServicio() {
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
    function inicializarComboTipoServicio() {

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
            $('#loadingServicio').hide();
        });
    }
    function inicializarValidacionesServicio() {
        $('#miFormularioServicio').validate({
            rules: {
                nombreServicio: {
                    required: true,
                    minlength: 3,
                    maxlength: 40
                },
                costos_defectoServicio: {
                    required: true,
                    number: true,
                    min: 0
                },
                descripcion_servicio: {
                    required: true,
                    minlength: 10,
                }, fotosServicio: {
                    required: true
                }
            },
            messages: {
                nombreServicio: {
                    required: "Ingrese un nombre",
                    minlength: "Logitud del nombre debe ser mayor a 3",
                    maxlength: "Logitud del nombre no debe exceder a 40",
                },
                costos_defectoServicio: {
                    required: "Ingrese un numero",
                    number: "Ingrese un numero",
                    min: "Debe de ser mayor que 0"
                },
                descripcion_servicioServicio: {
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

        $('#formularioAgregarContactoServicio').validate({
            rules: {
                correoContactoServicio: {
                    email: true
                },
                nombreContactoServicio: {
                    required: true,
                    minlength: 3,
                }
            },
            messages: {
                correoContactoServicio: {
                    email: "Ingrese un correo electrónico válido"
                },
                nombreContactoServicio: {
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
        $('#formularioAgregarTipoServicio').validate({
            rules: {
                nombreTipoServicio: {
                    required: true,
                    minlength: 3,
                }
            },
            messages: {
                nombreTipoServicio: {
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