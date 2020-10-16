// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function () {
    $('#loading').hide();
    inicializarGaleria();
    inicializarFoto();
    inicializarCombo();
    inicializarValidaciones();

    //BOTON DE GUARDAR
    $(document).on('click', '#btnguardar', function (evento) {
        evento.preventDefault();//para evitar que la pagina se recargue
        let form = $("#miFormulario");
        form.validate();
        if (form.valid()) {
            guardar();
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
        let foto_perfil = document.getElementById("foto").files[0];
        form.append('foto', foto_perfil);
        form.append("tipo_servicio", document.getElementById("tipo_servicio").value);
        form.append("nombre", document.getElementById("nombre").value);
        form.append("costos_defecto", document.getElementById("costos_defecto").value);
        form.append("descripcion_servicio", document.getElementById("descripcion_servicio").value);
        form.append("informacion_contacto", document.getElementById("informacion_contacto").value);
        //OCUPAR ESTA CONFIGURACION CUANDO SE ENVIAEN ARCHIVOS(FOTOS-IMAGENES)
        let settings = {

            "url": "http://localhost/API-REST-PHP/ServiciosAdicionales/save",
            "method": "POST",
            "timeout": 0,
            "processData": false,
            "mimeType": "multipart/form-data",
            "contentType": false,
            "data": form,
        };
        $.ajax(settings).done(function (response) {
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
                $("#miFormulario").trigger("reset");
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
            maxFileSize: 1000,
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
            maxFileSize: 1000,
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
    function inicializarCombo() {
        //Initialize Select2 Elements
        $(function () {
            $('.select2').select2();
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
});