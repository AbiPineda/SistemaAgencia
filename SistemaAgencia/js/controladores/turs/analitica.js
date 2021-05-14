const valores = window.location.search;
const urlParams = new URLSearchParams(valores);
let ID_TUR = urlParams.get('tur');

init();

function init() {
   $.ajax({
      url: URL_SERVIDOR + "TurPaquete/analitica?id_tours=" + ID_TUR,
      method: "GET"
   }).done(function (response) {
      // //CARGAMOS EL COSTO AL INPUT
      console.log(response);
      document.getElementById("nombreTours").value = response.nombre;
      $('#totalIngresos').text(`$ ${response.total}`);
      inicializarCalendario(response.start, response.end);
      inicializarTabla(response.reservas);
      crearTransporte(response.transporte);

      $('#loading').hide();
   }).fail(function (response) {
      console.log(response);

   });
}
function inicializarCalendario(start, end) {
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
      },
      startDate: moment(start),
      endDate: moment(end)
   });

}

function inicializarTabla(reservas) {
   let tabla = $('#TablaCostos').DataTable({
      responsive: true,
      autoWidth: false,
      deferRender: true,
      columns: [
         { data: "nombre" },
         { data: "label_asiento" },
         { data: "descripcionProducto" },
         { data: "monto" },
         { data: "formaPagoUtilizada" },

      ]
   });
   reservas.forEach(reserva => {
      tabla.row.add({
         nombre: reserva.nombre,
         label_asiento: reserva.label_asiento,
         descripcionProducto: reserva.descripcionProducto,
         monto: reserva.monto,
         formaPagoUtilizada: reserva.formaPagoUtilizada,
      }).draw(false);;
   });
}
function crearTransporte(transporte) {
   console.log(transporte)
   if (transporte != null) {
      transporte = true;
      let derecho = transporte.asiento_derecho;
      let izquierdo = transporte.asiento_izquierdo;
      let numero_filas = transporte.filas;
      let deshabilitados = transporte.asientos_deshabilitados;

      let strFila = crearStrFila(derecho, izquierdo);
      let mapa = crearFilas(strFila, derecho, izquierdo, numero_filas, true);
      dibujarAsientos(mapa);
      console.log(mapa);
      // bloquearAsientosInavilitados(deshabilitados);
      // bloquearAsientosOcupados(transporte.ocupados);
   } 
}

function crearStrFila(asientos_derecho, asientos_izquierdo) {
   let strFila = "";
   //LOS ASIENTOS DEL LADO DERECHO
   for (let index = 0; index < asientos_derecho; index++) {
      strFila += "e"
   }
   //LOS ESPACIOS QUE SE VAN A COLOCAR ENTRE ASIENTOS DERECHOS E IZQUIERDOS
   strFila += "_"
   //ASIENTOS DEL LADO IZQUIERDO
   for (let index = 0; index < asientos_izquierdo; index++) {
      strFila += "e"
   }
   return strFila;

}

function crearFilas(strFila, asientos_derecho, asientos_izquierdo, numero_filas, filaTrasera) {
   let strTrasero = "";
   let strEspacio = "";
   let asientos_traseros;
   let miMapa = [];
   for (let index = 0; index < numero_filas; index++) {
      miMapa.push(strFila);
   }
   if (filaTrasera) {
      asientos_traseros = parseInt(asientos_derecho) + parseInt(asientos_izquierdo) + 1;
      for (let index = 0; index < asientos_traseros; index++) {
         strEspacio += "_";
         strTrasero += "e";
      }
      miMapa.push(strEspacio);
      miMapa.push(strTrasero);
   }
   return miMapa;

}
function dibujarAsientos(miMapa) {
   let firstSeatLabel = 1;
   //inicializacmos el sc
   seat_charts = $('#seat-map').seatCharts({
      map: miMapa,
      seats: {
         f: {
            price: 100,
            classes: 'first-class', //your custom CSS class
            category: 'First Class'
         },
         e: {
            price: 40,
            classes: 'economy-class', //your custom CSS class
            category: 'Economy Class'
         }

      },
      naming: {
         top: false,
         left: false,
         getLabel: function (character, row, column) {
            return firstSeatLabel++;
         },
      },
      legend: {
         node: $('#legend'),
         items: [
            ['e', 'unavailable', 'Asientos no Disponibles'],
            ['e', 'ocupado', 'Asientos ya ocupados'],
            ['e', 'selected', 'Asientos seleccionados'],
            ['e', 'available', 'Asientos Disponibles'],
         ]
      },
      click: function () {
         if (this.status() == 'available') {
            //let's create a new <li> which we'll add to the cart items
            $('<li>' + this.data().category + ' Seat # ' + this.settings.label + ': <b>$' +
               this.data().price +
               '</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
               .attr('id', 'cart-item-' + this.settings.id)
               .data('seatId', this.settings.id)
               .appendTo($cart);

            /*
             * Lets update the counter and total
             *
             * .find function will not find the current seat, because it will change its stauts only after return
             * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
             */
            $counter.text(seat_charts.find('selected').length + 1);
            $total.text(recalculateTotal(seat_charts) + this.data().price);

            return 'selected';
         } else if (this.status() == 'selected') {
            //update the counter
            $counter.text(seat_charts.find('selected').length - 1);
            //and total
            $total.text(recalculateTotal(seat_charts) - this.data().price);

            //remove the item from our cart
            $('#cart-item-' + this.settings.id).remove();

            //seat has been vacated
            return 'available';
         } else if (this.status() == 'unavailable') {
            //seat has been already booked
            return 'unavailable';
         } else {
            return this.style();
         }
      },
      focus: function () {

         if (this.status() == 'available') {
            return 'focused';
         } else {
            return this.style();
         }
      },
      blur: function () {
         return this.status();
      }
   });

}
function bloquearAsientosInavilitados(asientosBloqueados) {
   let arreglo = asientosBloqueados.split(",");
   seat_charts.get(arreglo).status('unavailable');
}
function bloquearAsientosOcupados(ocupados) {
   seat_charts.get(ocupados).status('ocupado');
}