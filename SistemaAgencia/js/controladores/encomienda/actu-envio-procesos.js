$(document).ready(function () {

	//CACHANDO LOS VALORES DEL URL
    const valores = window.location.search;
    const urlParams = new URLSearchParams(valores);
    let ID_ENCOMIENDA = urlParams.get('ac');
    let tabla;
    let contadorTabla = 0;

    inicializarValidaciones();
    mostrarHistorial();
    mostrarDatos();
    inicializarTabla();



     //BOTON PARA AGREGAR
    $(document).on('click', '#btn-informacion', function (evento) {
        evento.preventDefault(); //para evitar que la pagina se recargue
        let form = $("#informacion-form");  
       form.validate();
         if (form.valid()) {
            add_actualizacion();
        }  
        
    });

    function mostrarDatos() {
        $.ajax({
            url: URL_SERVIDOR + 'Encomienda/encomiendaModificar?id_encomienda=' + ID_ENCOMIENDA,
            method: "GET"
        }).done(function (response) {
            $.each(response.Encomiendas, function (i, index) {
                $('#nombre_cliente').val(index.nombre);
                $('#cliente').val(index.id_usuario);
                $('#telefono').val(index.celular);
                $('#ciudad').val(index.ciudad_origen);
                $('#codigo').val(index.codigo_postal_origen);
                $('#fecha').val(index.fecha);
                $('#total').text(index.total_encomienda);
                $('#comision').text(index.total_comision);
                $('#totalCliente').text(index.total_cliente);
                $('#id_encomienda').val(ID_ENCOMIENDA);
                TOTAL= index.total_encomienda;
                COMISION = index.total_comision;
                TOTALCLIENTE = index.total_cliente;
            });

            //.each para los datos destino

            $.each(response.Detalles_destino, function (i,pivote) {
                $('#cliente_des').val(pivote.nombre_cliente_destini);
                $('#telefono_des').val(pivote.telefono);
                $('#ciudad_des').val(pivote.ciudad_destino);
                $('#codigo_des').val(pivote.codigo_postal_destino);
                $('#direccion').val(pivote.direccion_destino);
                $('#direccion_alterna').val(pivote.alterna_destino);
            });


        }).fail(function (response) {
            console.log(response);

        });

    }

     function inicializarTabla() {
        tabla = $("#add-tabla").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "columnDefs":[
            {"className":"dt-center","targets":"_all"},
            {"targets":[4], "visible":false},
            {"targets":[5], "visible":false},
            {"targets":[6], "visible":false},
            ],
            "ajax": {
                "url": URL_SERVIDOR + "Detalle_Encomienda/detalles?id_encomienda=" + ID_ENCOMIENDA,
                "method": "GET",
                "dataSrc": function (json) {
                    //console.log(json.preguntas);

                    if (json.detalles) {
                        for (let i = 0, ien = json.detalles.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.detalles[i].id_encomienda + '" class="btn btn-danger" data-toggle="modal"';
                            html += '            data-target="#modal-eliminar">';
                            html += '            <i class="fas fa-trash" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.detalles[i]["botones"] = html;

                            json.detalles[i]["contador"] = contadorTabla;
                            contadorTabla ++;



                        }
                        $('#loading').hide();
                        return json.detalles;
                    } else {
                        $('#loading').hide();
                        return [];
                    }
                }
            },
            columns: [
                { data: "nombre_producto" },
                { data: "tarifa" },
                { data: "cantidad" },
                { data: "sub_total" },
                { data: "botones" },
                { data: "id_producto" },
                { data: "contador" },
            ]
        });

    }

    function mostrarHistorial(){
    	//mostrar informacion
         $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Detalle_envio/detalleEnvio?id_encomienda="+ID_ENCOMIENDA,
            success: function(data) {
            	//alert('estoy aqui');
                if (data.detalles) {
                	//alert('entre');
                for (let i = 0, ien = data.detalles.length; i < ien; i++) {
                   // alert('paso');
                     var $select = $('#historias');
                    $select.append('<div class="row">'+
                                        '<div class="col-sm-12">'+
                                               
                                                '<div class="input-group">'+
                                                '<label class="far fa-marker"></label>'+
                                                 '<label class="text-success">'+data.detalles[i].descripcion+'</label>&nbsp'+
                                                 '<label class="text-success">'+data.detalles[i].fecha+'</label>&nbsp'+
                                                 '<label class="text-success">'+data.detalles[i].hora+'</label>'+
                                                '</div>'+
                                        '</div>'+
                                      '</div>');

                    
                }
            }else{
            	//vamos a poner un mensaje
            }

            },
            error: function(err) {
                const Toast = Swal.mixin();
            Toast.fire({
                title: 'Error',
                icon: 'error',
                text:'No hay preguntas registradas..!',
                showConfirmButton: true,
            });
            }
        });

        ///ESTA PARTE ES PARA EL USUARIO PARA MOSTRARLOS
    }

    function add_actualizacion() {

    	let data = {
         "descripcion":          document.getElementById("titulo_actu").value,
         "id_encomienda":        ID_ENCOMIENDA,
         "fecha":                document.getElementById("fecha_actu").value,
         "hora":                 document.getElementById("hora_actu").value
         }; 

        $.ajax({
            url: URL_SERVIDOR+"Detalle_envio/detalleEnvios",
            method: 'POST',
            data: data

        }).done(function (response) {
        document.getElementById("informacion-form").reset();

            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: response.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                //
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
                     //toastr.error(erroresEnvioDatos[mensaje]);
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

        });


    }
    
     function inicializarValidaciones() {

        $('#informacion-form').validate({

            rules: {
               
                unidad_medida:{
                    required: true,
                    minlength: 5
                }
            },
            messages: {
                
                unidad_medida:{
                    required:"Digite la unidad de medida",
                    minlength:"El nombre producto debe tener una longitud minima de 7"
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