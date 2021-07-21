$(document).ready(function () {

    validaciones();
    cargarCitas();
    llamarRamas();
    llamarPreguntita();


    // BOTON DE AGREGAR
    $(document).on('click', '.btn-add', function (event) {
        event.preventDefault();

        let $cajaMultiple = $(this).closest('.caja-multiple');
        let $info = $(this).closest('.grupo').find('input');
        $(this).toggleClass('btn-success btn-add btn-danger btn-remove').html('–');
        console.log($info.data());
        let data = {
            pregunta: $info.attr("placeholder"),
            num_rama: $info.attr("numero-rama"),
            id_pregunta: $info.attr("id-pregunta"),
        }
        $cajaMultiple.append(crearInputTelefono(data));
        let dui =$cajaMultiple.find('input').inputmask();
        dui.inputmask("99999999-9"); //static mask
        dui.inputmask({ "mask": "99999999-9" }); //specifying options
    });
    // BOTON DE ELIMINAR
    $(document).on('click', '.btn-remove', function (event) {
        event.preventDefault();
        let $grupo = $(this).closest('.grupo');
        $grupo.remove();
    });
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
                            '<div class="" id="' + name.num_rama + '"></div></div>');

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
                        $select.append(crearPreguntaCerrada(data.preguntas[i], data.opciones));
                        contador++;
                    } else {
                        if (data.preguntas[i].mas_respuestas == 'Si') {
                            // alert('entre');
                            $select = $('#' + data.preguntas[i].num_rama);
                            $select.append(crearPreguntaMultiple(data.preguntas[i]));
                            cont++;
                        } else {
                            var $select = $('#' + data.preguntas[i].num_rama);
                            $select.append(crearInputText(data.preguntas[i]));
                        }
                    }
                }
                inicializarMascara();
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
    function crearLabel(txt) {
        let label = document.createElement('label');
        label.innerHTML = txt;
        label.style.fontWeight = "normal";
        label.style.padding = '3px';
        return label;
    }
    function crearBoton() {
        let span = document.createElement("span");
        span.classList.add('input-group-btn');

        let button = document.createElement("button");
        button.classList.add('btn');
        button.classList.add('btn-success');
        button.classList.add('btn-add');
        button.setAttribute("type", "button");
        button.style.marginTop = '19px';
        let t = document.createTextNode("+");
        button.appendChild(t);
        span.append(button);
        return span;
    }
    function crearInputText(data) {
        let label = crearLabel(`¿${data.pregunta}?`);
        let inputText = document.createElement("INPUT");
        inputText.setAttribute("type", "text");
        inputText.setAttribute("name", `respuesta1[]`);
        inputText.setAttribute("placeholder", `¿${data.pregunta}?`);
        inputText.setAttribute("numero-rama", `${data.num_rama}`);
        inputText.setAttribute("id-pregunta", `${data.id_pregunta}`);
        inputText.dataset.numeroRama = data.num_rama;
        inputText.dataset.idPregunta = data.id_pregunta;
        inputText.style.width = '590px';
        inputText.style.marginTop = '20px';
        inputText.classList.add('form-control');

        let grupo = document.createElement('div');
        grupo.append(label);
        grupo.append(inputText);

        return grupo;
    }
    function crearInputTelefono(data) {
        let boton = crearBoton();
        let inputText = document.createElement("INPUT");
        inputText.setAttribute("type", "text");
        inputText.setAttribute("name", `respuesta1[]`);
        inputText.setAttribute("placeholder", `${data.pregunta}`);
        inputText.setAttribute("numero-rama", `${data.num_rama}`);
        inputText.setAttribute("id-pregunta", `${data.id_pregunta}`);
        inputText.dataset.numeroRama = data.num_rama;
        inputText.dataset.idPregunta = data.id_pregunta;
        inputText.style.width = '550px';
        inputText.style.marginTop = '20px';
        inputText.classList.add('form-control');
        inputText.classList.add('input-multiple');
        inputText.classList.add('telefono');

        let grupo = document.createElement('div');
        grupo.classList.add("grupo");
        grupo.append(inputText);
        grupo.append(boton);

        return grupo;
    }
    function crearPreguntaCerrada(data, listOption) {
        let label = crearLabel(`¿${data.pregunta}?`);
        let select = document.createElement("select");
        select.setAttribute("name", `respuesta1[]`);
        select.setAttribute("placeholder", `¿${data.pregunta}?`);
        select.setAttribute("numero-rama", `${data.num_rama}`);
        select.setAttribute("id-pregunta", `${data.id_pregunta}`);
        select.style.width = '590px';
        select.style.marginTop = '20px';
        select.classList.add('form-control');
        select.classList.add('respuesta');

        listOption.forEach(opt => {

            if (data.id_pregunta == opt.id_pregunta) {
                let option = document.createElement("OPTION");
                option.setAttribute("value", opt.opciones_respuestas);
                let t = document.createTextNode(opt.opciones_respuestas);
                option.appendChild(t);
                select.appendChild(option);
            }
        });

        let grupo = document.createElement('div');
        grupo.append(label);
        grupo.append(select);

        return grupo;
    }
    function crearPreguntaMultiple(data) {
        let label = crearLabel(`¿${data.pregunta}?`);
        let boton = crearBoton();
        let inputText = document.createElement("INPUT");
        inputText.setAttribute("type", "text");
        inputText.setAttribute("name", `respuesta1[]`);
        inputText.setAttribute("placeholder", `${data.pregunta}`);
        inputText.setAttribute("numero-rama", `${data.num_rama}`);
        inputText.setAttribute("id-pregunta", `${data.id_pregunta}`);
        inputText.style.width = '550px';
        inputText.style.marginTop = '20px';
        inputText.classList.add('form-control');
        inputText.classList.add('input-multiple');

        let contenedor = document.createElement('div');
        contenedor.classList.add("caja-multiple");

        let grupo = document.createElement('grupo');
        grupo.classList.add("grupo");
        grupo.append(inputText);
        grupo.append(boton);

        contenedor.append(label);
        contenedor.append(grupo);

        return contenedor;
    }
    function crearOtherMultiple(data) {
        let inputText = document.createElement("INPUT");
        let boton = crearBoton();
        inputText.setAttribute("type", "date");
        inputText.setAttribute("name", `respuesta1[]`);
        inputText.setAttribute("placeholder", `${data.pregunta}`);
        inputText.setAttribute("numero-rama", `${data.num_rama}`);
        inputText.setAttribute("id-pregunta", `${data.id_pregunta}`);
        inputText.style.width = '550px';
        inputText.style.marginTop = '20px';
        inputText.classList.add('form-control');
        inputText.classList.add('input-multiple');

        let grupo = document.createElement('div');
        grupo.classList.add("grupo");
        grupo.append(inputText);
        grupo.append(boton);

        return grupo;
    }
    function inicializarMascara() {
        let dui = $("#dui");
        let celular = $('.telefono');
        dui.inputmask("99999999-9"); //static mask
        dui.inputmask({ "mask": "99999999-9" }); //specifying options
        // $("#dui").inputmask("9-a{1,3}9{1,3}"); //mask with dynamic syntax
        celular.inputmask("(+123) 1234-5678"); //static mask
        celular.inputmask({ "mask": "(+999) 9999-9999" }); //specifying options
    }
});