// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function () {
    //INICIALIZAN
    let Calendar = FullCalendar.Calendar;
    let Draggable = FullCalendarInteraction.Draggable;
    let containerEl = document.getElementById('external-events');
    let checkbox = document.getElementById('drop-remove');
    let calendarEl = document.getElementById('calendar');
    /* PARA CREAR UN NUEVO EVENTO EVENTS */
    let currColor = '#007bff' //Red by default
    inicializarComboTuristico();
    cargarEventosSinFecha();
    /* INICIALIZANDO LOS EVENTOS EXTERNOS ---------------------------------*/
    ini_events($('#external-events div.external-event'));

    //INICIALIZANDO EL CALENDARIO
    let calendar = new Calendar(calendarEl, {
        locale: 'es',
        plugins: ['bootstrap', 'interaction', 'dayGrid', 'timeGrid'],
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        'themeSystem': 'bootstrap',
        views: {
            timeGridFourDay: {
                type: 'timeGrid',
                duration: { days: 4 },
                buttonText: '4 day'
            }
        },
        eventSources: [
            {
                url: `${URL_SERVIDOR}Itinerario/calendar`,
                extraParams: { id_tours: '28' },
            }
        ],
        eventClick: function (info) {
            VentanaEliminar(info);

        },
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        drop: function (info) {
            // is the "remove after drop" checkbox checked?
            if (checkbox.checked) {
                // if so, remove the element from the "Draggable Events" list
                info.draggedEl.parentNode.removeChild(info.draggedEl);
            }
        }
    });
    calendar.render();
    function ini_events(ele) {
        ele.each(function () {

            // CREANDO UN OBJETO DE TIPO EVENTO (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            let eventObject = {
                title: $.trim($(this).text())// use the element's text as the event title
            };
            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 1070,
                revert: true, // will cause the event to go back to its
                revertDuration: 0 //  original position after the drag
            });

        });
    }
    // initialize the external events
    // -----------------------------------------------------------------
    //ESTA PARTE ES PARA INICIALIZAR LA PARTE ARRASTRAR Y SOLTAR 
    new Draggable(containerEl, {
        itemSelector: '.external-event',
        eventData: function (eventEl) {
            return {
                title: eventEl.innerText,
                id: eventEl.id,
                tipo: eventEl.getAttribute("tipo"),
                allDay: true,
                backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue(
                    'background-color'),
                borderColor: window.getComputedStyle(eventEl, null).getPropertyValue(
                    'background-color'),
                textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
            };
        }
    });

    $('#color-chooser > li > a').click(function (e) {
        e.preventDefault()
        //Save color
        currColor = $(this).css('color')
        //Add color effect to button
        $('#add-new-event').css({
            'background-color': currColor,
            'border-color': currColor
        })
    })
    //BOTON DE AGREGAR EVENTO (SIN ID)
    $('#add-new-event').click(function (e) {
        e.preventDefault()
        //Get value and make sure it is not null
        let val = $('#new-event').val()
        if (val.length == 0) {
            return
        }

        //Create events
        let event = $('<div />')
        event.css({
            'background-color': currColor,
            'border-color': currColor,
            'color': '#fff'
        }).addClass('external-event');
        event.attr("tipo", "GUARDAR_EVENTO");
        event.html(val);
        $('#external-events').prepend(event)
        //Add draggable funtionality
        ini_events(event)

        //Remove event from text input
        $('#new-event').val('')
    });
    //BOTON DE GUARDAR
    $('#btnGuardar').click(function (e) {
        let form = new FormData();
        let todos = calendar.getEvents();
        let eventos = [];
        let sitiosNew = [];
        let sitiosOld = []
        todos.forEach(element => {
            //SI NO SE ESCOGIO UNA FECHA FINAL LE ASIGNAREMOS LA MISMA INICIAL
                
            if (element.extendedProps.tipo === "GUARDAR_SITIO") {
                sitiosNew.push(
                    {
                        start: crearFecha(new Date(element.start)),
                        end: (element.end == null) ? crearFecha(new Date(element.start)) : crearFecha(new Date(element.end)),
                        id_sitio_turistico: element.id,
                        title: element.title,
                        backgroundColor: element.backgroundColor,
                        borderColor: element.borderColor,
                        allDay : (element.start == element.end)? true:false,
                        textColor: "#fff"
                    });
            } else if (element.extendedProps.tipo === "GUARDAR_EVENTO") {
                eventos.push(
                    {
                        start: crearFecha(new Date(element.start)),
                        end: (element.end == null) ? crearFecha(new Date(element.start)) : crearFecha(new Date(element.end)),
                        backgroundColor: element.backgroundColor,
                        title: element.title,
                        borderColor: element.borderColor,
                        textColor: "#fff"
                    });
            } else if (element.extendedProps.tipo === "ACTUALIZAR_SITIO") {
                sitiosOld.push(
                    {
                        start: crearFecha(new Date(element.start)),
                        end: (element.end == null) ? crearFecha(new Date(element.start)) : crearFecha(new Date(element.end)),
                        id_itinerario: element.id
                    });
            } else {
                sitiosOld.push(
                    {
                        start: crearFecha(new Date(element.start)),
                        end: (element.end == null) ? crearFecha(new Date(element.start)) : crearFecha(new Date(element.end)),
                        id_itinerario: element.id
                    });
            }
        });
        form.append("eventos", JSON.stringify(eventos));
        form.append("sitiosNew", JSON.stringify(sitiosNew));
        form.append("sitiosOld", JSON.stringify(sitiosOld));
        form.append("id_tours", "28");

        $.ajax({
            url: URL_SERVIDOR + "Itinerario/calendarSave",
            method: "POST",
            mimeType: "multipart/form-data",
            data: form,
            timeout: 0,
            processData: false,
            contentType: false,
        }).done(function (response) {
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Itinerario Actualizado',
                icon: 'success',
                confirmButtonColor: '#3085d6'
            });
        }).fail(function (response) {
            //SI HUBO UN ERROR EN LA RESPUETA REST_Controller::HTTP_BAD_REQUEST
            console.log(response);
        });

    });
    //BOTON DE AGREGAR UN NUEVO SITIO TURISTICO
    $('#add-new-sitio').click(function (evento) {
        evento.preventDefault();
        let mytur = $('#ComboTur').select2('data');
        let title = mytur[0].text;
        let id_itinerario = mytur[0].id; //DICE ID ITINERARIO, PERO ES EL ID DEL TUR
        let backgroundColor = "#28a745"
        let textColor = "#fff"
        console.log(mytur);
        crearEventoConId({ title, id_itinerario, backgroundColor, textColor }, "GUARDAR_SITIO");

    });
    //PARA ELIMINAR LOS EVENTOS QUE NO ESTAN EL CALENDARIO 
    $(document).on('click', '#external-events div.external-event', function (evento) {
        console.log("eliminar");

    });

    function cargarEventosSinFecha() {
        const Toast = Swal.mixin();
        $.ajax({
            url: URL_SERVIDOR + "Itinerario/showNull/?id_tours=28",
            method: "GET"
        }).done(function (response) {
            console.log(response);
            if (!response.err) {
                response.forEach(itinerario => {
                    crearEventoConId(itinerario, "ACTUALIZAR_SITIO");
                });
            } else {
                Toast.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'No hay sitios turísticos',

                });
            }
        }).fail(function (response) {
            console.log(response);

        }).always(function (xhr, opts) {
            $('#loading').hide();
        });
    }
    function crearEventoConId(itinerario, tipo) {

        let event = $('<div />');
        event.css({
            'background-color': itinerario.backgroundColor,
            'color': itinerario.textColor
        }).addClass('external-event');
        event.html(itinerario.title);
        event.attr("id", itinerario.id_itinerario);
        event.attr("tipo", tipo);
        $('#external-events').prepend(event)
        //Add draggable funtionality
        ini_events(event)
    }
    function VentanaEliminar(info) {
        const Toast = Swal.mixin();
        Toast.fire({
            title: '¿Desea Eliminar?',
            text: "Se eiminara el Sitio turistico del itinerario",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, Eliminar!',
            cancelButtonText: "Cancelar",
            backdrop: `rgba(0,0,123,0.4)
                       url("https://sweetalert2.github.io/images/nyan-cat.gif")
                       left top
                       no-repeat`
        }).then((result) => {
            eliminar(info);
        });
    }
    function eliminar(info) {

        const Toast = Swal.mixin();
        $.ajax({
            url: URL_SERVIDOR + "Itinerario/elimination",
            method: "DELETE",
            mimeType: "multipart/form-data",
            data: { "id_itinerario": info.event.id },
            timeout: 0,

        }).done(function (response) {
            Toast.fire({
                title: 'Eliminado Correctamente',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                backdrop: `rgba(0,0,123,0.4)
                   url("https://i.imgur.com/UGw1mKB.gif")
                   left top
                   no-repeat`
            }).then((result) => {
                info.event.remove();
            });
        }).fail(function (response) {
            //SI HUBO UN ERROR EN LA RESPUETA REST_Controller::HTTP_BAD_REQUEST
            console.log(response);
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
            let myData = [];
            if (response.sitios) {
                let DATA_TUR = response.sitios;
                for (let index = 0; index < DATA_TUR.length; index++) {
                    myData.push({
                        id: DATA_TUR[index].id_sitio_turistico,
                        text: `${DATA_TUR[index].nombre_sitio} (${DATA_TUR[index].tipo_sitio})`
                    });
                }
                ///LE CARGAMOS LA DATA 
                $('#ComboTur').select2({ data: myData });
            } else {
                $('#ComboTur').select2();
            }
        }).fail(function (response) {
            $('#ComboTur').select2();

        });
    }
    function crearFecha(date) {
        return `${date.getFullYear()}-${date.getMonth() + 1}-${date.getDate()} ${date.getHours()}:${date.getMinutes()}`;
    }
});
