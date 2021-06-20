$(document).ready(function () {
    let explorer = $("#kv-explorer");
    let id_pregunta;
    let tabla;

    //inicializarValidaciones();
   // inicializarCombo()
   // inicializarComboRama();
    inicializarTabla();

     //BOTON MOSTRAR EL REPORTE
    $(document).on('click', '.btn-group .btn-secondary', function() {

        id = $(this).attr("name");
        $('#loadingActualizar').show();
        $.ajax({
            url: URL_SERVIDOR + "FormularioMigratorio/formulariosLlenos/" + id,
            method: "GET"
        }).done(function(response) {
            //MANDALOS LOS VALORES AL MODAL
             $('#crear_tablas').empty();
            seleccion = $('#crear_tablas');
             for (let i = 0, ien = response.cliente.length; i < ien; i++) {

                $('#nombreC').text(response.cliente[i].nombre);
                $('#emailC').text(response.cliente[i].correo);
                $('#telefonoC').text(response.cliente[i].celular);
                $('#dui-cliente').text(response.cliente[i].dui);
            }
            for (let i = 0, ien = response.ramas.ramas.length; i < ien; i++) {
                seleccion.append('<span class="h3">'+response.ramas.ramas[i].categoria_rama+'</span>'+
                                                '<table id="factura_detalle">'+
                                                    '<thead>'+
                                                           '<tr>'+
                                                            '<th class="textcenter">Pregunta</th>'+
                                                            '<th class="textcenter">Respuesta</th>'+
                                                            '</tr>'+                                                         
                                                    '</thead>'+
                                                    '<tbody id="detalle_productos'+response.ramas.ramas[i].num_rama+'"'+
                                                       
                                                    '</tbody>'+

                                                '</table>');
                for (let j = 0, jen = response.formulario.length; j< jen ; j++) {
                    tr = $('#detalle_productos'+response.ramas.ramas[i].num_rama);
                    if (response.formulario[j].num_rama == response.ramas.ramas[i].num_rama ) {
                        tr.append(' <tr>'+
                                '<td class="textcenter">'+
                                '<label name="nombreVehiculoC" id="nombreVehiculoC"'+
                                 'style="font-weight: normal;">'+response.formulario[j].pregunta+'</label>'+
                                 '</td>'+
                                '<td class="textcenter">'+
                                '<label name="anioC" id="anioC"'+
                                 'style="font-weight: normal;">'+response.formulario[j].respuesta+'</label>'+
                                 '</td>'+
                                '</tr>');
                    }
                 
                   }
               
            }
        }).fail(function(response) {

        }).always(function(xhr, opts) {
            $('#modal-cotizacion').modal('show');

        });
    });
//FIN DE MOSTRAMOS EL REPORTE
  
    //BOTON DE EDITAR
$(document).on('click', '.btn-group .btn-primary', function () {
        $('#loadingActualizar').hide();
        id_encomienda = $(this).attr("name");

    window.location = `${URL_SISTEMA}vistas/encomiendas/modificarEncomienda.php?en=`+id_encomienda;
                    
    
});
   //BOTON EDITAR LA FOTO
   $(document).on('click', '.btn-group .btn-warning', function() {
    $('#modal-imagenesEncomienda').modal('show');
    let identificador = $(this).attr("name");
    let nombreTabla = 'encomienda';
    let informacionAdicional = { tipo: nombreTabla, identificador: identificador };
    let urlFotos = [];
    let infoFotos = [];

    $.ajax({
        url: URL_SERVIDOR + "Imagen/show?tipo=" + nombreTabla + "&identificador=" + identificador,
        method: "GET",

    }).done(function(response) {
        //REST_Controller::HTTP_OK
        console.log(URL_SERVIDOR + "Imagen/show?tipo=" + nombreTabla + "&identificador=" + identificador);
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
        idpregunta = $(this).attr("name");
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
        evento.preventDefault(); //para evitar que la pagina se recargue
        let form = $("#register-form");
        form.validate();
          if (form.valid()) {
            actualizar();
        }
    });
  

    function inicializarTabla() {
        tabla = $("#tabla_encomienda").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "ajax": {
                "url": URL_SERVIDOR + "Encomienda/encomienda",
                "method": "GET",
                "dataSrc": function (json) {
                    //console.log(json.preguntas);

                    if (json.Encomiendas) {
                        for (let i = 0, ien = json.Encomiendas.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.Encomiendas[i].id_encomienda+'" class="btn btn-primary" data-toggle="modal"';
                            html += '         data-target="#modal-editar">';
                            html += '            <i class="fas fa-edit" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.Encomiendas[i].id_encomienda + '" class="btn btn-secondary" data-toggle="modal"';
                            html += '            data-target="#reporte_encomienda">';
                            html += '            <i class="fas fa-eye" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.Encomiendas[i].id_encomienda + '" class="btn btn-warning" data-toggle="modal"';
                            html += '            data-target="#modal-galeria">';
                            html += '            <i class="fas fa-image" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.Encomiendas[i].id_encomienda+ '" class="btn btn-danger" data-toggle="modal"';
                            html += '            data-target="#modal-eliminar">';
                            html += '            <i class="fas fa-trash" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.Encomiendas[i]["botones"] = html;

                        }
                        $('#loading').hide();
                        return json.Encomiendas;
                    } else {
                        $('#loading').hide();
                        return [];
                    }
                }
            },
            columns: [
                { data: "nombre" },
                { data: "ciudad_origen" },
                { data: "codigo_postal_origen" },
                { data: "fecha" },
                { data: "botones" },
            ]
        });

    }
    function inicializarValidaciones() {
        $('#register-form').validate({

            rules: {
                id_rama:{
                    required: true
                },
                pregunta: {
                    minlength: 10
                },
                "opcion_respuesta[]": {
                   required: true
                }
            },
            messages: {
                id_rama:{
                    required:"Seleccione una rama"
                },
                 pregunta:{
                    minlength: "Lapregunta debe de tener una longitud minima de 10"
                },
                "opcion_respuesta[]": {
                    required: "Seleccione las opciones de respuestas, puede agregar más, pulse el botón agregar más"
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
        $.ajax({
            url: URL_SERVIDOR + "Asesoria/updateCerrada",
            method: "POST",
            timeout: 0,
            data:$('#register-form').serialize()
        }).done(function (response) {
            //REST_Controller::HTTP_OK
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: response.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                $('#modal-editar').modal('hide');
                tabla.ajax.reload(null, false);
            });
        }).fail(function (response) {
            console.log(response);

            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Error',
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
            "id_pregunta": idpregunta
        };
        $.ajax({
            url: URL_SERVIDOR + "Asesoria/deletePregunta",
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

   