$(document).ready(function () {

    inicializarValidacionesGuardar();
    inicializarGaleria();
    inicializarFoto();
    telefono();

    let contadorTabla = 0;
    let TOTAL = 0.0;
    let COMISION = 0.0;
    let TOTALCLIENTE = 0.0;
    // let cantidad = document.getElementById("cantidad");
    let tabla = $('#add-tabla').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "pageLength": 3,
        "responsive": true,
        "columnDefs":[
        {"className":"dt-center","targets":"_all"},
        {"targets":[5], "visible":false},
        {"targets":[6], "visible":false},
        ]

    });

    //AGREGANDO LA INFORMACION DE UN TUR A LA TABLA
    $(document).on('click', '#agregarTabla', function (evento) {


        evento.preventDefault();
        $('#agregarTabla').attr("disabled", true);
        //verifiacando que existe un precio
        let costo = $('#costo').val();
        let cantidad = $('#cantidad').val();
        //alert(cantidad);
        if (!cantidad) {
                errors = { cantidad: "Digite la cantidad" };
                $("#encomienda-form").validate().showErrors(errors);
        } else {

            let id = document.getElementById("id_producto").value;
            let combo = document.getElementById("id_producto");
            let nombre = combo.options[combo.selectedIndex].text;

            agregarFila(nombre, costo, cantidad, id);


        }
    });

    function agregarFila(nombre, costo, cantidad, id) {

        if (!ExisteFila(id, cantidad, costo)) {

            let subTotoal = (costo * cantidad).toFixed(2);
            let html = "";
            html += '<td>';
            html += '    <div class="btn-group">';
            html += '        <button type="button" name="" class="btn btn-danger" data-toggle="modal"';
            html += '            data-target="#modal-eliminar">';
            html += '            <i class="fas fa-trash" style="color: white"></i>';
            html += '        </button>';
            html += '    </div>';
            html += '</td>';
            tabla.row.add([nombre, costo, cantidad, subTotoal, html, id, contadorTabla]).draw(false);
            //PARA ORDENAR LA TABLA
            tabla.order([6, 'desc']).draw();
            contadorTabla++;
        }
        modificarTotal();
        modificarComision();
        modificarTotalCliente();
    }
    function ExisteFila(id, cantidad, costo) {
        let encontrado = false;
        tabla.rows().every(function (value, index) {
            let data = this.data();
            if (id == data[5]) {
                let subTotoal = (costo * cantidad).toFixed(2);
                data[2] = cantidad;
                data[3] = subTotoal;
                encontrado = true;
                this.data(data).draw(false);
            }
        });
        return encontrado;


    }
    function modificarTotal() {
        TOTAL = 0.0;
        tabla.rows().every(function (value, index) {
            let data = this.data();
            TOTAL += parseFloat(data[3]);
        });
        $('#total').empty();
        $('#total').text("$" + TOTAL);
    }
    function modificarComision() {
        let porcentaje = (parseInt($('#porcenaje').val())) / 100;
        COMISION = porcentaje * TOTAL;
        $('#comision').empty();
        $('#comision').text("$" + COMISION);
    }
    function modificarTotalCliente() {

        $('#totalCliente').empty();
        $('#totalCliente').text("$" + (TOTAL + COMISION));
    }
    //BOTON DE ELIMINAR
    $(document).on('click', '.btn-group .btn-danger', function (evento) {

        tabla.row($(this).parents('tr')).remove().draw();
        modificarTotal();
        modificarComision();
        modificarTotalCliente();
    });
    //CAMBIOS EN EL INPUT DE PORCENTAJE
    $(document).on('keyup mouseup', '#porcenaje', function () {
        modificarComision();
        modificarTotalCliente();
    });

 //BOTON DE GUARDAR 
    $(document).on('click', '#btnguardar', function (evento) {
        evento.preventDefault();//para evitar que la pagina se recargue
       let form = $("#cliente-form");
       let form1 = $("#encomienda-form");
        //form1.validate();
        //form.validate();
        //if (form.valid()) {
           // if (form1.valid()) {
                 guardar();   
            //}
        
       //} 
    });

    function inicializarValidacionesGuardar() {
    $('#cliente-form').validate({

            rules: {
                id_cliente: {
                   required: true
                }
            },
            messages: {
                id_cliente: {
                    required: "Seleccione el cliente"
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

        $('#encomienda-form').validate({

            rules: {
                direccion: {
                    required:true,
                    minlength: 10
                },
                punto_referencia: {
                    required:true,
                    minlength: 10
                },
                fecha: {
                   required: true
                }
            },
            messages: {
                direccion:{
                    required:"Digite la dirección",
                    minlength: "La dirección debe de tener una longitud minima de 10"
                },
                punto_referencia:{
                    required:"Digite el punto de referencia",
                    minlength: "El punto referencia debe de tener una longitud minima de 10"
                },
                fecha: {
                    required: "Digite la fecha"
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
        $('#loading').show();
        let form = obtenerData();

        //OCUPAR ESTA CONFIGURACION CUANDO SE ENVIAEN ARCHIVOS(FOTOS-IMAGENES)
        $.ajax({
            url: URL_SERVIDOR + "Encomienda/encomiendas",
            method: "POST",
            mimeType: "multipart/form-data",
            data: form,
            timeout: 0,
            processData: false,
            contentType: false,
        }).done(function (response) {
            console.log(response);
            
           const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: "Registro Guardado",
                showConfirmButton: true,
            }).then((result) => {
                //TODO BIEN Y RECARGAMOS LA PAGINA 
                $("#encomienda-form").trigger("reset");
                resetMiTable();
            });
            
        }).fail(function (response) {
            //SI HUBO UN ERROR EN LA RESPUETA REST_Controller::HTTP_BAD_REQUEST
            console.log(response);

            /*const Toast = Swal.mixin();
            Toast.fire({
                title: 'Error',
                icon: 'error',
                text: "ERROR EN EL ENVIO DE INFORMACIÓN",
                showConfirmButton: true,
            });*/

        }).always(function (xhr, opts) {
            $('#loading').hide();
        });
    }

     function obtenerData() {
        let form = new FormData();
         let detalle_encomienda = [];
         let nombre_cliente_destino  = document.getElementById("cliente_des").value;
         let telefono                = document.getElementById("telefono_des").value;
         let ciudad_destino          = document.getElementById("ciudad_des").value;
         let codigo_postal_destino   = document.getElementById("codigo_des").value;
         let direccion_destino       = document.getElementById("direccion").value;
         let alterna_destino         = document.getElementById("direccion_alterna").value;
        
        tabla.rows().every(function (value, index) {
            let data = this.data();
           
            let id_producto = data[5];
            let cantidad = data[2];
            let sub_total = data[3];
                 
                detalle_encomienda.push({
                    "id_producto": id_producto,
                    "cantidad": cantidad,
                    "sub_total": sub_total,
                    "nombre_cliente_destino":nombre_cliente_destino,
                    "telefono": telefono,
                    "ciudad_destino": ciudad_destino,
                    "codigo_postal_destino": codigo_postal_destino,
                    "direccion_destino": direccion_destino,
                    "alterna_destino": alterna_destino
                });
            
        });
       
        form.append("ciudad_origen",          document.getElementById("ciudad").value);
        form.append("codigo_postal_origen",   document.getElementById("codigo").value);
        form.append("fecha",              document.getElementById("fecha").value);
        form.append("estado",              document.getElementById("estado").value);
        form.append("total_encomienda",   TOTAL);
        form.append("total_comision",     COMISION);
        form.append("total_cliente",     (TOTAL+COMISION));
        form.append("id_usuario",          document.getElementById("comboUsuario").value);
        form.append("detalle_encomienda", JSON.stringify(detalle_encomienda));
       

        return form;

    }

     function resetMiTable() {
        contadorTabla = 0;
        TOTAL = 0.0;
        COMISION = 0.0;
        TOTALCLIENTE = 0.0;
        tabla.clear().draw();
        $('#total').text("$0");
        $('#comision').text("$0");
        $('#totalCliente').text("$0");
    }


    function inicializarGaleria() {
        // ESTO ES PARA INICIALIZAR EL ELEMENTO DE SUBIDA DE FOTOS (EN ESTE CASO UNA GALERIA )
        $('#fotos').fileinput({
            theme: 'fas',
            language: 'es',
            //uploadUrl: '#',
            showUpload: false,
            //showCaption: false,
            maxFileSize: 2000,
            maxFilesNum: 10,
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            required: true,
            uploadAsync: false,
            showClose: false,
        });
    }

    function inicializarFoto() {
        // ESTO ES PARA INICIALIZAR EL ELEMENTO DE SUBIDA DE UNA UNICA FOTO
        $('#foto').fileinput({
            theme: 'fas',
            language: 'es',
            required: true,
            maxFileSize: 2000,
            maxFilesNum: 10,
            showUpload: false,
            showClose: false,
            showCaption: true,
            browseLabel: '',
            removeLabel: '',
            //removeIcon: '<i class="glyphicon glyphicon-remove"></i>',
            removeTitle: 'Cancel or reset changes',
            elErrorContainer: '#kv-avatar-errors-1',
            msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<img src="../../img/avatar.png" alt="Your Avatar">',
            layoutTemplates: { main2: '{preview} {remove} {browse}' },
            allowedFileExtensions: ["jpg", "png", "gif"]
        });
    }

    //funcion para cargar el celular en el input
    function telefono(){

    $("#comboUsuario").change(function () {
           var id = document.getElementById("comboUsuario").value;
          
    $.ajax({
        url: URL_SERVIDOR + "Usuario/obtenerUsuario?nivel=CLIENTE&id_cliente="+id,
        method: 'GET'

    }).done(function(response) {
        $.each(response.usuarios, function(i, index) {
            $("#telefono").val(index.celular);  

        });

        


    }).fail(function(response) {
        const Toast = Swal.mixin();
        Toast.fire({
            title: 'Error',
            icon: 'error',
            text: response.mensaje,
            showConfirmButton: true,
        });

         });


             });

    }

});