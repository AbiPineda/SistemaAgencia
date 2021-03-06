// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function () {
    let dataTipo;

    inicializarComboContactoSitios();
    inicializarComboTipoSitios();
    inicializarValidacionesSitios();
    inicializarGaleriaSitios();
    inicializarFotoContactoSitio();

    //BOTON ABRIR MODAL DE CONTACTO
    $(document).on('click', '#btn-nuevoContacto', function (evento) {
        $('#modal-agregarContactoSitio').modal('show');
    });
    //BOTON PARA AGREGAR UN NUEVO CONTACTO 
    $(document).on('click', '#btnAgregarContactoSitio', function (evento) {
        evento.preventDefault();//para evitar que la pagina se recargue
        let form = $("#formularioAgregarContacto");
        form.validate();
        if (form.valid()) {

            guardarContactoSitios();
        }
    });
    //BOTON PARA AGREGAR UN NUEVO TIPO 
    $(document).on('click', '#btnAgregarTipoSitio', function (evento) {
        evento.preventDefault();//para evitar que la pagina se recargue
        let form = $("#formularioAgregarTipo");
        form.validate();
        if (form.valid()) {
            guardarTipoSitio();
        }
    });
    //BOTON DE NUEVO TIPO
    $(document).on('click', '#btn-nuevoTipoSitio', function (evento) {
        $('#modal-agregarTipoSitio').modal('show');
    });
    //BOTON DE GUARDAR
    $(document).on('click', '#btnguardar', function (evento) {
        evento.preventDefault();//para evitar que la pagina se recargue
        let form = $("#miFormularioSitio");
        let coordenadas = $('#coordenadas').val();
        form.validate();
        if (form.valid() && coordenadas) {
            guardarSitio();
        } else {
            if (!coordenadas) {
                errors = { coordenadas: "No ha seleccionada las coordenadas" };
                $("#miFormularioSitio").validate().showErrors(errors);
            }
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'error',
                text: "Complete los campos",
                showConfirmButton: true,
            });
        }
    });

    function inicializarComboTipoSitios() {
        $.ajax({
            url: URL_SERVIDOR + "TipoSitio/show",
            method: "GET"
        }).done(function (response) {
            //REST_Controller::HTTP_OK
            let myData = [];
            if (response.tipo) {
                let lista = response.tipo;
                for (let index = 0; index < lista.length; index++) {
                    myData.push({
                        id: lista[index].id_tipo_sitio,
                        text: lista[index].tipo_sitio
                    });
                }
                $('#ComboTipo').select2(
                    { data: myData }
                );
            } else {
                $('#ComboTipo').select2();
            }
        }).fail(function (response) {
            $('#ComboTipo').select2();

        }).always(function (xhr, opts) {
            $('#loading').hide();
        });

    }
    function inicializarGaleriaSitios() {
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
    function inicializarComboContactoSitios() {
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
            // $('#loading').hide();
        });
    }
    function inicializarFotoContactoSitio() {
        // ESTO ES PARA INICIALIZAR EL ELEMENTO DE SUBIDA DE UNA UNICA FOTO
        $('#fotoContactoSitio').fileinput({
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
    function inicializarValidacionesSitios() {
        $('#miFormularioSitio').validate({
            rules: {
                nombre: {
                    required: true,
                    minlength: 3,
                    maxlength: 40
                },
                coordenadas: {
                    required: true,
                },
                descripcion: {
                    required: true,
                    minlength: 10,
                }, fotos: {
                    required: true
                }, precio_sitio: {
                    required: true,
                    min: 0
                }
            },
            messages: {
                nombre: {
                    required: "Ingrese un nombre",
                    minlength: "Logitud del nombre debe ser mayor a 3",
                    maxlength: "Logitud del nombre no debe exceder a 40",
                },
                coordenadas: {
                    required: "Debe de proporcionar las coordenadas",

                },
                descripcion: {
                    required: "La descripcion es necesaria",
                    minlength: "Debe de tener una longitud minima de 10",
                }, fotos: {
                    required: "Suba por lo menos 1 foto"
                }, precio_sitio: {
                    required: "El precio es necesario",
                    min: "Debe de ser mayor que 0"
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

        $('#formularioAgregarContacto').validate({
            rules: {
                correoContactoSitio: {
                    email: true
                },
                nombreContactoSitio: {
                    required: true,
                    minlength: 3,
                }
            },
            messages: {
                correoContactoSitio: {
                    email: "Ingrese un correo electrónico válido"
                },
                nombreContactoSitio: {
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
    function guardarContactoSitios() {
        $('#loading').show();
        let form = new FormData();

        let foto_perfil = document.getElementById("fotoContactoSitio").files[0];
        form.append('foto', foto_perfil);
        form.append("nombre_contacto", document.getElementById("nombreContactoSitio").value);
        form.append("telefono", document.getElementById("telefonoContactoSitio").value);
        form.append("correo", document.getElementById("correoContactoSitio").value);
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
            // console.log(response);
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
                $("#formularioAgregarContacto").trigger("reset");
                $('#modal-agregarContactoSito').modal('hide');
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
            $("#formularioAgregarContacto").trigger("reset");
            $('#loading').hide();
        });
    }
    function guardarSitio() {
        $('#loading').show();
        let form = new FormData();
        let myCoordnada = document.getElementById("coordenadas").value;
        myCoordnada = myCoordnada.split(' ');

        //ESTO ES PARA L A GALERIA 
        let galeria = document.getElementById("fotos").files;
        for (let i = 0; i < galeria.length; i++) {
            form.append('fotos[]', galeria[i]);
        }
        form.append("nombre_sitio", document.getElementById("nombre").value);
        form.append("longitud", myCoordnada[0]);
        form.append("latitud", myCoordnada[1]);
        form.append("descripcion_sitio", document.getElementById("descripcion").value);
        form.append("id_tipo_sitio", document.getElementById("ComboTipo").value);
        form.append("informacion_contacto", document.getElementById("contacto_servicio").value);
        form.append("precio_sitio", document.getElementById("precio_sitio").value);

        //OCUPAR ESTA CONFIGURACION CUANDO SE ENVIAEN ARCHIVOS(FOTOS-IMAGENES)
        $.ajax({
            url: URL_SERVIDOR + "SitioTuristico/save",
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
                $("#miFormularioSitio").trigger("reset");
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
    function guardarTipoSitio() {
        $('#loading').show();
        let myData = {
            tipo_sitio: document.getElementById("nombreTipo").value
        }
        console.log(myData);
        $.ajax({
            url: URL_SERVIDOR + "TipoSitio/save",
            method: "POST",
            data: myData,
            timeout: 0,

        }).done(function (response) {
            //REST_Controller::HTTP_OK
            let respuestaDecodificada = response;
            //AGREGAMOS RESPUESTA AL COMBO
            let texto = respuestaDecodificada.tipo.tipo_sitio;
            let id = respuestaDecodificada.id;
            let newOption = new Option(texto, id, false, false);
            $('#ComboTipo').append(newOption).trigger('change');
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
                $('#modal-agregarTipoSitio').modal('hide');
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
            $('#modal-agregarTipoSitio').modal('hide');
            $('#loading').hide();
        });
    }


});