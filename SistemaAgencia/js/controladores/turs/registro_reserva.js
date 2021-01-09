// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function () {

   const valores = window.location.search;
   const urlParams = new URLSearchParams(valores);
   const ID_TUR = urlParams.get('tur');
   const costoPasaje = $('#costoPasaje');
   const Toast = Swal.mixin();
   let $cart = $('#selected-seats');
   let $counter = $('#counter');
   let $total = $('#total');
   let DATA_ASIENTOS = [];
   let ASIENTOS_SELECCIONADOS = [];
   let tablaReserva;
   let totalReserva = 0;
   let seat_charts;
   let transporte = false;
   let CUPOS;

   inicializarComboUsuario();
   obtenerData(ID_TUR);
   inicializarTabla();

   //CUANDO HAY CAMBIOS EN EL COMBO DE ASIENTOS
   $('#comboAsiento').on('select2:select', function (e) {
      let id = e.params.data.id;
      let asiento = buscar(id);
      costoPasaje.val(asiento.pasaje);
   });
   //BOTON DE NUEVO CLIENTE
   $(document).on('click', '#btnNuevoCliente', function (evento) {
      $('#modalAgregarCliente').modal('show');
   });
   //BOTON DE GUARDAR
   $(document).on('click', '#btnguardarReserva', function (evento) {
      evento.preventDefault();//para evitar que la pagina se recargue
      if (transporte) {
         let seleccionados = seat_charts.find('e.selected').seatIds.length;//este es un arreglo
         let porElegir = 0;
         ASIENTOS_SELECCIONADOS.forEach(element => {
            porElegir += parseInt(element.cantidad) * parseInt(element.seleccionables);
         });
         if (seleccionados > CUPOS || porElegir>CUPOS)  {
            Toast.fire({
               title: 'Oops...',
               icon: 'error',
               text: `Ha seleccionado más asientos de los disponibles (${CUPOS})`,
               showConfirmButton: true,
            });
         } else {
            if (porElegir == 0) {
               Toast.fire({
                  title: 'Oops...',
                  icon: 'error',
                  text: `No se ha seleccionado ningun tipo de asiento`,
                  showConfirmButton: true,
               });
            } else {
               if (porElegir != seleccionados) {
                  Toast.fire({
                     title: 'Oops...',
                     icon: 'error',
                     text: `Debe de elegir ${porElegir} asiento(s)`,
                     showConfirmButton: true,
                  });
               } else {
                  console.log("ok")
               }

            }
         }
      } else {
         let porElegir = 0;
         ASIENTOS_SELECCIONADOS.forEach(element => {
            porElegir += parseInt(element.cantidad) * parseInt(element.seleccionables);
         });
         if (porElegir == 0) {
            Toast.fire({
               title: 'Oops...',
               icon: 'error',
               text: `No se ha seleccionado ningun tipo de asiento`,
               showConfirmButton: true,
            });
         } else {
            if (porElegir > CUPOS) {
               Toast.fire({
                  title: 'Oops...',
                  icon: 'error',
                  text: `Ha seleccionado más asientos de los disponibles (${CUPOS})`,
                  showConfirmButton: true,
               });
            } else {
               console.log("OK")
            }
         }
      }
   });
   //AGREGAR A LA TABLA
   $(document).on('click', '#btnAgregarAsiento', function () {
      let cantidad = $('#cantidadAsientos').val();
      if (cantidad) {
         let id = $('#comboAsiento').val();
         let asiento = buscar(id);
         if (!existeFila(asiento, cantidad)) {
            agregarFilaReservaViaje(asiento, cantidad);
         }
         modificarTotal();
      }

   });
   //BOTON DE ELIMINAR DE LA TABLA
   $(document).on('click', '.btn-group .btn-danger', function (evento) {
      let fila = $(this).closest("tr");
      let data = tablaReserva.row(fila).data();
      tablaReserva.row(fila).remove().draw();
      eliminarDeLista(data.id);
      modificarTotal();
   });
   function inicializarComboUsuario() {
      $.ajax({
         url: URL_SERVIDOR + "Usuario/obtenerUsuario?nivel=CLIENTE",
         method: "GET"
      }).done(function (response) {
         //REST_Controller::HTTP_OK

         let myData = [];
         if (response.usuarios) {
            let lista = response.usuarios;
            for (let index = 0; index < lista.length; index++) {

               myData.push({
                  id: lista[index].id_cliente,
                  text: lista[index].nombre
               });
            }
            $('#comboUsuario').select2(
               { data: myData }
            );
         } else {
            $('#comboUsuario').select2();
         }
      }).fail(function (response) {
         $('#comboUsuario').select2();

      }).always(function (xhr, opts) {
         $('#loadingReservaTur').hide();
      });

   }
   function obtenerData(idTour) {
      $.ajax({
         url: `${URL_SERVIDOR}TurPaquete/showReserva?id_tours=${idTour}&tipo=tur`,
         method: "GET"
      }).done(function (response) {
         console.log(response)
         if (response.cupos != "" && response.cupos != "0") {
            costoPasaje.val(response.precio);
            CUPOS = parseInt(response.cupos);
            //AGREGAMOS EL COSTO BASE
            DATA_ASIENTOS.push({
               seleccionables: "1",
               id: 0,
               pasaje: response.precio,
               titulo: "asiento normal",
            });
            let lista = response.promociones;
            for (let index = 0; index < lista.length; index++) {
               DATA_ASIENTOS.push({
                  seleccionables: lista[index].asiento,
                  id: index + 1,
                  pasaje: lista[index].pasaje,
                  titulo: lista[index].titulo,
               });
            }
            inicialComboAsientos();
            if (response.transporte != null) {
               transporte = true;
               let derecho = response.transporte.asiento_derecho;
               let izquierdo = response.transporte.asiento_izquierdo;
               let numero_filas = response.transporte.filas;
               let deshabilitados = response.transporte.asientos_deshabilitados;

               let strFila = crearStrFila(derecho, izquierdo);
               let mapa = crearFilas(strFila, derecho, izquierdo, numero_filas, true);
               dibujarAsientos(mapa);
               bloquearAsientosInavilitados(deshabilitados);
               bloquearAsientosOcupados();
            } else {
               $('#dibujoAsientos').hide();
            }
         } else {
            $('#item_asiento').hide();

            Toast.fire({
               title: 'Oops...',
               icon: 'warning',
               text: "No hay cupos disponibles",
               showConfirmButton: true,
            });
         }

      }).fail(function (response) {
         console.log("Error");
         console.log(response);


      });
   }
   function inicializarValidaciones() {
      $('#miFormulario').validate({
         rules: {
            nombre: {
               required: true,
               minlength: 3,
               maxlength: 40
            },
            coordenadas: {
               required: true,
            },
            descripcion: {
               required: true,
               minlength: 10,
            }, fotos: {
               required: true
            }, precio_sitio: {
               required: true,
               min: 0
            }
         },
         messages: {
            nombre: {
               required: "Ingrese un nombre",
               minlength: "Logitud del nombre debe ser mayor a 3",
               maxlength: "Logitud del nombre no debe exceder a 40",
            },
            coordenadas: {
               required: "Debe de proporcionar las coordenadas",

            },
            descripcion: {
               required: "La descripcion es necesaria",
               minlength: "Debe de tener una longitud minima de 10",
            }, fotos: {
               required: "Suba por lo menos 1 foto"
            }, precio_sitio: {
               required: "El precio es necesario",
               min: "Debe de ser mayor que 0"
            }

         },
         errorElement: 'span',
         errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
         },
         highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
         },
         unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');

         }
      });

      $('#formularioAgregar').validate({
         rules: {
            correoContacto: {
               email: true
            },
            nombreContacto: {
               required: true,
               minlength: 3,
            }
         },
         messages: {
            correoContacto: {
               email: "Ingrese un correo electrónico válido"
            },
            nombreContacto: {
               required: "Es necesario un nombre",
               minlength: "Debe de tener una longitud minima de 3"
            }

         },
         errorElement: 'span',
         errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
         },
         highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
         },
         unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');

         }
      });

      $('#formularioAgregarTipo').validate({
         rules: {
            nombreTipo: {
               required: true,
               minlength: 3,
            }
         },
         messages: {
            nombreTipo: {
               required: "Es necesario un nombre",
               minlength: "Debe de tener una longitud minima de 3"
            }

         },
         errorElement: 'span',
         errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
         },
         highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
         },
         unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');

         }
      });

   }
   function guardar() {
      $('#loadingReservaTur').show();
      let form = new FormData();
      let myCoordnada = document.getElementById("coordenadas").value;
      myCoordnada = myCoordnada.split(' ');

      //ESTO ES PARA L A GALERIA 
      let galeria = document.getElementById("fotos").files;
      for (let i = 0; i < galeria.length; i++) {
         form.append('fotos[]', galeria[i]);
      }
      form.append("nombre_sitio", document.getElementById("nombre").value);
      form.append("longitud", myCoordnada[0]);
      form.append("latitud", myCoordnada[1]);
      form.append("descripcion_sitio", document.getElementById("descripcion").value);
      form.append("id_tipo_sitio", document.getElementById("ComboTipo").value);
      form.append("informacion_contacto", document.getElementById("contacto_servicio").value);
      form.append("precio_sitio", document.getElementById("precio_sitio").value);

      //OCUPAR ESTA CONFIGURACION CUANDO SE ENVIAEN ARCHIVOS(FOTOS-IMAGENES)
      $.ajax({
         url: URL_SERVIDOR + "SitioTuristico/save",
         method: "POST",
         mimeType: "multipart/form-data",
         data: form,
         timeout: 0,
         processData: false,
         contentType: false,
      }).done(function (response) {
         //REST_Controller::HTTP_OK
         let respuestaDecodificada = JSON.parse(response);

         Toast.fire({
            title: 'Exito...',
            icon: 'success',
            text: respuestaDecodificada.mensaje,
            showConfirmButton: true,
         }).then((result) => {
            //TODO BIEN Y RECARGAMOS LA PAGINA 
            $("#miFormulario").trigger("reset");
         });
      }).fail(function (response) {
         //SI HUBO UN ERROR EN LA RESPUETA REST_Controller::HTTP_BAD_REQUEST
         console.log(response);


         Toast.fire({
            title: 'Oops...',
            icon: 'error',
            text: "ERROR EN EL ENVIO DE INFORMACIÓN",
            showConfirmButton: true,
         });

      }).always(function (xhr, opts) {
         $('#loadingReservaTur').hide();
      });
   }
   function inicialComboAsientos() {
      let myData = [];
      for (let index = 0; index < DATA_ASIENTOS.length; index++) {
         myData.push({
            id: DATA_ASIENTOS[index].id,
            text: DATA_ASIENTOS[index].titulo
         });
      }
      ///LE CARGAMOS LA DATA 
      $('#comboAsiento').select2({ data: myData });
   }
   function buscar(idBuscado) {
      return DATA_ASIENTOS.find(asientos => asientos.id == idBuscado);
   }
   function inicializarTabla() {
      tablaReserva = $("#tablaAsientos").DataTable({
         responsive: true,
         autoWidth: false,
         deferRender: true,
         columns: [
            { data: "id" },
            { data: "tipo" },
            { data: "costo" },
            { data: "cantidad" },
            { data: "subTotal" },
            { data: "eliminar" },
         ]
      });

   }
   function agregarFilaReservaViaje(asiento, cantidad) {
      let subTotal = (asiento.pasaje * cantidad).toFixed(2);
      let html = "";
      html += '<td>';
      html += '    <div class="btn-group">';
      html += '        <button type="button" name="" class="btn btn-danger" data-toggle="modal"';
      html += '            data-target="#modal-eliminar">';
      html += '            <i class="fas fa-trash" style="color: white"></i>';
      html += '        </button>';
      html += '    </div>';
      html += '</td>';
      let nuevoAsiento = {
         id: asiento.id,
         tipo: asiento.titulo,
         costo: asiento.pasaje,
         cantidad: cantidad,
         subTotal: subTotal,
         eliminar: html,
         seleccionables: asiento.seleccionables
      };
      ASIENTOS_SELECCIONADOS = [...ASIENTOS_SELECCIONADOS, nuevoAsiento];
      tablaReserva.row.add(nuevoAsiento).draw(false);
      //PARA ORDENAR LA TABLA
      //tabla.order([6, 'desc']).draw();
   }
   function existeFila(asiento, cantidad) {
      let encontrado = false;
      tablaReserva.rows().every(function (value, index) {
         let data = this.data();
         if (asiento.id == data.id) {
            let subTotal = (asiento.pasaje * cantidad).toFixed(2);
            data.cantidad = cantidad;
            data.subTotal = subTotal;
            encontrado = true;
            this.data(data).draw(false);
            let asientoEncontrado = buscar(asiento.id);
            asientoEncontrado.cantidad = cantidad;
         }
      });

      return encontrado;

   }
   function modificarTotal() {
      totalReserva = 0.0;
      let porElegir = 0;
      ASIENTOS_SELECCIONADOS.forEach((element) => {
         totalReserva += parseFloat(element.subTotal);
         porElegir += parseInt(element.cantidad) * parseInt(element.seleccionables);
      });
      $('#totalPago').html('$' + totalReserva);
      $('#asientosAReservar').html(porElegir);
   }
   function eliminarDeLista(id) {
      ASIENTOS_SELECCIONADOS = ASIENTOS_SELECCIONADOS.filter((item) => {
         return item.id !== id
      });

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
   function borrarTodo() {
      $('.seatCharts-row').remove();
      $('.seatCharts-legendItem').remove();
      $('#seat-map,#seat-map *').unbind().removeData();

   }
   function recalculateTotal(sc) {
      var total = 0;

      //basically find every selected seat and sum its price
      sc.find('selected').each(function () {
         total += this.data().price;
      });

      return total;
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
   function bloquearAsientosInavilitados(asientosBloqueados) {
      let arreglo = asientosBloqueados.split(",");
      seat_charts.get(arreglo).status('unavailable');
   }
   function bloquearAsientosOcupados() {
      seat_charts.get(["1_2"]).status('ocupado');
   }
});