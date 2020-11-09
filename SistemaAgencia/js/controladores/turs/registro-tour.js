// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function () {

    // inicializarCalendario();
    inicializarComboTuristico();
    inicializarComboServicio();
    inicializarGaleria();

    let DATA_TUR;
    let DATA_SERVICIO;
    let contadorTabla = 0;
    let totalGastos = 0;
    let totalIngresos = 0;
    let ganancias = 0;
    let cantidad = document.getElementById("cantidad");
    let tabla = $('#TablaCostos').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "pageLength": 3,
        "responsive": true,
        // "columnDefs": [
        //     { "className": "dt-center", "targets": "_all" },
        //     { "targets": [6], "visible": false },
        //     { "targets": [7], "visible": false },
        //     { "targets": [8], "visible": false },
        // ]
    });

    //CUANDO HAY CAMBIOS EN EL COMBO TUR
    $('#ComboTur').on('select2:select', function (e) {
        let DATA_SELECCIONADA;
        let id = e.params.data.id;
        DATA_SELECCIONADA = DATA_TUR.find(myTur => myTur.id_sitio_turistico === id);
        ///ENCONTRO EL TUR
        if (DATA_SELECCIONADA) {
            document.getElementById("precio_sitio").value = DATA_SELECCIONADA.precio_sitio;
            document.getElementById("nameContactoTur").innerHTML = `<b>Nombre de Contacto:</b> ${DATA_SELECCIONADA.contactoN}`;
            document.getElementById("namePreviewTur").innerHTML = DATA_SELECCIONADA.contactoN;
            document.getElementById("mailContactoTur").innerHTML = DATA_SELECCIONADA.correo;
            document.getElementById("phoneContactoTur").innerHTML = DATA_SELECCIONADA.telefono;
            document.getElementById("imgContactoTur").src = DATA_SELECCIONADA.url;;
            ;
        }
    });
    //CUANDO HAY CAMBIOS EN EL COMBO SERVICIO
    $('#ComboServicio').on('select2:select', function (e) {
        let DATA_SELECCIONADA;
        let id = e.params.data.id;
        DATA_SELECCIONADA = DATA_SERVICIO.find(myServicio => myServicio.id_servicios === id);
        ///ENCONTRO EL TUR
        if (DATA_SELECCIONADA) {
            document.getElementById("precio_servicio").value = DATA_SELECCIONADA.costos_defecto;
            document.getElementById("nameContactoServicio").innerHTML = `<b>Nombre de Contacto:</b> ${DATA_SELECCIONADA.nombre_contacto}`;
            document.getElementById("namePreviewServicio").innerHTML = DATA_SELECCIONADA.nombre_contacto;
            document.getElementById("mailContactoServicio").innerHTML = DATA_SELECCIONADA.correo;
            document.getElementById("phoneContactoServicio").innerHTML = DATA_SELECCIONADA.telefono;
            document.getElementById("imgContactoServicio").src = DATA_SELECCIONADA.url;;
            ;
        }
    });
    //AGREGANDO LA INFORMACION DE UN TUR A LA TABLA
    $(document).on('click', '#btnAgregarTur', function (evento) {
        evento.preventDefault();
        let PorPasajero = $("input[name='radioTur']:checked").val();
        let mytur = $('#ComboTur').select2('data');
        let nombre = mytur[0].text;
        let id = mytur[0].id;
        contadorTabla++;
        ///si ha seleccionado el radio Button seleccionando que el costo sera por pasajerro
        //obteneros la cantidad de pasajero, de lo contrio la cantidad sera 1
        let cantidad = PorPasajero == "si" ? $("#cantidad").val() : 1;
        let precio = $("#precio_sitio").val();
        let tipo = "tur"
        agregarFila(nombre, precio, cantidad, PorPasajero, tipo, id);
        modificarIngresos();
        modificarGanancias();
    });
    //AGREGANDO LA INFORMACION DE UN SITIO TURISTICO A LA TABLA
    $(document).on('click', '#btnAgregarSitio', function (evento) {
        evento.preventDefault();
        let PorPasajero = $("input[name='servicioCheck']:checked").val();
        let myServicio = $('#ComboServicio').select2('data');
        let nombre = myServicio[0].text;
        let id = myServicio[0].id;
        contadorTabla++;
        ///si ha seleccionado el radio Button seleccionando que el costo sera por pasajerro
        //obteneros la cantidad de pasajero, de lo contrio la cantidad sera 1
        let cantidad = PorPasajero == "si" ? $("#cantidad").val() : 1;
        let precio = $("#precio_servicio").val();
        let tipo = "servicio"
        agregarFila(nombre, precio, cantidad, PorPasajero, tipo, id);
        modificarIngresos();
        modificarGanancias();
    });
    //CUANDO HAY CAMBIOS EN EL INPUT DE NUMERO DE PASAJEROS
    $(document).on('keyup mouseup', '#cantidad', function () {
        modificarTabla();
        modificarIngresos();
        modificarGanancias();
    });
    //CUANDO HAY CAMBIOS EN EL INPUT DE NUMERO DE COSTO DE PASAJE
    $(document).on('keyup mouseup', '#CostoPasaje', function () {
        modificarIngresos();
        modificarGanancias();
    });
    //BOTON DE ELIMINAR
    $(document).on('click', '.btn-group .btn-danger', function (evento) {
        let fila = tabla.row($(this).parents('tr')).data();
        totalGastos -= parseFloat(fila[4]);
        $('#totalGastos').text("$" + totalGastos);
        modificarGanancias();
        tabla.row($(this).parents('tr')).remove().draw();


    });
    //BOTON DE GUARDAR 
    $(document).on('click', '#btnguardar', function (evento) {
        guardar();
    });
    //INICIALIZANDO EL CALENDARIO
    function inicializarCalendario() {
        $('#fecha_salida').daterangepicker({
            locale: {
                format: 'DD/MM/YYYY',
                "separator": " - ",
                "applyLabel": "Aplicar",
                "cancelLabel": "Cancelar",
                "fromLabel": "De",
                "toLabel": "A",
                "customRangeLabel": "Custom",
                "daysOfWeek": [
                    "Dom",
                    "Lun",
                    "Mar",
                    "Mie",
                    "Jue",
                    "Vie",
                    "Sab"
                ],
                "monthNames": [
                    "Enero",
                    "Febrero",
                    "Marzo",
                    "Abril",
                    "Mayo",
                    "Junio",
                    "Julio",
                    "Agosto",
                    "Septiembre",
                    "Octubre",
                    "Noviembre",
                    "Diciembre"
                ],
                "firstDay": 0
            }
        });

    }
    function inicializarComboTuristico() {
        //COMBO DE TIPOS 
        $('#ComboTur').select2();
        //COMBO DE CONTACTOS
        $.ajax({
            url: URL_SERVIDOR + "SitioTuristico/show",
            method: "GET"
        }).done(function (response) {
            //REST_Controller::HTTP_OK
            let myData = [];
            if (response.sitios) {
                DATA_TUR = response.sitios;
                for (let index = 0; index < DATA_TUR.length; index++) {
                    myData.push({
                        id: DATA_TUR[index].id_sitio_turistico,
                        text: `${DATA_TUR[index].nombre_sitio} (${DATA_TUR[index].tipo_sitio})`
                    });
                }
                ///LE CARGAMOS LA DATA 
                $('#ComboTur').select2({ data: myData });
                //CARGAMOS EL COSTO AL INPUT
                document.getElementById("precio_sitio").value = DATA_TUR[0].precio_sitio;
                document.getElementById("nameContactoTur").innerHTML = `<b>Nombre de Contacto:</b> ${DATA_TUR[0].contactoN}`;
                document.getElementById("namePreviewTur").innerHTML = DATA_TUR[0].contactoN;
                document.getElementById("mailContactoTur").innerHTML = DATA_TUR[0].correo;
                document.getElementById("phoneContactoTur").innerHTML = DATA_TUR[0].telefono;
                document.getElementById("imgContactoTur").src = DATA_TUR[0].url;;
            } else {
                $('#ComboTur').select2();
            }
        }).fail(function (response) {
            $('#ComboTur').select2();

        }).always(function (xhr, opts) {
            // $('#loading').hide();
        });
    }
    function inicializarComboServicio() {
        //COMBO DE TIPOS 
        $('#ComboSitio').select2();
        //COMBO DE CONTACTOS
        $.ajax({
            url: URL_SERVIDOR + "ServiciosAdicionales/obtenerServicio",
            method: "GET"
        }).done(function (response) {
            //REST_Controller::HTTP_OK
            let myData = [];
            if (response.servicio) {
                DATA_SERVICIO = response.servicio;
                for (let index = 0; index < DATA_SERVICIO.length; index++) {
                    if (DATA_SERVICIO[index].tipo_servicio === "Transporte") {
                        myData.push({
                            id: DATA_SERVICIO[index].id_servicios,
                            text: `${DATA_SERVICIO[index].nombre_servicio} (${DATA_SERVICIO[index].tipo_servicio}, ${DATA_SERVICIO[index].asientos_dispobibles} Asientos)`
                        });
                    } else {

                        myData.push({
                            id: DATA_SERVICIO[index].id_servicios,
                            text: `${DATA_SERVICIO[index].nombre_servicio} (${DATA_SERVICIO[index].tipo_servicio})`
                        });
                    }

                }
                ///LE CARGAMOS LA DATA 
                $('#ComboServicio').select2({ data: myData });
                //CARGAMOS EL COSTO AL INPUT
                document.getElementById("precio_servicio").value = DATA_SERVICIO[0].costos_defecto;
                document.getElementById("nameContactoServicio").innerHTML = `<b>Nombre de Contacto:</b> ${DATA_SERVICIO[0].nombre_contacto}`;
                document.getElementById("namePreviewServicio").innerHTML = DATA_SERVICIO[0].nombre_contacto;
                document.getElementById("mailContactoServicio").innerHTML = DATA_SERVICIO[0].correo;
                document.getElementById("phoneContactoServicio").innerHTML = DATA_SERVICIO[0].telefono;
                document.getElementById("imgContactoServicio").src = DATA_SERVICIO[0].url;
            } else {
                $('#ComboServicio').select2();
            }
        }).fail(function (response) {
            $('#ComboServicio').select2();

        }).always(function (xhr, opts) {
            $('#loading').hide();
        });
    }
    function agregarFila(nombre, precio, cantidad, PorPasajero, tipo, id) {
        let subTotoal = (precio * cantidad).toFixed(2);
        let html = "";
        html += '<td>';
        html += '    <div class="btn-group">';
        html += '        <button type="button" name="" class="btn btn-danger" data-toggle="modal"';
        html += '            data-target="#modal-eliminar">';
        html += '            <i class="fas fa-trash" style="color: white"></i>';
        html += '        </button>';
        html += '    </div>';
        html += '</td>';
        tabla.row.add([nombre, precio, cantidad, PorPasajero, subTotoal, html, tipo, id, contadorTabla]).draw(false);
        //PARA ORDENAR LA TABLA
        tabla.order([8, 'desc']).draw();
        subTotoal = (parseFloat(subTotoal));
        totalGastos += subTotoal
        $('#totalGastos').text("$" + totalGastos);

    }
    function modificarTabla() {
        totalGastos = 0;
        tabla.rows().every(function (value, index) {
            let data = this.data();
            let porPasajero = data[3];
            if (porPasajero == "si") {
                data[2] = cantidad.value; //le asignamos un nuevoo valor a la columna cantidad
                data[4] = (data[1] * data[2]).toFixed(2); // modificamos el sub total
            }
            totalGastos += parseFloat(data[4]);
            this.data(data).draw(false);
        });
        $('#totalGastos').text("$" + totalGastos);
    }
    function modificarIngresos() {
        totalIngresos = parseFloat($("#cantidad").val() * $("#CostoPasaje").val());
        $('#totalIngresos').text("$" + totalIngresos);
    }
    function modificarGanancias() {
        ganancias = parseFloat(totalIngresos - totalGastos);
        if (ganancias > 0) {
            $("#labelGanancias").removeClass("text-warning");
            $("#labelGanancias").addClass("text-success");

            $("#ganancias").removeClass("text-warning");
            $("#ganancias").addClass("text-success");
        } else {
            $("#labelGanancias").addClass("text-warning");
            $("#labelGanancias").removeClass("text-success");

            $("#ganancias").addClass("text-warning");
            $("#ganancias").removeClass("text-success");
        }
        $('#ganancias').text("$" + ganancias);
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
    function guardar() {
        $('#loading').show();
        let form = new FormData();
        let serviciosAdicionales = [];
        let sistiosTuristicos = [];
        tabla.rows().every(function (value, index) {
            let data = this.data();
            let tipo = data[6];
            let id = data[7];
            let costo = data[1];
            if (tipo == "servicio") {
                serviciosAdicionales.push({
                    "id_tours" : "0",
                    "id_servicios": id,
                    "costo": costo,
                    "nuemo_veces": "1",
                    "por_usuario": true
                });
            } else {
                sistiosTuristicos.push(id);
            }
        });
      
        let jsonString = JSON.stringify(serviciosAdicionales);
        //ESTO ES PARA L A GALERIA 
        let galeria = document.getElementById("fotos").files;
        for (let i = 0; i < galeria.length; i++) {
            form.append('fotos[]', galeria[i]);
        }
        form.append("servicios", jsonString);
        form.append("nombreTours", document.getElementById("nombreTours").value);
        form.append("fecha_salida", document.getElementById("fecha_salida").value);
        form.append("lugar_salida", document.getElementById("lugar_salida").value);
        form.append("precio", document.getElementById("CostoPasaje").value);
        form.append("no_incluye", document.getElementById("no_incluye").value);
        form.append("requisitos", document.getElementById("requisitos").value);
        form.append("descripcion_tur", document.getElementById("descripcion_tur").value);
        form.append("cupos_disponibles", document.getElementById("cantidad").value);
        form.append("estado", 1);
        form.append("aprobado", 1);
        form.append("tipo", "TUR");

        //OCUPAR ESTA CONFIGURACION CUANDO SE ENVIAEN ARCHIVOS(FOTOS-IMAGENES)
        $.ajax({
            url: URL_SERVIDOR + "TurPaquete/save",
            method: "POST",
            mimeType: "multipart/form-data",
            data: form,
            timeout: 0,
            processData: false,
            contentType: false,
        }).done(function (response) {
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
            console.log(response);

            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: "ERROR EN EL ENVIO DE INFORMACIÓN",
                showConfirmButton: true,
            });

        }).always(function (xhr, opts) {
            $('#loading').hide();
        });
    }
    function guardarDetalle() {
        let form = new FormData();
        let serviciosAdicionales = [];
        let sistiosTuristicos = [];
        tabla.rows().every(function (value, index) {
            let data = this.data();
            let tipo = data[6];
            let id = data[7];
            let costo = data[1];
            if (tipo == "servicio") {
                serviciosAdicionales.push({
                    "id_tours" : "0",
                    "id_servicios": id,
                    "costo": costo,
                    "nuemo_veces": "1",
                    "por_usuario": true
                });
            } else {
                sistiosTuristicos.push(id);
            }
        });
      
        let jsonString = JSON.stringify(serviciosAdicionales);
        form.append("servicios", jsonString);

        //OCUPAR ESTA CONFIGURACION CUANDO SE ENVIAEN ARCHIVOS(FOTOS-IMAGENES)
        $.ajax({
            url: URL_SERVIDOR + "DetalleServicio/save",
            method: "POST",
            mimeType: "multipart/form-data",
            data: form,
            timeout: 0,
            processData: false,
            contentType: false,
        }).done(function (response) {
            console.log(response);
        }).fail(function (response) {
            //SI HUBO UN ERROR EN LA RESPUETA REST_Controller::HTTP_BAD_REQUEST
            console.log(response);

            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: "ERROR EN EL ENVIO DE INFORMACIÓN",
                showConfirmButton: true,
            });

        }).always(function (xhr, opts) {
            // $('#loading').hide();
        });



    }
});

