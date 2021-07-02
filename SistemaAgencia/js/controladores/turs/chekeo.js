$(document).ready(function () {
   let explorer = $("#kv-explorer");
   let idSeleccionado;
   let tabla;
   const valores = window.location.search;
   const urlParams = new URLSearchParams(valores);
   let ID_TOUR = urlParams.get('viaje');
   inicializarTabla();

   //BOTON EDITAR LA CHEQUEO
   $(document).on('click', '.btn-group .btn-success', function () {
      $('#modal-chekeo').modal('show');
      let fila = $(this).closest("tr");
      let data = tabla.row(fila).data();

      let cajaRequisitos = document.getElementById("cajaRequisitos");
      cajaRequisitos.appendChild(createDiv(""));
      // data.chequeo.forEach(element => {
      //    console.log(element);
      // });

   });

   function createDiv(data) {
      let div = document.createElement('div');
      // div.className.add("custom-control custom-checkbox");
      div.className= "custom-control custom-checkbox";
      div.append(createInput("Dui"));
      div.append(createLabel("Dui"));
      return div;
   }

   function createInput(requisito) {
      let input = document.createElement('input');
      input.className = 'custom-control-input';
      input.type = 'checkbox';
      input.id = requisito;
      input.value = requisito;
      return input;
   }
   function createLabel(requisito) {
      let label = document.createElement('label');
      label.className =('custom-control-label');
      label.type = 'checkbox';
      label.innerHTML = requisito;
      return label;
   }

   function inicializarTabla() {
      tabla = $("#tabla_servicios").DataTable({
         responsive: true,
         autoWidth: false,
         deferRender: true,
         // order: [[4, "desc"]],
         columnDefs: [
            // { "className": "dt-center", "targets": "_all" },
            // { "targets": [5], "visible": false },
            { "targets": [3], width: "30%" },

         ],
         ajax: {
            url: URL_SERVIDOR + "TurPaquete/analitica?id_tours=" + ID_TOUR,
            method: "GET",
            dataSrc: function (json) {
               //PARA CONPROVAR QUE EL SERVICIO EXISTE
               if (json) {
                  $('#loading').hide();

                  json.reservas.forEach(reserva => {
                     html = "";
                     html += '<td>';
                     html += '    <div class="btn-group">';
                     html += '        <button type="button" name="" class="btn btn-success" data-toggle="modal"';
                     html += '            data-target="">';
                     html += '            <i class="fas fa-check-circle" style="color: white"></i>';
                     html += '        </button>';
                     html += '    </div>';
                     html += '</td>';
                     reserva.boton = html;
                  });
                  return json.reservas;
               } else {
                  $('#loading').hide();
                  return [];
               }
            }
         },
         columns: [
            { data: "boton" },
            { data: "nombre" },
            { data: "label_asiento" },
            { data: "descripcionProducto" },
            { data: "tipo" },
         ]
      });

   }

});