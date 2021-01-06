// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function () {

    let contadorTabla = 0;
    let TOTAL = 0.0;
    let COMISION = 0.0;
    let TOTALCLIENTE = 0.0;

    const valores = window.location.search;
    const urlParams = new URLSearchParams(valores);
    let ID_ENCOMIENDA = urlParams.get('en');
    let tabla;

    mostrarDatos();
    inicializarTabla();

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
            let nombre_producto = combo.options[combo.selectedIndex].text;
            agregarFila(nombre_producto, costo, cantidad, id);


        }
    });


    function mostrarDatos() {

        $.ajax({
            url: URL_SERVIDOR + 'Encomienda/encomiendaModificar?id_encomienda=' + ID_ENCOMIENDA,
            method: "GET"
        }).done(function (response) {
            $.each(response.Encomiendas, function (i, index) {
                $('#nombre_cliente').val(index.nombre);
                $('#cliente').val(index.id_usuario);
                $('#direccion').val(index.direccion);
                $('#punto_referencia').val(index.punto_referencia);
                $('#fecha').val(index.fecha);
                $('#total').text(index.total_encomienda);
                $('#comision').text(index.total_comision);
                $('#totalCliente').text(index.total_cliente);
                $('#id_encomienda').val(ID_ENCOMIENDA);
                TOTAL= index.total_encomienda;
                COMISION = index.total_comision;
                TOTALCLIENTE = index.total_cliente;
            });

        }).fail(function (response) {
            console.log(response);

        });

    }

    function inicializarTabla() {
        tabla = $("#add-tabla").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "ajax": {
                "url": URL_SERVIDOR + "Detalle_Encomienda/detalles?id_encomienda=" + ID_ENCOMIENDA,
                "method": "GET",
                "dataSrc": function (json) {
                    //console.log(json.preguntas);

                    if (json.detalles) {
                        for (let i = 0, ien = json.detalles.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.detalles[i].id_encomienda + '" class="btn btn-danger" data-toggle="modal"';
                            html += '            data-target="#modal-eliminar">';
                            html += '            <i class="fas fa-trash" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.detalles[i]["botones"] = html;

                            json.detalles[i]["contador"] = contadorTabla;
                            contadorTabla ++;



                        }
                        $('#loading').hide();
                        return json.detalles;
                    } else {
                        $('#loading').hide();
                        return [];
                    }
                }
            },
            columns: [
                { data: "nombre_producto" },
                { data: "tarifa" },
                { data: "cantidad" },
                { data: "sub_total" },
                { data: "botones" },
                { data: "id_producto" },
                { data: "contador" },
            ]
        });

    }
    function agregarFila(nombre_producto, costo, cantidad, id) {
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
            tabla.row.add(
                {
                    "nombre_producto": nombre_producto,
                    "tarifa": costo,
                    "cantidad": cantidad,
                    "sub_total": subTotoal,
                    "botones": html,
                    "id_producto": id,
                    "contador": "33"

                }).draw(false);
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
         
            if (id == data.id_producto) {
                let subTotoal = (costo * cantidad).toFixed(2);
                data.cantidad = cantidad;
                data.sub_total = subTotoal;
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
            //console.log(data);
            TOTAL += parseFloat(data.sub_total);
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

    //BOTON DE ACTUALIZAR 
    $(document).on('click', '#btnActualizar', function (evento) {
        evento.preventDefault();//para evitar que la pagina se recargue
       // let form = $("#miFormulario");
       // form.validate();
        //if (form.valid()) {
            modificar();
       /* } else {
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'error',
                text: "Complete los campos",
                showConfirmButton: true,
            });
        }*/
    });

    function modificar() {
        $('#loading').show();
        let form = obtenerData();

        //OCUPAR ESTA CONFIGURACION CUANDO SE ENVIAEN ARCHIVOS(FOTOS-IMAGENES)
        $.ajax({
            url: URL_SERVIDOR + "Encomienda/updateEncomienda",
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
                text: "Registro Actualizado correctamente",
                showConfirmButton: true,
            }).then((result) => {
                //TODO BIEN Y RECARGAMOS LA PAGINA
                 window.location = `${URL_SISTEMA}/Plantillas/SistemaAgencia/vistas/encomiendas/verEncomienda.php` 
               
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
           
            let id_producto = data.id_producto;
            let cantidad = data.cantidad;
            let sub_total = data.sub_total;
           
                 
                detalle_encomienda.push({
                    "id_producto": id_producto,
                    "cantidad": cantidad,
                    "sub_total": sub_total
                });
            
        });
       
        form.append("direccion",          document.getElementById("direccion").value);
        form.append("punto_referencia",   document.getElementById("punto_referencia").value);
        form.append("fecha",              document.getElementById("fecha").value);
        form.append("id_encomienda",      document.getElementById("id_encomienda").value);

        form.append("total_encomienda",   TOTAL);
        form.append("total_comision",     COMISION);
        form.append("total_cliente",     (TOTAL+COMISION));
        form.append("id_usuario",          document.getElementById("cliente").value);
        form.append("detalle_encomienda", JSON.stringify(detalle_encomienda));
       

        return form;

    }

});