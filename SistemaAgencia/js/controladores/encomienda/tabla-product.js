$(document).ready(function () {
    let id_pregunta;
    let tabla;

    //inicializarValidaciones();
   // inicializarCombo()
   // inicializarComboRama();
    inicializarTabla();
  
    //BOTON DE EDITAR
    $(document).on('click', '.btn-group .btn-primary', function () {
        id_producto = $(this).attr("name");

         fila = $(this).closest("tr");

        producto         = fila.find('td:eq(0)').text();
        tarifa           = fila.find('td:eq(1)').text();
        unidades_medidas = fila.find('td:eq(2)').text();

        document.getElementById("producto").value = producto;
        document.getElementById("tarifa").value   = tarifa;
        document.getElementById("unidades").value = unidades_medidas;
         document.getElementById("id_producto").value = id_producto;

        $('#modificacion-producto').modal('show');
       $('#loadingActualizar').hide(); 
    
    });

    //BOTON PARA DAR DE ALTA EL PRODUCTO
    $(document).on('click', '.btn-group .btn-success', function (evento) {
        idproducto = $(this).attr("name");
        fila = $(this).closest("tr");

        const Toast = Swal.mixin();
        Swal.fire({
            title: '¿Estas seguro?',
            text: "Se dara de alta este producto!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí!'
        }).then((result) => {
            console.log(result);
            if (result.value) {
                alta();
            }
        })
    });
   
    //BOTON PARA DAR DE BAJA EL PRODUCTO
    $(document).on('click', '.btn-group .btn-danger', function (evento) {
        idproducto = $(this).attr("name");
        fila = $(this).closest("tr");

        const Toast = Swal.mixin();
        Swal.fire({
            title: '¿Estas seguro?',
            text: "Se dara de baja este producto!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí!'
        }).then((result) => {
            console.log(result);
            if (result.value) {
                baja();
            }
        })
    });
    //BOTON PARA ACTUALIZAR
    $(document).on('click', '#btnActualizarProducto', function (evento) {
        evento.preventDefault(); //para evitar que la pagina se recargue
        let form = $("#register-form");
        form.validate();
          if (form.valid()) {
            actualizar();
        }
    });
   

    function inicializarTabla() {
        tabla = $("#tabla_productosMo").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "ajax": {
                "url": URL_SERVIDOR + "Producto/productosTabla",
                "method": "GET",
                "dataSrc": function (json) {
                    //console.log(json.preguntas);

                    if (json.product) {
                        for (let i = 0, ien = json.product.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.product[i].id_producto+'" class="btn btn-primary" data-toggle="modal"';
                            html += '         data-target="#modal-editar">';
                            html += '            <i class="fas fa-edit" style="color: white"></i>';
                            html += '        </button>';
                            if (json.product[i].estado_producto ==1) {

                            html += '        <button type="button" name="' + json.product[i].id_producto+ '" class="btn btn-danger">';
                            html += '            <i class="fas fa-arrow-down" style="color: white"></i>';
                            html += '        </button>';

                            }else{

                            html += '        <button type="button" name="' + json.product[i].id_producto+ '" class="btn btn-success">';
                            html += '            <i class="fas fa-arrow-up" style="color: white"></i>';
                            html += '        </button>';
                           
                            }
                            html += '    </div>';
                            html += '</td>';
                            json.product[i]["botones"] = html;

                        }
                        $('#loading').hide();
                        return json.product;
                    } else {
                        $('#loading').hide();
                        return [];
                    }
                }
            },
            columns: [
                { data: "nombre_producto" },
                { data: "tarifa" },
                { data: "unidades_medidas" },
                { data: "botones" },
            ]
        });

    }
    function inicializarValidaciones() {
        $('#register-form').validate({

            rules: {
                id_rama:{
                    required: true
                },
                pregunta: {
                    minlength: 10
                },
                "opcion_respuesta[]": {
                   required: true
                }
            },
            messages: {
                id_rama:{
                    required:"Seleccione una rama"
                },
                 pregunta:{
                    minlength: "Lapregunta debe de tener una longitud minima de 10"
                },
                "opcion_respuesta[]": {
                    required: "Seleccione las opciones de respuestas, puede agregar más, pulse el botón agregar más"
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
    function actualizar() {
        $('#loadingActualizar').show();
        $.ajax({
            url: URL_SERVIDOR + "Producto/updateProducto",
            method: "POST",
            timeout: 0,
            data:$('#register-form').serialize()
        }).done(function (response) {
            //REST_Controller::HTTP_OK
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: response.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                $('#modificacion-producto').modal('hide');;
                tabla.ajax.reload(null, false);
            });
        }).fail(function (response) {
            console.log(response);

            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: "ERROR EN ENVIO DE INFORMACION",
                showConfirmButton: true,
            });

        }).always(function (xhr, opts) {
            $('#loadingActualizar').hide();
        });
    }


     function alta() {
        let data = {
            "id_producto": idproducto
        };
        $.ajax({
            url: URL_SERVIDOR + "Producto/altaProducto",
            method: "DELETE",
            timeout: 0,
            data: data
        }).done(function (response) {
            //REST_Controller::HTTP_OK
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: response.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                tabla.ajax.reload(null, false);
            });
        }).fail(function (response) {

            console.log(response);
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text:response.mensaje,
                showConfirmButton: true,
            });

        }).always(function (xhr, opts) {
            $('#loadingActualizar').hide();
        });
    }


    function baja() {
        let data = {
            "id_producto": idproducto
        };
        $.ajax({
            url: URL_SERVIDOR + "Producto/deleteProducto",
            method: "DELETE",
            timeout: 0,
            data: data
        }).done(function (response) {
            //REST_Controller::HTTP_OK
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: response.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                tabla.ajax.reload(null, false);
            });
        }).fail(function (response) {

            console.log(response);
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text:response.mensaje,
                showConfirmButton: true,
            });

        }).always(function (xhr, opts) {
            $('#loadingActualizar').hide();
        });
    }
 
});

   