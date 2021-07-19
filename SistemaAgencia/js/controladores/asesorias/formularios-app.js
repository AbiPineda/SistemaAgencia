$(document).ready(function() {
    let explorer = $("#kv-explorer");
    let id_regunta;
    let tabla;
    let id;
    //inicializarValidaciones();
    inicializarComboRama();
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
                                                            '</tr>'+                                                         
                                                    '</thead>'+
                                                    '<tbody id="detalle_productos'+response.ramas.ramas[i].num_rama+'"'+
                                                       
                                                    '</tbody>'+

                                                '</table>');
                for (let j = 0, jen = response.formulario.length; j< jen ; j++) {
                    tr = $('#detalle_productos'+response.ramas.ramas[i].num_rama);
                    if (response.formulario[j].num_rama == response.ramas.ramas[i].num_rama ) {
                    
                    if (response.formulario[j].pregunta=='Nombre de las personas') {
                         tr.append('<tr>'+
                                '<td class="textcenter">'+
                                '<label name="nombreVehiculoC" id="nombreVehiculoC"'+
                                 'style="font-weight: normal;"><strong>'+response.formulario[j].pregunta+'</strong></label>'+
                                 '</td>'+
                                '</tr>');   
                          for(let x = 0, xen = response.pesonas.personas.length; x< xen ; x++){
                             tr.append(' <tr>'+
                                '<td class="textcenter">'+
                                '<label name="anioC" id="anioC"'+
                                 'style="font-weight: normal;">'+response.pesonas.personas[x]+'</label>'+
                                 '</td>'+
                                '</tr>');
                                }  
                    }else{
                         tr.append(' <tr>'+
                                '<td class="textcenter">'+
                                '<label name="nombreVehiculoC" id="nombreVehiculoC"'+
                                 'style="font-weight: normal;">'+response.formulario[j].pregunta+'</label>'+
                                 '</td><tr/>'+
                                '<tr><td class="textcenter">'+
                                '<label name="anioC" id="anioC"'+
                                 'style="font-weight: normal;">'+response.formulario[j].respuesta+'</label>'+
                                 '</td>'+
                                '</tr>'); 

                    }  
                        
                        
                    }
                 
                   }
               
            }//primer for

            for (let a = 0, aen = response.ramas.ramas.length; a < aen; a++) {
                seleccion.append('<span class="h3">Preguntas con más respuesta de: '+response.ramas.ramas[a].categoria_rama+'</span>'+
                                                '<table id="factura_detalle">'+
                                                    '<thead>'+
                                                           '<tr>'+
                                                            '<th class="textcenter">Pregunta y respuesta</th>'+
                                                            '</tr>'+                                                         
                                                    '</thead>'+
                                                    '<tbody id="detalle_product'+response.ramas.ramas[a].num_rama+'"'+
                                                       
                                                    '</tbody>'+

                                                '</table>');
                for (let b = 0, ben = response.formulario.length; b< ben ; b++) {
                    tr2 = $('#detalle_product'+response.ramas.ramas[a].num_rama);
                    if (response.formulario[b].num_rama == response.ramas.ramas[a].num_rama ) {
                        if (response.formulario[b].pregunta=='Nombre de las personas') {
                             tr2.append('<tr>'+
                                '<td class="textcenter">'+
                                '<label name="nombreVehiculoC" id="nombreVehiculoC"'+
                                 'style="font-weight: normal;"><strong>'+response.formulario[b].pregunta+'</strong></label>'+
                                 '</td>'+
                                '</tr>');   
                          for(let x = 0, xen = response.pesonas.personas.length; x< xen ; x++){
                             tr2.append(' <tr>'+
                                '<td class="textcenter">'+
                                '<label name="anioC" id="anioC"'+
                                 'style="font-weight: normal;">'+response.pesonas.personas[x]+'</label>'+
                                 '</td>'+
                                '</tr>');
                                }   
                        }//fin de if personas

                        if(response.formulario[b].mas_respuestas=='Si'){
                             let respu= JSON.parse(response.formulario[b].respuesta);
                              tr2.append('<tr>'+
                                '<td class="textcenter">'+
                                '<label name="nombreVehiculoC" id="nombreVehiculoC"'+
                                 'style="font-weight: normal;"><strong>'+response.formulario[b].pregunta+'</strong></label>'+
                                 '</td>'+
                                '</tr>');  
                             for(let v = 0, ven = respu.length; v< ven ; v++){
                                tr2.append(' <tr>'+
                                '<td class="textcenter">'+
                                '<label name="anioC" id="anioC"'+
                                 'style="font-weight: normal;">'+respu[v]+'</label>'+
                                 '</td>'+
                                '</tr>');
                             }

                        }//fin mas respuestas
                        
                    }
                 
                   }
               
            }
        }).fail(function(response) {

        }).always(function(xhr, opts) {
            $('#modal-cotizacion').modal('show');

        });
    });
