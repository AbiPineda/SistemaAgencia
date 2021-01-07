// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function () {

   const valores = window.location.search;
   const urlParams = new URLSearchParams(valores);
   const ID_TUR = urlParams.get('tur');
   const costoPasaje = $('#costoPasaje');
   let DATA_ASIENTOS = [];
   let tablaReserva;
   let total = 0;
   let ASIENTOS_SELECCIONADOS = [];
   inicializarComboUsuario();
   obtenerData(ID_TUR);
   inicializarTabla();

   //CUANDO HAY CAMBIOS EN EL COMBO DE ASIENTOS
   $('#comboAsiento').on('select2:select', function (e) {
      let id = e.params.data.id;
      let asiento = buscar(id);
      costoPasaje.val(asiento.pasaje);
   });
   // //BOTON PARA AGREGAR UN NUEVO CONTACTO 
   $(document).on('click', '#btnAgregar', function (evento) {
      evento.preventDefault();//para evitar que la pagina se recargue
      let form = $("#formularioAgregar");
      form.validate();
      if (form.valid()) {
         guardarContacto();
      }
   });
   //BOTON PARA AGREGAR UN NUEVO TIPO 
   $(document).on('click', '#btnAgregarTipo', function (evento) {
      evento.preventDefault();//para evitar que la pagina se recargue
      let form = $("#formularioAgregarTipo");
      form.validate();
      if (form.valid()) {
         guardarTipo();
      }
   });
   //BOTON DE NUEVO CLIENTE
   $(document).on('click', '#btnNuevoCliente', function (evento) {
      $('#modalAgregarCliente').modal('show');
   });
   //BOTON DE GUARDAR
   $(document).on('click', '#btnguardar', function (evento) {
      evento.preventDefault();//para evitar que la pagina se recargue
      let form = $("#miFormulario");
      let coordenadas = $('#coordenadas').val();
      form.validate();
      if (form.valid() && coordenadas) {
         guardar();
      } else {
         if (!coordenadas) {
            errors = { coordenadas: "No ha seleccionada las coordenadas" };
            $("#miFormulario").validate().showErrors(errors);
         }
         const Toast = Swal.mixin();
         Toast.fire({
            title: 'Exito...',
            icon: 'error',
            text: "Complete los campos",
            showConfirmButton: true,
         });
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
         console.log(ASIENTOS_SELECCIONADOS);
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
         //AGREGAMOS EL COSTO BASE
         DATA_ASIENTOS.push({
            asiento: "1",
            id: 0,
            pasaje: response.precio,
            titulo: "asiento normal",
         });
         let lista = response.promociones;
         for (let index = 0; index < lista.length; index++) {
            DATA_ASIENTOS.push({
               asiento: lista[index].asiento,
               id: index + 1,
               pasaje: lista[index].pasaje,
               titulo: lista[index].titulo,
            });
         }
         costoPasaje.val(response.precio);
         inicialComboAsientos();

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
         const Toast = Swal.mixin();
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

         const Toast = Swal.mixin();
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
   }
   function eliminarDeLista(id) {
      ASIENTOS_SELECCIONADOS = ASIENTOS_SELECCIONADOS.filter((item) => {

         return item.id !== id
      });

   }
});