$(document).ready(function () {
   let isCompletyCheck = true;
   let tabla;
   const valores = window.location.search;
   const urlParams = new URLSearchParams(valores);
   let ID_TOUR = urlParams.get('viaje');
   inicializarTabla();

   //BOTON EDITAR LA CHEQUEO
   $(document).on('click', '.btn-group .btn-success, .btn-group .btn-secondary', function () {
      $('#modal-chekeo').modal('show');
      let fila = $(this).closest("tr");
      let data = tabla.row(fila).data();
      let cajaRequisitos = document.getElementById("cajaRequisitos");
      data.chequeo.forEach(req => {
         cajaRequisitos.appendChild(createDiv(req));
      });
   });
   //CUANDO EL MODAL SE CIERRA
   $('#modal-chekeo').on('hidden.bs.modal', function (e) {
      document.getElementById('cajaRequisitos').innerHTML = "";
   })
   // BOTON DE ACUALIZAR
   $(document).on('click', '#btnActualizar', function (evento) {
      evento.preventDefault();
      let chequeo = [];
      let prechequeo = $("input[name='prechequeo[]']").map(function () { return $(this).val(); }).get();
      prechequeo.forEach(element => {
         let obj = {};
         obj["estado"] = document.getElementById(element).checked;
         obj["requisito"] = element;
         chequeo.push(obj);
      });
      actualizarChequeo(chequeo);


   });

   function createDiv(data) {
      let div = document.createElement('div');
      div.className = "custom-control custom-checkbox";
      div.append(createInput(data.requisito, data.estado));
      div.append(createLabel(data.requisito));
      return div;
   }
   function createInput(requisito, estado) {
      let input = document.createElement('input');
      input.className = 'custom-control-input';
      input.type = 'checkbox';
      input.id = requisito;
      input.value = requisito;
      input.checked = estado;
      input.name = 'prechequeo[]'
      return input;
   }
   function createLabel(requisito) {
      let label = document.createElement('label');
      label.className = ('custom-control-label');
      label.type = 'checkbox';
      label.innerHTML = requisito;
      label.htmlFor = requisito;
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

                     reserva.chequeo.forEach(requisito => {
                        //  si alguno de los elementos esta en false sera un boton griss
                        if (!requisito.estado) { isCompletyCheck = false; return }
                     });
                     if (isCompletyCheck) {
                        html += '        <button type="button" name="" class="btn btn-success" data-toggle="modal"';
                     } else {
                        html += '        <button type="button" name="" class="btn btn-secondary" data-toggle="modal"';
                     }
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
   function actualizarChequeo(chequeo) {

      let form = new FormData();
      form.append("id_tours", ID_TOUR);
      form.append("chequeo", JSON.stringify(chequeo));
      //OCUPAR ESTA CONFIGURACION CUANDO SE ENVIAEN ARCHIVOS(FOTOS-IMAGENES)
      $.ajax({
         url: URL_SERVIDOR + "TurPaquete/update",
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



      });




   }
});