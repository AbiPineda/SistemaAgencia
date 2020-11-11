// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function () {

    /* INICIALIZANDO LOS EVENTOS EXTERNOS
        -----------------------------------------------------------------*/
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

    /* INICIALIZANDO EL CALENDARIO
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    let date = new Date();
    let d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();
    //INICIALIZAN
    let Calendar = FullCalendar.Calendar;
    let Draggable = FullCalendarInteraction.Draggable;

    let containerEl = document.getElementById('external-events');
    let checkbox = document.getElementById('drop-remove');
    let calendarEl = document.getElementById('calendar');
    console.log(calendarEl);

    // initialize the external events
    // -----------------------------------------------------------------
    //ESTA PARTE ES PARA INICIALIZAR LA PARTE ARRASTRAR Y SOLTAR 
    new Draggable(containerEl, {
        itemSelector: '.external-event',
        eventData: function (eventEl) {
            console.log("DRAGGABLE");
            console.log(eventEl);
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
        // events: 'http://localhost/API-REST-PHP/Itinerario/show',
        //Random default events
        eventSources: [

            // your event source
            {
                url: 'http://localhost/API-REST-PHP/Itinerario/calendar',
                extraParams: {
                    id_tours: '24',

                },
                textColor: 'black'  // an option!
                // color: 'yellow',    // an option!
            }

            // any other sources...

        ],
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
    let currColor = '#3c8dbc' //Red by default
    //Color chooser button
    let colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
        e.preventDefault()
        //Save color
        currColor = $(this).css('color')
        console.log(currColor);
        console.log("dfadsfafad");
        //Add color effect to button
        $('#add-new-event').css({
            'background-color': currColor,
            'border-color': currColor
        })
    })
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
    $('#btnGuardar').click(function (e) {
    let todos = (calendar.getEvents());
    todos.forEach(element => {
        console.log(element.start);
        console.log(element.id);
    });
    });


})
