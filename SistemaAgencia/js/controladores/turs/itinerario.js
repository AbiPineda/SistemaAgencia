// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function () {
    inicializarComboTuristico();
    cargarEventosSinFecha();
    /* INICIALIZANDO LOS EVENTOS EXTERNOS
        ---------------------------------*/
    ini_events($('#external-events div.external-event'));
    function ini_events(ele) {
        ele.each(function () {

            // CREANDO UN OBJETO DE TIPO EVENTO (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            let eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
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

    //INICIALIZAN
    let Calendar = FullCalendar.Calendar;
    let Draggable = FullCalendarInteraction.Draggable;

    let containerEl = document.getElementById('external-events');
    let checkbox = document.getElementById('drop-remove');
    let calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------
    //ESTA PARTE ES PARA INICIALIZAR LA PARTE ARRASTRAR Y SOLTAR 
    new Draggable(containerEl, {
        itemSelector: '.external-event',
        eventData: function (eventEl) {
            //AQUI TAMBIEN TENDRIA QUE RETORNAR UN ID
            return {
                title: eventEl.innerText,
                id: eventEl.id,
                backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue(
                    'background-color'),
                borderColor: window.getComputedStyle(eventEl, null).getPropertyValue(
                    'background-color'),
                textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
            };
        }
    });
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
                extraParams: { id_tours: '24' },
            }
        ],
        eventClick: function (info) {
            eliminar(info);

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

    /* PARA CREAR UN NUEVO EVENTO EVENTS */
    let currColor = '#007bff' //Red by default
    //Color chooser button
    let colorChooser = $('#color-chooser-btn')
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
    //BOTON DE AGREGAR EVENTO
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
        }).addClass('external-event')
        event.html(val)
        $('#external-events').prepend(event)

        //Add draggable funtionality
        ini_events(event)

        //Remove event from text input
        $('#new-event').val('')
    });
    //BOTON DE GUARDAR
    $('#btnGuardar').click(function (e) {
        let todos = (calendar.getEvents());
        todos.forEach(element => {
            console.log(element.start);
            console.log(element.id);
        });
    });
    $('#add-new-sitio').click(function (evento) {
        evento.preventDefault();
        let mytur = $('#ComboTur').select2('data');
        let nombre_sitio = mytur[0].text;
        let id = mytur[0].id;
        let backgroundColor = "#28a745"
        crearEventoConId({nombre_sitio,id,backgroundColor});

    });

    $(document).on('click', '#external-events div.external-event', function (evento) {
        console.log("eliminar");

    });
    function cargarEventosSinFecha() {
        $.ajax({
            url: URL_SERVIDOR + "Itinerario/showNull/?id_tours=28",
            method: "GET"
        }).done(function (response) {
            console.log(response);
            response.forEach(SitioTuristico => {
                crearEventoConId(SitioTuristico);
            });
        }).fail(function (response) {
            console.log(response);

        }).always(function (xhr, opts) {
            $('#loading').hide();
        });
    }
    function crearEventoConId(SitioTuristico) {
        let event = $('<div />');
        event.css({
            'background-color': SitioTuristico.backgroundColor,
            'color': '#fff'
        }).addClass('external-event');
        event.html(SitioTuristico.nombre_sitio);
        event.attr("id", SitioTuristico.id);

        $('#external-events').prepend(event)

        //Add draggable funtionality
        ini_events(event)
    }
    function eliminar(info) {
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
            if (result.value) {
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


})