//FIN DE MOSTRAMOS EL REPORTE


    //BOTON EDITAR LA FOTO
    $(document).on('click', '.btn-group .btn-warning', function() {
        $('#modal-imagenesEncomienda').modal('show');
        let identificador = $(this).attr("name");
        let nombreTabla = 'cita';
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

    //BOTON DE EDITAR
    $(document).on('click', '.btn-group .btn-primary', function() {
        $('#loadingActualizar').hide();
        id = $(this).attr("name");
        fila = $(this).closest("tr");
        usuario = fila.find('td:eq(0)').text();
        document.getElementById("id_cita").value = id;
        document.getElementById("usuario").value = usuario;


        $.ajax({
            type: "GET",
            url: URL_SERVIDOR + "FormularioMigratorio/formulariosLlenos/" + id,
            async: false,
            dataType: "json",
            success: function(data) {
                var cont=0;
                //vacias los elementos
                for (let i = 0, ien = data.formulario.length; i < ien; i++) {
                    // alert('paso');
                    if (data.formulario[i].opcion == 'cerrada') {
                        $('#' + data.formulario[i].num_rama).empty();
                    } else {
                        if (data.formulario[i].mas_respuestas == 'Si') {
                            // alert('entre');
                            $('#' + data.formulario[i].num_rama).empty();


                        } else {
                            $('#' + data.formulario[i].num_rama).empty();
                        }
                    }
                }
                //*******************

                for (let i = 0, ien = data.formulario.length; i < ien; i++) {
                    // alert('paso');
                    if (data.formulario[i].opcion == 'cerrada') {
                        var $select = $('#' + data.formulario[i].num_rama);
                        $select.append('<input type="hidden" name="id_pregunta[]" value="' + data.formulario[i].id_pregunta + '" class="form-control">' +
                            '<label style="width: 400px;margin-left: 98px; margin-top:4px;">¿' + data.formulario[i].pregunta + '?</label>' +
                            '<select class="form-control respuesta" name="respuesta[]" id="combo' + data.formulario[i].id_pregunta + '" style="width: 400px;margin-left: 98px; margin-top:2px;">' +
                            '<option disabled>¿' + data.formulario[i].pregunta + '?</option>' +
                            '</select>&nbsp&nbsp');

                        //COMO YA CREE EL COMBO SELECCIONO EL ID Y CARGO EL COMBO
                        var $combo = $('#combo' + data.formulario[i].id_pregunta);
                        $combo.select();

                        //alert(data.preguntas[i].id_pregunta);
                        for (let j = 0, jen = data.opciones.length; j < jen; j++) {
                            //SOLO VA HA LLENAR EL COMBO CUANDO EL ID DE LA PREGUNTA SEA = AL ID 
                            //DE LA PREGUNTA DE LAS OPCIONES RESPUESTAS
                            if (data.formulario[i].id_pregunta == data.opciones[j].id_pregunta) {

                                $combo.append('<option value=' + data.opciones[j].opciones_respuestas + '>' + data.opciones[j].opciones_respuestas +
                                    '</option>');
                                document.getElementById("combo" + data.formulario[i].id_pregunta).value = data.formulario[i].respuesta;

                            }
                        }


                    } else {
                        if (data.formulario[i].mas_respuestas == 'Si') {
                            // alert('entre');
                            $select = $('#' + data.formulario[i].num_rama);
                            let resp= JSON.parse(data.formulario[i].respuesta);
                            console.log(resp);
                             $select.append('<label style="width: 400px;margin-left: 98px; margin-top:4px;">¿' + data.formulario[i].pregunta + '?</label>' +
                                '<select name="id_pregunta_mas'+cont+'" style="height: 0px;width: 0px;visibility: hidden;">' +
                                '<option selected>' + data.formulario[i].id_pregunta + '</option>' +
                                '</select>');
                            for (let a = 0, aen = resp.length; a < aen; a++) {
                                $select.append( '<div class="form-group multiple-form-group input-group">' +
                                '<input type="text" name="respuesta_mas'+cont+'[]" value="' +resp[a] + '" id="asistiran" class="form-control" placeholder="¿' +resp[a]+ '?"' +
                                'style="width: 368px;margin-left: 98px; margin-top:6px;">' +
                                '<span class="input-group-btn">' +
                                '<button type="button" class="btn btn-success btn-add" id="btn-asistiran" style="margin-top:2px;margin-right:55px;">+</button>' +
                                '</span>' +
                                '</div>&nbsp&nbsp');
                            }
                            cont++;
                        } else {

                            if (data.formulario[i].pregunta=='Nombre de las personas') {
                                 var $select = $('#' + data.formulario[i].num_rama);
                                  $select.append('<label style="width: 400px;margin-left: 98px; margin-top:4px;">¿' + data.formulario[i].pregunta + '?</label>'+
                                                '<input type="hidden" name="id_pre[]" value="' +data.formulario[i].id_pregunta+ '" class="form-control">'); 
                                for (let k = 0, ken = data.pesonas.personas.length; k < ken; k++) {
                                     $select.append( '<div class="form-group multiple-form-group input-group">' +
                                '<input type="text" name="respuest[]" value="' + data.pesonas.personas[k]+ '" id="asistiran" class="form-control" placeholder="¿' + data.pesonas.personas[k]+ '?"' +
                                'style="width: 368px;margin-left: 98px; margin-top:6px;" disabled>' +
                                '<span class="input-group-btn">' +
                                '<button type="button" class="btn btn-success btn-add" id="btn-asistiran" style="margin-top:2px;margin-right:55px;" disabled>+</button>' +
                                '</span>' +
                                '</div>&nbsp&nbsp');
                                 }//fin for
                            }else{
                                if(data.formulario[i].pregunta=='Cuantas personas viajan con usted'){
                                var $select = $('#' + data.formulario[i].num_rama);
                                $select.append('<label style="width: 400px;margin-left: 98px; margin-top:4px;">¿' + data.formulario[i].pregunta + '?</label>' +
                                '<input type="hidden" name="id_preg" value="' + data.formulario[i].id_pregunta + '" class="form-control">' +
                                '<input type="text" name="respuest[]" value="' + data.formulario[i].respuesta + '" class="form-control"' +
                                'placeholder="¿' + data.formulario[i].pregunta + '?"' +
                                'style="width: 400px;margin-left: 98px; margin-top:6px;" disabled>&nbsp&nbsp'); 

                                }else{
                                    var $select = $('#' + data.formulario[i].num_rama);
                                $select.append('<label style="width: 400px;margin-left: 98px; margin-top:4px;">¿' + data.formulario[i].pregunta + '?</label>' +
                                '<input type="hidden" name="id_pregunta1[]" value="' + data.formulario[i].id_pregunta + '" class="form-control">' +
                                '<input type="text" name="respuesta1[]" value="' + data.formulario[i].respuesta + '" class="form-control"' +
                                'placeholder="¿' + data.formulario[i].pregunta + '?"' +
                                'style="width: 400px;margin-left: 98px; margin-top:6px;">&nbsp&nbsp'); 
                                }

                            }//fin else
                            
                        }
                    }
                }

            },
            error: function(err) {
                const Toast = Swal.mixin();
                Toast.fire({
                    title: 'Error',
                    icon: 'error',
                    text: 'No hay preguntas registradas..!',
                    showConfirmButton: true,
                });
            }
        });

        $('#modal-editar').modal('show');

    });

    //BOTON PARA ELIMINAR
    $(document).on('click', '.btn-group .btn-danger', function(evento) {
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
    $(document).on('click', '#btnActualizar', function(evento) {
        evento.preventDefault(); //para evitar que la pagina se recargue
        // let form = $("#editar");
        // form.validate();
        //if (form.valid()) {
        actualizar();
        //}
    });

    //CUANDO EL MODAL SE CIERRA
    $('#modal-imagenes').on('hidden.bs.modal', function(e) {
        console.log("cerrando modal")
        explorer.fileinput('destroy');
    })

    function inicializarTabla() {
        tabla = $("#formularios").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "ajax": {
                "url": URL_SERVIDOR + "Cita/Pasaportes",
                "method": "GET",
                "dataSrc": function(json) {
                    //console.log(json.preguntas);

                    if (json.citas) {
                        for (let i = 0, ien = json.citas.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.citas[i].id_cita + '" class="btn btn-primary" data-toggle="modal"';
                            html += '            data-target="#modal-editar">';
                            html += '            <i class="fas fa-edit" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.citas[i].id_cita + '" class="btn btn-secondary" data-toggle="modal"';
                            html += '            data-target="#modal-cotizacion">';
                            html += '            <i class="fas fa-eye" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.citas[i].id_cita + '" class="btn btn-warning" data-toggle="modal"';
                            html += '            data-target="#modal-galeria">';
                            html += '            <i class="fas fa-image" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.citas[i]["botones"] = html;

                        }
                        $('#loading').hide();
                        return json.citas;
                    } else {
                        $('#loading').hide();
                        return [];
                    }
                }
            },
            columns: [
                { data: "nombre" },
                { data: "fecha" },
                { data: "hora" },
                { data: "botones" },
            ]
        });

    }

    function inicializarValidaciones() {
        $('#editar').validate({
            rules: {
                id_rama: {
                    required: true,
                    number: true
                },
                pregunta: {
                    required: true,
                    minlength: 10,
                    maxlength: 40
                },
                mas_respuestas: {
                    required: true,
                    minlength: 2,
                }
            },
            messages: {
                id_rama: {
                    required: "Seleccione la rama de la pregunta",
                },
                pregunta: {
                    required: "Ingrese la pregunta",
                    minlength: "Debe de tener una longitud minima de 10",
                    maxlength: "Debe de tener una longitud maxima de 40"
                },
                mas_respuestas: {
                    required: "Seleccione si va a contener mas respuestas",

                }

            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');

            }
        });

    }

    function actualizar() {
        $('#loadingActualizar').show();

        ///OCUPAR ESTA CONFIGURACION CUANDO SOLO SEA TEXTO
        $.ajax({
            url: URL_SERVIDOR + "FormularioMigratorio/updateFormulario",
            method: 'POST',
            data: $("#editar-form").serialize()
        }).done(function(response) {
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
        }).fail(function(response) {
            console.log(response);

            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Error',
                icon: 'error',
                text: response.mensaje,
                showConfirmButton: true,
            });

        }).always(function(xhr, opts) {
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
        }).done(function(response) {
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
        }).fail(function(response) {

            console.log(response);
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Error',
                icon: 'error',
                text: "ERROR EN EL ENVIO DE INFORMACION",
                showConfirmButton: true,
            });

        }).always(function(xhr, opts) {
            $('#loadingActualizar').hide();
        });
    }

    function inicializarComboRama() {
        //COMBO DE CONTACTOS
        $.ajax({
            url: URL_SERVIDOR + "Asesoria/ramita",
            method: "GET"
        }).done(function(response) {
            //REST_Controller::HTTP_OK
            var $select = $('#id_rama');
            $.each(response.ramas, function(i, name) {
                $select.append('<option value=' + name.id_rama + '>' + name.categoria_rama +
                    '</option>');
            });
        }).fail(function(response) {
            var $select = $('#id_rama');
            $select.append('<option disabled="" selected>Seleccione</option>');

        }).always(function(xhr, opts) {
            $('#loading').hide();
        });
    }
});