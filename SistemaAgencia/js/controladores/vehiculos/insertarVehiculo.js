// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function() {
    inicializarGaleria();
    inicializarGaleriaDocumentos();
    inicializarFoto();
    inicializarFotoDocumentos();

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

        let galeriaDocumentos = document.getElementById("fotosDocumentos").files;
        for (let i = 0; i < galeriaDocumentos.length; i++) {
            form.append('fotosDocumentos[]', galeriaDocumentos[i]);
        }

        let comboOpciones = $("#opc_avanzadas").select2('data');
        let arregloOpciones = [];

        for (let index = 0; index < comboOpciones.length; index++) {
            arregloOpciones.push(comboOpciones[index].text);
        }
        console.log(arregloOpciones);

        form.append("id_rentaCarFK", document.getElementById("id_renta").value);
        form.append("idmodelo", document.getElementById("id_modelo").value);
        form.append("id_transmicionFK", document.getElementById("id_transmision").value);
        form.append("idcategoria", document.getElementById("id_categoria").value);
        form.append("placa", document.getElementById("placa").value);
        form.append("anio", document.getElementById("anio").value);
        form.append("color", document.getElementById("colorAuto").value);
        form.append("puertas", document.getElementById("puertas").value);
        form.append("pasajeros", document.getElementById("pasajero").value);
        form.append("precio_diario", document.getElementById("precio").value);
        form.append("descripcion", document.getElementById("descripcion").value);
        form.append("detalles", document.getElementById("detalle").value);
        form.append("opc_avanzadas", document.getElementById("opc_avanzadas").value);
        form.append("kilometraje", document.getElementById("kilometraje").value);
        form.append("tipoCombustible", document.getElementById("comboCombustible").value);

        //OCUPAR ESTA CONFIGURACION CUANDO SE ENVIAEN ARCHIVOS(FOTOS-IMAGENES)
        $.ajax({
            url: URL_SERVIDOR + "vehiculo/vehiculo",
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

    function inicializarFotoDocumentos() {
        // ESTO ES PARA INICIALIZAR EL ELEMENTO DE SUBIDA DE UNA UNICA FOTO
        $('#fotosDocumentos').fileinput({
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
            allowedFileExtensions: ["jpg", "png", "gif", "pdf"]
        });
        
    }

});