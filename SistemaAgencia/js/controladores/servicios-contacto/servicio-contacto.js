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
// ESTO ES PARA INICIALIZAR EL ELEMENTO DE SUBIDA DE UNA UNICA FOTO
$('#foto').fileinput({
    theme: 'fas',
    maxFileSize: 2000,
    showClose: false,
    showCaption: false,
    browseLabel: '',
    removeLabel: '',
    //removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
    removeTitle: 'Cancel or reset changes',
    elErrorContainer: '#kv-avatar-errors-1',
    msgErrorClass: 'alert alert-block alert-danger',
    defaultPreviewContent: '<img src="../../img/avatar.png" alt="Your Avatar">',
    layoutTemplates: {main2: '{preview} {remove} {browse}'},
    allowedFileExtensions: ["jpg", "png", "gif"]
});
//Initialize Select2 Elements
$(function() {
    $('.select2').select2();
});


// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function() {
    //CUANDO SE LE DA EL CLICK AL BOTON DE GUARDAR 
    $("#btnguardar").click(function() {
        let form = new FormData();

        //ESTO ES PARA L A GALERIA 
        let galeria = document.getElementById("fotos").files;
        for (let i = 0; i < galeria.length; i++) {
            form.append('fotos[]', galeria[i]);
        }
        let foto_perfil = document.getElementById("foto").files[0];
        console.log(foto_perfil);
        form.append('foto',foto_perfil);
        form.append("tipo_servicio", document.getElementById("tipo_servicio").value);
        form.append("nombre", document.getElementById("nombre").value);
        form.append("costos_defecto", document.getElementById("costos_defecto").value);
        form.append("descripcion_servicio", document.getElementById("descripcion_servicio").value);
        form.append("informacion_contacto", document.getElementById("informacion_contacto").value);
        let settings = {

            "url": "http://localhost/API-REST-PHP/ServiciosAdicionales/save",
            "method": "POST",
            "timeout": 0,
            "processData": false,
            "mimeType": "multipart/form-data",
            "contentType": false,
            "data": form,
        };

        $.ajax(settings).done(function(response) {
            //console.log(response);
            let respuestaDecodificada = JSON.parse(response);
            console.log(respuestaDecodificada);
        }).fail(function(response) {
            let respuestaDecodificada = JSON.parse(response.responseText);
            console.log(respuestaDecodificada);
        });
    });
});
