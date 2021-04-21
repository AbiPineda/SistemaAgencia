// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function() {
    inicializarGaleria();

    //BOTON DE GUARDAR
    $(document).on('click', '#btnguardar', function(evento) {
        evento.preventDefault(); //para evitar que la pagina se recargue
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

        form.append("idaerolineaFK", document.getElementById("idaerolinea").value);
        form.append("idclaseFK", document.getElementById("idclase").value);
        form.append("nombre_promocion", document.getElementById("nombrePromocion").value);
        form.append("pais_promocion", document.getElementById("nombrePais").value);
        form.append("lugarSalida_promocion", document.getElementById("salida").value);
        form.append("precio_promocion", document.getElementById("precioPromocion").value);
        form.append("fechaDisponible_promocion", document.getElementById("fechaDisponible").value);
        form.append("descripcion_promocion", document.getElementById("desPromocion").value);


        //OCUPAR ESTA CONFIGURACION CUANDO SE ENVIAEN ARCHIVOS(FOTOS-IMAGENES)
        $.ajax({
            url: URL_SERVIDOR + "promocionVuelo/promocion",
            method: "POST",
            mimeType: "multipart/form-data",
            data: form,
            timeout: 0,
            processData: false,
            contentType: false,
        }).done(function(response) {
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
        }).fail(function(response) {
            //SI HUBO UN ERROR EN LA RESPUETA REST_Controller::HTTP_BAD_REQUEST
            console.log(response);

            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: "ERROR EN EL ENVIO DE INFORMACIÓN",
                showConfirmButton: true,
            });

        }).always(function(xhr, opts) {
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
            maxFilesNum: 1,
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            required: true,
            uploadAsync: false,
            showClose: false,
        });
    }

});