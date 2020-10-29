// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function () {
   
    inicializarCalendario();
    inicializarComboTuristico();
    inicializarComboServicio();

    let DATA_TUR;
    let DATA_SERVICIO ;
    
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
            console.log(DATA_SELECCIONADA);
            document.getElementById("precio_servicio").value = DATA_SELECCIONADA.costos_defecto;
            document.getElementById("nameContactoServicio").innerHTML = `<b>Nombre de Contacto:</b> ${DATA_SELECCIONADA.nombre_contacto}`;
            document.getElementById("namePreviewServicio").innerHTML = DATA_SELECCIONADA.nombre_contacto;
            document.getElementById("mailContactoServicio").innerHTML = DATA_SELECCIONADA.correo;
            document.getElementById("phoneContactoServicio").innerHTML = DATA_SELECCIONADA.telefono;
            document.getElementById("imgContactoServicio").src = DATA_SELECCIONADA.url;;
            ;
        }
    });
   
    //INICIALIZANDO EL CALENDARIO
    function inicializarCalendario() {
        $('#reservation1').daterangepicker({
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
                        text: `${DATA_TUR[index].nombre_sitio} (${DATA_TUR[index].tipo})`
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
                    myData.push({
                        id: DATA_SERVICIO[index].id_servicios,
                        text: `${DATA_SERVICIO[index].nombre_servicio} (${DATA_SERVICIO[index].tipo_servicio})`
                    });
                }
                ///LE CARGAMOS LA DATA 
                $('#ComboServicio').select2({ data: myData });
                //CARGAMOS EL COSTO AL INPUT
                document.getElementById("precio_servicio").value = DATA_SERVICIO[0].costos_defecto;
                document.getElementById("nameContactoServicio").innerHTML = `<b>Nombre de Contacto:</b> ${DATA_SERVICIO[0].nombre_contacto}`;
                document.getElementById("namePreviewServicio").innerHTML = DATA_SERVICIO[0].nombre_contacto;
                document.getElementById("mailContactoServicio").innerHTML =  DATA_SERVICIO[0].correo;
                document.getElementById("phoneContactoServicio").innerHTML =  DATA_SERVICIO[0].telefono;
                document.getElementById("imgContactoServicio").src=DATA_SERVICIO[0].url;
            } else {
                $('#ComboServicio').select2();
            }
        }).fail(function (response) {
            $('#ComboServicio').select2();

        }).always(function (xhr, opts) {
            $('#loading').hide();
        });
    }



});