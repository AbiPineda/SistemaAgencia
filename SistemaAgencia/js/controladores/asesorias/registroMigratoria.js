$(document).ready(function () {

    validaciones();
    cargarCitas();
    llamarRamas();
    llamarPreguntita();

    let addFormGroup = function (event) {
        event.preventDefault();

        let $formGroup = $(this).closest('.form-group');
        let $multipleFormGroup = $formGroup.closest('.multiple-form-group');
        let $formGroupClone = $formGroup.clone();

        $(this)
            .toggleClass('btn-success btn-add btn-danger btn-remove')
            .html('–');

        $formGroupClone.find('input').val('');
        $formGroupClone.find('.concept').text('Phone');
        $formGroupClone.insertAfter($formGroup);

        let $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
        if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
            $lastFormGroupLast.find('.btn-add').attr('disabled', true);
        }
    };
    let removeFormGroup = function (event) {
        event.preventDefault();

        let $formGroup = $(this).closest('.form-group');
        let $multipleFormGroup = $formGroup.closest('.multiple-form-group');

        let $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
        if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
            $lastFormGroupLast.find('.btn-add').attr('disabled', false);
        }

        $formGroup.remove();
    };
    let selectFormGroup = function (event) {
        event.preventDefault();

        let $selectGroup = $(this).closest('.input-group-select');
        let param = $(this).attr("href").replace("#", "");
        let concept = $(this).text();

        $selectGroup.find('.concept').text(concept);
        $selectGroup.find('.input-group-select-val').val(param);

    }
    let countFormGroup = function ($form) {
        return $form.find('.form-group').length;
    };
    // BOTON DE AGREGAR
    $(document).on('click', '.btn-add', addFormGroup);
    // BOTON DE ELIMINAR
    $(document).on('click', '.btn-remove', removeFormGroup);
    // 
    $(document).on('click', '.dropdown-menu a', selectFormGroup);
    //BOTON MOSTRAR EL REPORTE
    $(document).on('click', '#btnRepote', function () {

        $.ajax({
            url: URL_SERVIDOR + "Asesoria/reporteMigratorio",
            method: "GET"
        }).done(function (response) {
            //MANDALOS LOS VALORES AL MODAL
            $('#crear_tablas').empty();
            seleccion = $('#crear_tablas');
            for (let i = 0, ien = response.ramas.ramas.length; i < ien; i++) {
                seleccion.append('<span class="h3">' + response.ramas.ramas[i].categoria_rama + '</span>' +
                    '<table id="factura_detalle">' +
                    '<thead>' +
                    '<tr>' +
                    '<th class="textcenter">Pregunta</th>' +
                    '<th class="textcenter">Respuesta</th>' +
                    '</tr>' +
                    '</thead>' +
                    '<tbody id="detalle_productos' + response.ramas.ramas[i].num_rama + '"' +

                    '</tbody>' +

                    '</table>');
                for (let j = 0, jen = response.preguntas.length; j < jen; j++) {

                    tr = $('#detalle_productos' + response.ramas.ramas[i].num_rama);
                    if (response.preguntas[j].num_rama == response.ramas.ramas[i].num_rama) {
                        tr.append(' <tr>' +
                            '<td class="textcenter">' +
                            '<label name="nombreVehiculoC" id="nombreVehiculoC"' +
                            'style="font-weight: normal;">' + response.preguntas[j].pregunta + '</label>' +
                            '</td>' +
                            '<td class="textcenter">' +
                            '<label name="anioC" id="anioC"' +
                            'style="font-weight: normal;"></label>' +
                            '</td>' +
                            '</tr>');
                    }

                }

            }

        }).fail(function (response) {

        }).always(function (xhr, opts) {
            $('#modal-cotizacion').modal('show');

        });
    });
    //FIN DE MOSTRAMOS EL REPORTE
    $(document).on('click', '#btnFormulario', function (evento) {
        evento.preventDefault(); //para evitar que la pagina se recargue
        let form = $("#migratorio-form");
        form.validate();
        if (form.valid()) {
            insertarFormulario();
        } else {
            toastr.error('Verifique los campos de selección');
        }
    });
    function cargarCitas() {
        $.ajax({
            type: "GET",
            url: URL_SERVIDOR + "Cita/formularioMigratorioCitas",
            dataType: "json",
            success: function (data) {

                let $select = $('#citas_dias');
                $select.append('<option disabled="" selected>Seleccione la cita</option>');
                $.each(data.citas, function (i, name) {
                    $select.append('<option value=' + name.id_cita + '>' + name.nombre +
                        '</option>');
                });
            },
            error: function (err) {
                let $select = $('#combo_rama');
                $select.append('<option disabled value="" selected>Seleccione la cita</option>');
                /* const Toast = Swal.mixin();
              Toast.fire({
                  title: 'Error'
                  icon: 'error',
                  text:'No hay Ramas para mostrar',
                  showConfirmButton: true,
              });*/
            }
        });
    }
    function llamarRamas() {
        $.ajax({
            type: "GET",
            url: URL_SERVIDOR + "Asesoria/ramita",
            dataType: "json",
            success: function (data) {

                let $select = $('#custom-tabs-one-tab');
                let $nuevo = $('#custom-tabs-one-tabContent');
                $.each(data.ramas, function (i, name) {
                    if (name.num_rama == 1) {
                        // alert('rama 1')
                        $select.append(' <li class="nav-item"><a class="nav-link active"' +
                            'id="custom-tabs-one-home-' + name.num_rama + '" data-toggle="pill"' +
                            'href="#custom-tabs-one-' + name.num_rama + '" role="tab" aria-controls="custom-tabs-one-home"' +
                            'aria-selected="true">' + name.categoria_rama + '</a></li>');
                        $nuevo.append('<div class="tab-pane fade show active" id="custom-tabs-one-' + name.num_rama + '" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">' +
                            '<div class="form-group" id="' + name.num_rama + '"></div></div>');

                    } else {
                        //alert(name.num_rama+"rama");
                        $select.append('<li class="nav-item">' +
                            '<a class="nav-link" id="custom-tabs-one-' + name.num_rama + '-tab" data-toggle="pill"' +
                            'href="#custom-tabs-one-' + name.num_rama + '" role="tab" aria-controls="custom-tabs-one-' + name.num_rama + '"' +
                            'aria-selected="false">' + name.categoria_rama + '</a></li>');

                        $nuevo.append('<div class="tab-pane fade" id="custom-tabs-one-' + name.num_rama + '"' +
                            'role="tabpanel" aria-labelledby="custom-tabs-one-' + name.num_rama + '-tab">' +
                            '<div class="form-group" id="' + name.num_rama + '"> </div></div>')
                    }

                });
            },
            error: function (err) {
                const Toast = Swal.mixin();
                Toast.fire({
                    title: 'Error',
                    icon: 'error',
                    text: 'No hay Ramas para mostrar',
                    showConfirmButton: true,
                });
            }
        });
    }
    function insertarFormulario() {
        $.ajax({
            url: URL_SERVIDOR + "FormularioMigratorio/formulario",
            method: 'POST',
            data: $("#migratorio-form").serialize()

        }).done(function (response) {
            document.getElementById("migratorio-form").reset();
            //para no recargar la pagina
            $('#citas_dias').empty();
            $('#script').html('<script type="text/javascript" src="../../js/controladores/asesorias/combo_formulario.js">');


            //$("#recargar").load(" #recargar");//recargar solo un div y no toda la pagina
            //REST_Controller::HTTP_OK
            //let respuestaDecodificada = JSON.parse(response);
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: response.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                //TODO BIEN Y RECARGAMOS LA PAGINA 
                //location.reload(); NO QUIERO QUE RECARGUE ME ACTUALIZA SOLA
            });
        }).fail(function (response) {
            //SI HUBO UN ERROR EN LA RESPUETA REST_Controller::HTTP_BAD_REQUEST
            /* let respuestaDecodificada = JSON.parse(response.responseText);
             let listaErrores = "";
 
             if (respuestaDecodificada.errores) {
                 ///ARREGLO DE ERRORES 
                 let erroresEnvioDatos = respuestaDecodificada.errores;
                 for (mensaje in erroresEnvioDatos) {
                     listaErrores += erroresEnvioDatos[mensaje] + "\n";
                      //toastr.error(erroresEnvioDatos[mensaje]);
                 };
             } else {
                 listaErrores = respuestaDecodificada.mensaje
             }
             const Toast = Swal.mixin();
             Toast.fire({
                 title: 'Error',
                 icon: 'error',
                 text: listaErrores,
                 showConfirmButton: true,
             });*/

        })
    }
    function validaciones() {


        $(document).ready(function () {
            $.validator.setDefaults({
                ignore: [],
            });

            $('#migratorio-form').validate({
                rules: {

                },
                messages: {

                    required: "Seleccione"
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    //element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');

                }
            });

            // must be called after validate()
            $('select.respuesta').each(function () {
                $(this).rules('add', {
                    required: true
                });
            });

        });
        /*$.validator.setDefaults({
            ignore:[],
        });
         $('#migratorio-form').validate({
                rules: {
                   
                },
                messages: {
                 
                        required: "Seleccione"
                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    //element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
    
                }
            });*/
    }
    function llamarPreguntita() {
        $.ajax({
            type: "GET",
            url: URL_SERVIDOR + "Asesoria/preguntita",
            dataType: "json",
            success: function (data) {

                var contador = 0;
                let cont = 0;

                for (let i = 0, ien = data.preguntas.length; i < ien; i++) {
                    // alert('paso');
                    if (data.preguntas[i].opcion == 'cerrada') {
                        var $select = $('#' + data.preguntas[i].num_rama);
                        $select.append('<input type="hidden" name="id_pregunta[' + contador + ']" value="' + data.preguntas[i].id_pregunta + '" class="form-control">' +
                            '<select class="form-control respuesta" name="respuesta[' + contador + ']" id="combo' + data.preguntas[i].id_pregunta + '" style="width:590px;margin-top: 20px;">' +
                            '<option value="">¿' + data.preguntas[i].pregunta + '?</option>' +
                            '</select>&nbsp&nbsp');
                        //COMO YA CREE EL COMBO SELECCIONO EL ID Y CARGO EL COMBO
                        var $combo = $('#combo' + data.preguntas[i].id_pregunta);
                        $combo.select();
                        //alert(data.preguntas[i].id_pregunta);
                        for (let j = 0, jen = data.opciones.length; j < jen; j++) {
                            //SOLO VA HA LLENAR EL COMBO CUANDO EL ID DE LA PREGUNTA SEA = AL ID 
                            //DE LA PREGUNTA DE LAS OPCIONES RESPUESTAS
                            if (data.preguntas[i].id_pregunta == data.opciones[j].id_pregunta) {
                                $combo.append('<option value=' + data.opciones[j].opciones_respuestas + '>' + data.opciones[j].opciones_respuestas +
                                    '</option>');
                            }
                        }

                        contador++;
                    } else {

                        if (data.preguntas[i].mas_respuestas == 'Si') {
                            // alert('entre');

                            $select = $('#' + data.preguntas[i].num_rama);
                            $select.append('<select name="id_pregunta_mas' + cont + '" style="height: 0px;width: 0px;visibility: hidden;">' +
                                '<option selected>' + data.preguntas[i].id_pregunta + '</option>' +
                                '</select>' +
                                '<div class="form-group multiple-form-group input-group">' +
                                '<input type="text" name="respuesta_mas' + cont + '[]" value="" id="asistiran" class="form-control" placeholder="¿' + data.preguntas[i].pregunta + '?" style="width: 550px; margin-top: 20px">' +
                                '<span class="input-group-btn">' +
                                '<button type="button" class="btn btn-success btn-add" id="btn-asistiran" style="margin-top:19px;">+</button>' +
                                '</span>' +
                                '</div>&nbsp&nbsp');
                            cont++;
                        } else {
                            var $select = $('#' + data.preguntas[i].num_rama);
                            $select.append('<input type="hidden" name="id_pregunta1[]" value="' + data.preguntas[i].id_pregunta + '" class="form-control">' +
                                '<input type="text" name="respuesta1[]" value="" class="form-control"' +
                                'placeholder="¿' + data.preguntas[i].pregunta + '?" style="width:590px; margin-top: 20px">&nbsp&nbsp');
                            // $select.append(crearInputText());

                        }
                    }


                }

            },
            error: function (err) {
                const Toast = Swal.mixin();
                Toast.fire({
                    title: 'Error',
                    icon: 'error',
                    text: 'No hay preguntas registradas..!',
                    showConfirmButton: true,
                });
            }
        });
    }
    function crearInputText(data) {
        let inputText = document.createElement("INPUT");
        inputText.setAttribute("type", "text");
        inputText.setAttribute("placeholder", `¿${data.pregunta}?`);
        inputText.setAttribute("name", "this-is[]");
        inputText.style.width = '590px';
        inputText.style.marginTop = '20px';
        inputText.classList.add('form-control');
        





        // var $select = $('#' + data.preguntas[i].num_rama);
        // $select.append('<input type="hidden" name="id_pregunta1[]" value="' + data.preguntas[i].id_pregunta + '" class="form-control">' +
        //     '<input type="text" name="respuesta1[]" value="" class="form-control"' +
        //     'placeholder="¿' + data.preguntas[i].pregunta + '?" style="width:590px; margin-top: 20px">&nbsp&nbsp');



        return inputText;
    }
});