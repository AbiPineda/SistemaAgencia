const valores = window.location.search;
const urlParams = new URLSearchParams(valores);
let ID_TUR = urlParams.get('tur');

init();
// BOTON DE IMPRIMIR
document.getElementById("doPrint").onclick = function () {
   printElement(document.getElementById("printDiv"));
}

function printElement(elem) {
   var domClone = elem.cloneNode(true);

   var $printSection = document.getElementById("printSection");

   if (!$printSection) {
      var $printSection = document.createElement("div");
      $printSection.id = "printSection";
      document.body.appendChild($printSection);
   }

   $printSection.innerHTML = "";
   $printSection.appendChild(domClone);
   window.print();
}

function init() {
   $.ajax({
      url: URL_SERVIDOR + "TurPaquete/analitica?id_tours=" + ID_TUR,
      method: "GET"
   }).done(function (response) {
      // //CARGAMOS EL COSTO AL INPUT
      document.getElementById("nombreTours").value = response.nombre;
      $('#totalIngresos').text(`$ ${response.totalIngresos}`);
      inicializarCalendario(response.start, response.end);
      inicializarTablaIngresos(response.reservas);
      crearTransporte(response.transporte, response.ocupados);
      inicializarTablaGastos(response.sitios, response.servicios, response.tatalPasajeros);
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
function inicializarTablaIngresos(reservas) {
   let tabla = $('#TablaIngresos').DataTable({
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
function inicializarTablaGastos(sitios, servicios, tatalPasajeros) {
   let totalGastos = 0.0;
   let tabla = $('#TablaGastos').DataTable({
      responsive: true,
      autoWidth: false,
      deferRender: true,
      columns: [
         { data: "nombre" },
         { data: "costo" },
         { data: "cantidad" },
         { data: "subTotal" },

      ]
   });
   servicios.forEach(servicio => {
      let cantidad = (servicio.por_usuario == "0") ? 1 : tatalPasajeros;
      subTotal = cantidad * servicio.costo;
      totalGastos += subTotal;
      tabla.row.add({
         nombre: servicio.nombre_servicio,
         costo: servicio.costo,
         cantidad: cantidad,
         subTotal: subTotal
      }).draw(false);
   });

   sitios.forEach(sitio => {
      let cantidad = (sitio.por_usuario == "0") ? 1 : tatalPasajeros;
      subTotal = cantidad * sitio.costo;
      totalGastos += subTotal;
      tabla.row.add({
         nombre: sitio.nombre_sitio,
         costo: sitio.costo,
         cantidad: cantidad,
         subTotal: subTotal
      }).draw(false);
   });
   console.log(totalGastos);
}

function crearTransporte(transporte, ocupados) {
   if (transporte != null) {

      let derecho = transporte.asiento_derecho;
      let izquierdo = transporte.asiento_izquierdo;
      let numero_filas = transporte.filas;
      let deshabilitados = transporte.asientos_deshabilitados;

      let strFila = crearStrFila(derecho, izquierdo);

      let mapa = crearFilas(strFila, derecho, izquierdo, numero_filas, true);
      dibujarAsientos(mapa);
      bloquearAsientosOcupados(ocupados);
      bloquearAsientosInavilitados(deshabilitados);
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
            // ['e', 'selected', 'Asientos seleccionados'],
            ['e', 'available', 'Asientos Disponibles'],
         ]
      },
      click: function () {
         return this.status();
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
   seat_charts.get(asientosBloqueados).status('unavailable');
}
function bloquearAsientosOcupados(ocupados) {
   seat_charts.get(ocupados).status('ocupado');
}