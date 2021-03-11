let DATA_TUR;
let DATA_SERVICIO;
let contadorTabla = 0.0;
let totalGastos = 0.0;
let totalIngresos = 0.0;
let ganancias = 0.0;
let cantidadByTransporte = 0;
const htmlOtrasOpciones = $('#otras_opciones').clone();
const htmlPromociones = $('#promocione_especiales').clone();

inicializarCalendario();
inicializarValidaciones();
inicializarComboTuristico();
inicializarComboServicio();
inicializarGaleria();

let tabla = $('#TablaCostos').DataTable({
    "responsive": true,
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "pageLength": 3,

    "columnDefs": [
        { "className": "dt-center", "targets": "_all" },
        // { "targets": [6], "visible": false },
        // { "targets": [7], "visible": false },
        // { "targets": [8], "visible": false },
    ]
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
        document.getElementById("imgContactoTur").src = DATA_SELECCIONADA.url;
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
        document.getElementById("imgContactoServicio").src = DATA_SELECCIONADA.url;
    }
});
//CUANDO HAY CAMBIOS EN EL COMBO TRANSPORTE
$('#ComboTransporte').on('select2:select', function (e) {
    //OBTENEMOS LA DATA DEL COMBO    
    let data;
    let id = e.params.data.id;
    //FILTRAMOS Y OBTENEMOS LA INFORMACION COMPLETA
    data = DATA_SERVICIO.find(myServicio => myServicio.id_servicios === id);
    //ACTUALIZAMOS LA CANTIDAD DE ASIENTOS DEPENDIENDO DEL TRANSPORTE
    cantidadByTransporte = data.asientos_dispobibles;
    //ACTUALIZAMOS LA INFORMACION DEL TRANSPORTE
    document.getElementById("precio_transporte").value = data.costos_defecto;
    document.getElementById("nameContactoTransporte").innerHTML = `<b>Nombre de Contacto:</b> ${data.nombre_contacto}`;
    document.getElementById("namePreviewTransporte").innerHTML = data.nombre_contacto;
    document.getElementById("mailContactoTransporte").innerHTML = data.correo;
    document.getElementById("phoneContactoTransporte").innerHTML = data.telefono;
    document.getElementById("imgContactoTransporte").src = data.url;
    //ACTUALIZAMOS LA INFORMACION DE LA TABLA

    let label = $("#ComboTransporte option:selected").html();
    modificarRowTransporte(id, cantidadByTransporte, data.costos_defecto, label);
    modificarTabla();
    modificarIngresos();
    modificarGanancias();
});
//AGREGANDO LA INFORMACION DE UN TUR A LA TABLA
$(document).on('click', '#btnAgregarTur', function (evento) {
    evento.preventDefault();
    //verifiacando que existe un precio
    let precio_sitio = $('#precio_sitio').val();
    if (!precio_sitio) {
        errors = { precio_sitio: "Digite precio" };
        $("#miFormulario").validate().showErrors(errors);
    } else {
        let PorPasajero = $("input[name='radioTur']:checked").val();
        let mytur = $('#ComboTur').select2('data');
        let nombre = mytur[0].text;
        let id = mytur[0].id;
        contadorTabla++;
        ///si ha seleccionado el radio Button seleccionando que el costo sera por pasajerro
        //obteneros la cantidad de pasajero, de lo contrio la cantidad sera 1
        let cantidad = PorPasajero == "si" ? cantidadByTransporte : 1;
        let precio = $("#precio_sitio").val();
        let tipo = "tur";
        if (!ExisteFila(id, cantidad, precio, tipo, PorPasajero)) {
            agregarFila(nombre, precio, cantidad, PorPasajero, tipo, id);
        }
        modificarIngresos();
        modificarTabla();
        modificarGanancias();
    }
});
//AGREGANDO LA INFORMACION DE UN SITIO SERVICIO A LA TABLA
$(document).on('click', '#btnAgregarSitio', function (evento) {
    evento.preventDefault();
    //verifiacando que existe un precio
    let precio_servicio = $('#precio_servicio').val();
    if (!precio_servicio) {
        errors = { precio_servicio: "Digite precio" };
        $("#miFormulario").validate().showErrors(errors);
    } else {
        let PorPasajero = $("input[name='servicioCheck']:checked").val();
        let myServicio = $('#ComboServicio').select2('data');
        let nombre = myServicio[0].text;
        let id = myServicio[0].id;
        contadorTabla++;
        ///si ha seleccionado el radio Button seleccionando que el costo sera por pasajerro
        //obteneros la cantidad de pasajero, de lo contrio la cantidad sera 1
        let cantidad = PorPasajero == "si" ? cantidadByTransporte : 1;
        let precio = $("#precio_servicio").val();
        let tipo = "servicio"
        if (!ExisteFila(id, cantidad, precio, tipo, PorPasajero)) {
            agregarFila(nombre, precio, cantidad, PorPasajero, tipo, id);
        }
        modificarIngresos();
        modificarTabla();
        modificarGanancias();
    }
});
//CUANDO HAY CAMBIOS EN EL INPUT DE PRECIO DE TRANSPORTE
$(document).on('keyup mouseup', '#precio_transporte', function () {
    
    let id = $('#ComboTransporte').val();
    let cantidad = 1;
    let costo   = $('#precio_transporte').val();
    let label = $("#ComboTransporte option:selected").html();
    modificarRowTransporte(id,cantidad,costo,label);
    modificarTabla();
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
    evento.preventDefault(); //para evitar que la pagina se recargue
    let form = $("#miFormulario");
    form.validate();
    if (form.valid()) {
        guardar();
    } else {
        const Toast = Swal.mixin();
        Toast.fire({
            title: 'Exito...',
            icon: 'error',
            text: "Complete los campos",
            showConfirmButton: true,
        });
    }
});
//BOTON + AGREGAR UN NUEVO SERVICIO 
$(document).on('click', '#newServicio', function (evento) {
    //se habilita el combo
    $('#tipo_servicio').prop('disabled', false);
    //seleccionamos por defecto la primera opcion
    $('#tipo_servicio').val('1');
    $('#tipo_servicio').trigger('change');
    //deshabilitamos la segunda opcion que es la del transporte
    $('#tipo_servicio option[value="2"]').prop('disabled', true);
    //se ocultan las opciones de trasnporte
    $('#configuracionAsientos').hide();
    $('#dibujoAsientos').hide();
    //se abre el modal
    $('#modal-agregarServicio').modal('show');
});
//BOTON + AGREGAR UN NUEVO SERVICIO 
$(document).on('click', '#newTranspore', function (evento) {
    //seleccionamos por defecto la opcion del transporte
    $('#tipo_servicio').val('2');
    //seshabilitamos el combo
    $('#tipo_servicio').trigger('change');
    $('#tipo_servicio').prop('disabled', true);
    //mostramos las opciones de transporte
    $('#configuracionAsientos').show();
    $('#dibujoAsientos').show();
    //mostramos el modal
    $('#modal-agregarServicio').modal('show');
});
//BOTON + AGREGAR UN NUEVO SITIO 
$(document).on('click', '#newSitio', function (evento) {
    console.log("sitosdfad f");
    $('#modal-agregarSitio').modal('show');
});
//BOTON DE AGREGAR INPUT
$(document).on('click', '.btn-add', addFormGroup);
//BOTON DE ELIMINAR INPUT
$(document).on('click', '.btn-remove', removeFormGroup);
//BOTON DE AGREGAR FILA
$(document).on('click', '.btn-addRow', addRow);
//BOTON DE ELIMINAR FILA
$(document).on('click', '.btn-removeRow', removeRow);

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
    //COMBO DE CONTACTOS
    $.ajax({
        url: URL_SERVIDOR + "ServiciosAdicionales/obtenerServicio",
        method: "GET"
    }).done(function (response) {
        //REST_Controller::HTTP_OK
        let dataOtros = [];
        let dataTransporte = [];
        if (response.servicio) {
            DATA_SERVICIO = response.servicio;
            for (let index = 0; index < DATA_SERVICIO.length; index++) {
                if (DATA_SERVICIO[index].tipo_servicio === "Transporte") {
                    if (cantidadByTransporte == 0) {
                        cantidadByTransporte = parseInt(DATA_SERVICIO[index].asientos_dispobibles);
                    }
                    dataTransporte.push({
                        id: DATA_SERVICIO[index].id_servicios,
                        text: `${DATA_SERVICIO[index].nombre_servicio} (${DATA_SERVICIO[index].tipo_servicio}, ${DATA_SERVICIO[index].asientos_dispobibles} Asientos)`
                    });
                } else {
                    dataOtros.push({
                        id: DATA_SERVICIO[index].id_servicios,
                        text: `${DATA_SERVICIO[index].nombre_servicio} (${DATA_SERVICIO[index].tipo_servicio})`
                    });
                }
            }
            ///LE CARGAMOS LA DATA 
            $('#ComboServicio').select2({ data: dataOtros });
            $('#ComboTransporte').select2({ data: dataTransporte });
        } else {
            $('#ComboServicio').select2();
            $('#ComboTransporte').select2();
        }
    }).fail(function (response) {
        $('#ComboServicio').select2();
        $('#ComboTransporte').select2();

    }).always(function (xhr, opts) {
        agregarInformacionContacto();
        $('#loading').hide();
    });
}
function agregarFila(nombre, precio, cantidad, PorPasajero, tipo, id, Crearboton = true) {
    let subTotoal = (precio * cantidad).toFixed(2);
    let html = "";
    if (Crearboton) {
        html += '<td>';
        html += '    <div class="btn-group">';
        html += '        <button type="button" name="" class="btn btn-danger" data-toggle="modal"';
        html += '            data-target="#modal-eliminar">';
        html += '            <i class="fas fa-trash" style="color: white"></i>';
        html += '        </button>';
        html += '    </div>';
        html += '</td>';
    }
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
            data[2] = cantidadByTransporte; //le asignamos un nuevoo valor a la columna cantidad
            data[4] = (data[1] * data[2]).toFixed(2); // modificamos el sub total
        }
        totalGastos += parseFloat(data[4]);
        this.data(data).draw(false);
    });
    $('#totalGastos').text("$" + totalGastos);
}
function modificarIngresos() {
    totalIngresos = parseFloat(cantidadByTransporte * $("#CostoPasaje").val());
    $('#totalIngresos').text("$" + totalIngresos);
}
function modificarIngresos() {
    totalIngresos = parseFloat(cantidadByTransporte * $("#CostoPasaje").val());
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
    $('#ganancias').text("$" + ganancias.toFixed(2));
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
function inicializarValidaciones() {
    $('#miFormulario').validate({
        rules: {
            nombreTours: {
                required: true,
                minlength: 3,
                maxlength: 150
            },
            fecha_salida: {
                required: true,
            },
            cantidad: {
                required: true,
                digits: true,
                min: 1
            },
            CostoPasaje: {
                required: true,
                number: true,
                min: 0
            },
            precio_sitio: {
                required: true,
                number: true,
                min: 0
            },
            precio_servicio: {
                required: true,
                number: true,
                min: 0
            },
            precio_transporte:{
                required: true,
                number: true,
                min: 0
            },
            descripcion_tur: {
                required: true,
                minlength: 5
            },
            "requisitos[]": {
                required: true,
                minlength: 5,

            },
            "no_incluye[]": {
                required: true,
                minlength: 5
            },
            "incluye[]": {
                required: true,
                minlength: 5
            },
            "lugar_salida[]": {
                required: true,
                minlength: 3
            },

        },
        messages: {
            nombreTours: {
                required: "Digite titulo",
                minlength: "Longitud debe ser mayor a 3",
                maxlength: "Longitud debe ser menor a 150"
            },
            fecha_salida: {
                required: "Es necesaria la fecha de salida",
            },
            cantidad: {
                required: "Digite el numero de pasajeros",
                digits: "Solo numeros enteros",
                min: "Debe de ser mayor a 0"
            },
            CostoPasaje: {
                required: "Digite costo del pasaje",
                number: "Solo numero",
                min: "Debe ser mayor o igual a 0"
            },
            precio_sitio: {
                required: "Digite precio",
                number: "Solo numero",
                min: "Debe ser mayor o igual a 0"
            },
            precio_servicio: {
                required: "Digite precio",
                number: "Solo numero",
                min: "Debe ser mayor o igual a 0"
            },
            precio_transporte:{
                required: "Digite precio",
                number: "Solo numeros",
                min: "Debe ser mayor o igual a 0"
            },
            descripcion_tur: {
                required: "Este campo es requierido",
                minlength: "debe de tener una longitud mayor a 4 "
            },
            "lugar_salida[]": {
                required: "Digite el luegar de salida",
                minlength: "Longitud debe ser mayor a 3",
            },
            "incluye[]": {
                required: "Este campo es requierido",
                minlength: "debe de tener una longitud mayor a 4 "
            },
            "no_incluye[]": {
                required: "Este campo es requierido",
                minlength: "debe de tener una longitud mayor a 4 "
            },

            "requisitos[]": {
                required: "Este campo es requierido",
                minlength: "debe de tener una longitud mayor a 4 "
            },
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
function resetMiTable() {
    contadorTabla = 0;
    totalGastos = 0;
    totalIngresos = 0;
    ganancias = 0;
    tabla.clear().draw();
    $('#totalIngresos').text("$0");
    $('#ganancias').text("$0");
    $('#totalGastos').text("$0");
}
function restaurarContactos() {

    document.getElementById("precio_sitio").value = DATA_TUR[0].precio_sitio;
    document.getElementById("nameContactoTur").innerHTML = `<b>Nombre de Contacto:</b> ${DATA_TUR[0].contactoN}`;
    document.getElementById("namePreviewTur").innerHTML = DATA_TUR[0].contactoN;
    document.getElementById("mailContactoTur").innerHTML = DATA_TUR[0].correo;
    document.getElementById("phoneContactoTur").innerHTML = DATA_TUR[0].telefono;
    document.getElementById("imgContactoTur").src = DATA_TUR[0].url

    document.getElementById("precio_servicio").value = DATA_SERVICIO[0].costos_defecto;
    document.getElementById("nameContactoServicio").innerHTML = `<b>Nombre de Contacto:</b> ${DATA_SERVICIO[0].nombre_contacto}`;
    document.getElementById("namePreviewServicio").innerHTML = DATA_SERVICIO[0].nombre_contacto;
    document.getElementById("mailContactoServicio").innerHTML = DATA_SERVICIO[0].correo;
    document.getElementById("phoneContactoServicio").innerHTML = DATA_SERVICIO[0].telefono;
    document.getElementById("imgContactoServicio").src = DATA_SERVICIO[0].url;
}
function addFormGroup(event) {
    event.preventDefault();
    let $formGroup = $(this).closest('.form-group');
    let $formGroupClone = $formGroup.clone();

    if (!$formGroupClone.find('input').val() == "") {
        $formGroupClone.find('input').val('');
        $(this).toggleClass('btn-success btn-add btn-danger btn-remove').html('–');
        $formGroupClone.insertAfter($formGroup);
    }
}
function removeFormGroup(event) {
    event.preventDefault();
    let $formGroup = $(this).closest('.form-group');
    $formGroup.remove();
}
function addRow(event) {
    event.preventDefault();
    let $formGroup = $(this).closest('.row');
    let $formGroupClone = $formGroup.clone();

    if (!$formGroupClone.find('input').val() == "") {
        $formGroupClone.find('input').val('');
        $(this).toggleClass('btn-success btn-addRow btn-danger btn-removeRow').html('–');
        $formGroupClone.insertAfter($formGroup);
    }
}
function removeRow(event) {
    event.preventDefault();
    let $formGroup = $(this).closest('.row');
    $formGroup.remove();
}
function restOtrasOpciones() {

    $("#contenedor_opcions").empty();
    $("#contenedor_opcions").html(htmlOtrasOpciones);
}
function resetPromociones() {
    $("#contenedorPromociones").empty();
    $("#contenedorPromociones").html(htmlPromociones);
}
function ExisteFila(id, cantidad, costo, tipo, PorPasajero) {
    let encontrado = false;
    tabla.rows().every(function (value, index) {
        let data = this.data();
        if (id == data[7] && tipo == data[6]) {
            let subTotoal = (costo * cantidad).toFixed(2);
            data[2] = cantidad;
            data[3] = PorPasajero;
            data[4] = subTotoal;
            encontrado = true;
            this.data(data).draw(false);
        }
    });

    return encontrado;
}
function agregarInformacionContacto() {
    let ComboServicio = document.getElementById("ComboServicio").value;
    let Combotransporte = document.getElementById("ComboTransporte").value;
    let CombotSitio = document.getElementById("ComboTur").value;
    if (typeof CombotSitio !== 'undefined') {
        let data = DATA_TUR.find(myTur => myTur.id_sitio_turistico === CombotSitio);
        document.getElementById("precio_sitio").value = data.precio_sitio;
        document.getElementById("nameContactoTur").innerHTML = `<b>Nombre de Contacto:</b> ${data.contactoN}`;
        document.getElementById("namePreviewTur").innerHTML = data.contactoN;
        document.getElementById("mailContactoTur").innerHTML = data.correo;
        document.getElementById("phoneContactoTur").innerHTML = data.telefono;
        document.getElementById("imgContactoTur").src = data.url
    }

    if (typeof ComboServicio !== 'undefined') {
        let data = DATA_SERVICIO.find(myServicio => myServicio.id_servicios === ComboServicio);
        document.getElementById("precio_servicio").value = data.costos_defecto;
        document.getElementById("nameContactoServicio").innerHTML = `<b>Nombre de Contacto:</b> ${data.nombre_contacto}`;
        document.getElementById("namePreviewServicio").innerHTML = data.nombre_contacto;
        document.getElementById("mailContactoServicio").innerHTML = data.correo;
        document.getElementById("phoneContactoServicio").innerHTML = data.telefono;
        document.getElementById("imgContactoServicio").src = data.url;
    }
    if (typeof Combotransporte !== 'undefined') {
        let data = DATA_SERVICIO.find(myServicio => myServicio.id_servicios === Combotransporte);
        document.getElementById("precio_transporte").value = data.costos_defecto;
        document.getElementById("nameContactoTransporte").innerHTML = `<b>Nombre de Contacto:</b> ${data.nombre_contacto}`;
        document.getElementById("namePreviewTransporte").innerHTML = data.nombre_contacto;
        document.getElementById("mailContactoTransporte").innerHTML = data.correo;
        document.getElementById("phoneContactoTransporte").innerHTML = data.telefono;
        document.getElementById("imgContactoTransporte").src = data.url;
        //CARGAMOS EL PRIMER REGISTRO A LA TABLA 
        let id = Combotransporte;
        let cantidad = 1;
        let precio = $('#precio_transporte').val();
        let tipo = "servicio";
        let PorPasajero = "no";
        let nombre = $("#ComboTransporte option:selected").html();
        let Crearboton = false;

        if (!ExisteFila(id, cantidad, precio, tipo, PorPasajero)) {
            agregarFila(nombre, precio, cantidad, PorPasajero, tipo, id, Crearboton);
        }
        modificarIngresos();
        modificarTabla();
        modificarGanancias();
    }

}
function modificarRowTransporte(id, cantidad, costo, titulo) {
    tabla.rows().every(function (value, index) {
        let data = this.data();
        //PARA MODIFICAR LA FILA CON CONTADOR 0 QUE ES DONDE SIEMPRE SE ENCUENTRA LA EL TRANSPORTE
        if (data[8] == "0") {
            //asignamos los nuevos valores
            data[0] = titulo;
            data[1] = costo;
            data[2] = cantidad;
            data[4] = costo;
            data[7] = id;
            //actualizamo la tabla
            this.data(data).draw(false);
            //rompemos el ciclo
            return;
        }
    });

}