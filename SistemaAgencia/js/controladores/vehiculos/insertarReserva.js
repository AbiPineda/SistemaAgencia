
    $(document).ready(function() {
        const ID_VEHICULO = urlParams.get('vehiculo');
        const estadoReservado =2;
        inicializarValidacion();
        
    
        $("#btnGuardar").on('click', function(e) {
            e.preventDefault();
            let form = $("#register-reserva");
            form.validate();
            if (form.valid()) {
    
                let comboServicios = $("#comboServicio").select2('data');
                let arregloServicios = [];
               
                for (let index = 0; index < comboServicios.length; index++) {
                    arregloServicios.push(comboServicios[index].text);
                }
                console.log(arregloServicios);
              
                let form = new FormData();
                form.append("id_vehiculo", ID_VEHICULO);
                form.append("id_cliente", document.getElementById("comboUsuario").value);
                form.append("direccionRecogida_detalle", document.getElementById("direccionR").value);
                form.append("direccionDevolucion_detalle", document.getElementById("direccionD").value);
                
                form.append("nombre_detalle", arregloServicios);
        
                form.append("fechaHora_detalle", document.getElementById("fecha_salida").value);
                form.append("total_detalle", document.getElementById("emergencia").value);
                form.append("activo_detalle", estadoReservado);
    
                $.ajax({
                    url: URL_SERVIDOR + "DetalleVehiculo/saveByAgency",
                    method: 'POST',
                    data: form,
                    timeout: 0,
                    processData: false,
                    contentType: false,
    
                }).done(function(response) {
    
                    document.getElementById("register-reserva").reset();
    
                    const Toast = Swal.mixin();
                    Toast.fire({
                        title: 'Exito...',
                        icon: 'success',
                        text: response.mensaje,
                        showConfirmButton: true,
                    }).then((result) => {
                        //TODO BIEN Y RECARGAMOS LA PAGINA 
                        location.reload();
                    });
                }).fail(function(response) {
                   
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
    
                })
    
            }
    
        });
        //PARA LAS VALIDACIONES 
        function inicializarValidacion() {
            $('#register-reserva').validate({
                rules: {
                   
                    id_cliente: {
                        required: true
                    },
                    fechaHora_detalle: {
                        required: true,
                    },
                    direccionRecogida_detalle: {
                        required: true,
                        minlength: 10,
                    },
                    direccionDevolucion_detalle: {
                        required: true,
                        minlength: 10
                    }
                },
                messages: {
                    id_cliente: {
                        required: "Seleccione un cliente",
                    },
                    fechaHora_detalle: {
                        required: "Debe de proporcionar la fecha",
    
                    },
                    direccionRecogida_detalle: {
                        required: "el lugar es necesario",
                        minlength: "Debe de tener una longitud minima de 10",
                    },
                    direccionDevolucion_detalle: {
                        required: "el lugar es necesario",
                        minlength: "Debe de tener una longitud minima de 10"
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
    });