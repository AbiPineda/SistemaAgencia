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


 let tabla =  $('#TablaCostos').DataTable({
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
         nombre : reserva.nombre, 
         label_asiento : reserva.label_asiento, 
         descripcionProducto : reserva.descripcionProducto, 
         monto : reserva.monto, 
         formaPagoUtilizada : reserva.formaPagoUtilizada, 

      }).draw(false);;
   });
}