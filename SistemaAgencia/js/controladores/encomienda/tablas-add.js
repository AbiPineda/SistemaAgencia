$(document).ready(function () {

    inicializarValidacionesGuardar();

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

    });

    //AGREGANDO LA INFORMACION DE UN TUR A LA TABLA
    $(document).on('click', '#agregarTabla', function (evento) {


        evento.preventDefault();
        $('#agregarTabla').attr("disabled", true);
        //verifiacando que existe un precio
        let costo = $('#costo').val();
        let cantidad = $('#cantidad').val();
        //alert(cantidad);
        if (!costo) {
            //     errors = { precio_sitio: "Digite precio" };
            //$("#miFormulario").validate().showErrors(errors);
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
        form1.validate();
        form.validate();
        if (form.valid()) {
            if (form1.valid()) {
                 guardar();   
            }
        
       } 
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
                title: 'Oops...',
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
        
        tabla.rows().every(function (value, index) {
            let data = this.data();
           
            let id_producto = data[5];
            let cantidad = data[2];
            let sub_total = data[3];
                 
                detalle_encomienda.push({
                    "id_producto": id_producto,
                    "cantidad": cantidad,
                    "sub_total": sub_total
                });
            
        });
       
        form.append("direccion",          document.getElementById("direccion").value);
        form.append("punto_referencia",   document.getElementById("punto_referencia").value);
        form.append("fecha",              document.getElementById("fecha").value);
        form.append("estado",              document.getElementById("estado").value);
        form.append("total_encomienda",   TOTAL);
        form.append("total_comision",     COMISION);
        form.append("total_cliente",     (TOTAL+COMISION));
        form.append("id_usuario",          document.getElementById("cliente").value);
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
});