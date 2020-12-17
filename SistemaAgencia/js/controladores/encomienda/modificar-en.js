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
            console.log(nombre_producto);
            agregarFila(nombre_producto, costo, cantidad, id);


        }
    });


 function mostrarDatos(){

 	 $.ajax({
            url: URL_SERVIDOR +'Encomienda/encomiendaModificar?id_encomienda='+ID_ENCOMIENDA,
            method: "GET"
        }).done(function (response) {
        	$.each(response.Encomiendas, function(i,index) {
        		$('#cliente').val(index.nombre);
        		$('#direccion').val(index.direccion);
        		$('#punto_referencia').val(index.punto_referencia);
        		$('#fecha').val(index.fecha);
        		$('#total').text(index.total_encomienda);
        		$('#comision').text(index.total_comision);
        		$('#totalCliente').text(index.total_cliente);
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
                "url": URL_SERVIDOR + "Detalle_Encomienda/detalles?id_encomienda="+ID_ENCOMIENDA,
                "method": "GET",
                "dataSrc": function (json) {
                    //console.log(json.preguntas);

                    if (json.detalles) {
                        for (let i = 0, ien = json.detalles.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.detalles[i].id_encomienda+ '" class="btn btn-danger" data-toggle="modal"';
                            html += '            data-target="#modal-eliminar">';
                            html += '            <i class="fas fa-trash" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.detalles[i]["botones"] = html;



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
                {data: "nombre_producto" },
                {data: "tarifa" },
                {data: "cantidad" },
                {data: "sub_total" },
                {data: "botones" },
                {data: "id_producto" },
                {data: "contador" },
            ]
        });

    }
 function agregarFila(nombre_producto, costo, cantidad, id) {
 		nombre_producto = "el chele se la comee";
       // if (!ExisteFila(id, cantidad, costo)) {

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
            console.log(nombre_producto);
            tabla.row.add([nombre_producto, costo, cantidad, subTotoal, html, id, contadorTabla]).draw(false);
            //PARA ORDENAR LA TABLA
            tabla.order([6, 'desc']).draw();
            contadorTabla++;
        //}
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

});