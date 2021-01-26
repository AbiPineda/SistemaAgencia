$(document).ready(function () {
   let ID_TUR;
   let ARR_TUR = [];

   inicializarViajes();
   //BOTON DE MOSTRAR CARACTERISTICAS
   $(document).on('click', '.btn-primary', function () {
      ID_TUR = $(this).attr("name");
      let data = obtenerViaje(ID_TUR);
      console.log(data);


      if (data.galeria) {
         let fotos = data.galeria;
         let imagenGrande = document.getElementById('imagenGrande');
         imagenGrande.innerHTML = '';
         for (let index = 0; index < fotos.length; index++) {
            if (index == 0) {
               let imgBig = document.createElement("img");
               imgBig.className = "product-image";
               imgBig.src = fotos[index].foto_path;
               imagenGrande.appendChild(imgBig);
               let crear = $('#' + index);
               crear.empty();
               crear.append('<img src="' + fotos[index].foto_path + '" alt="">');
            } else {
               let crear = $('#' + index);
               crear.empty();
               crear.append('<img src="' + fotos[index].foto_path + '" alt="">');

            }
         }
         for (let i = fotos.length; i <= 10; i++) {
            //alert('aqui estoy');
            $('#' + i).remove();
         }

      }

      $('#precio').text("Asiento Normal $" + data.precio);
      $('#titulo').text(data.nombreTours);
      $('#descripcion_tur').html(data.descripcion_tur);
      let fechaSalida = moment(data.start);
      $('#fecha').text(fechaSalida.locale('es').format('LL'));
      $('#cupos').text(data.cupos_disponibles);

      data.incluye.forEach(element => {
         $('#incluye').append(`<p>✔️ ${element}</p>`);
      });
      data.no_incluye.forEach(element => {
         $('#no-incluye').append(`<p>❌ ${element}</p>`);
      });
      data.requisitos.forEach(element => {
         $('#requisito').append(`<p>📝 ${element}</p>`);
      });
      data.promociones.forEach(element => {
         $('#promocion').append(`<p>💺 ${element.titulo} 💲 <strong>${element.pasaje}</strong></p>`);
      });


   });


   function inicializarViajes() {
      $.ajax({
         url: URL_SERVIDOR + "TurPaquete/show?estado=1&tipo=tur",
         method: "GET"
      }).done(function (response) {
         let contenedor = $('#contenedorAutos');
         if (response) {
            ARR_TUR = response;

            for (let index = 0; index < ARR_TUR.length; index++) {
               let html = "";
               html += '<div class="col-xs-6 col-sm-4">';
               html += '    <div class="fall-item fall-effect">';
               html += '        <img  src="' + ARR_TUR[index].foto + '" />';
               html += '        <div class="mask">';
               html += '            <h4 id="">' + ARR_TUR[index].nombreTours + '</h4>';
               html += '            <br>';
               html += '            <div> Fecha: ' + ARR_TUR[index].start + '</div>';
               html += '            <p> Precio $' + ARR_TUR[index].precio + '</p>';
               html += '           <button type="button" name="' + ARR_TUR[index].id_tours + '" class="btn btn-primary" data-toggle="modal"';
               html += '            data-target="#modal-editar">Detalles</button>';
               html += '        </div>';
               html += '    </div>';
               html += '    <h4 class="text-center"></h4>';
               html += '</div>';
               contenedor.append(html);
            }
         }
      }).fail(function (response) {
         console.log(response);

      });
   }
   function obtenerViaje(idBuscado) {
      return ARR_TUR.find((viaje) => viaje.id_tours == idBuscado);
   }

   function name(params) {
      document.getElementById("addToDo").addEventListener("keyup", function todoList() {
         var item = document.getElementById("addToDo").value;
         var text = document.createTextNode(item);
         var newItem = document.createElement("li");
         var span = document.createElement("span");
         var itag = document.createElement("i");
         itag.className = "fa fa-trash";
         span.appendChild(itag);
         newItem.appendChild(span);
         newItem.appendChild(text);

         if (event.keyCode === 13) { //keycode de tecla enter
            document.querySelector("ul").appendChild(newItem);
         }
      });
   }


});