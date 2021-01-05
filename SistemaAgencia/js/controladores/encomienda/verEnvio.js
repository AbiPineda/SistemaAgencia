// CUANDO LA PAGINA YA ESTA LISTA
$(document).ready(function () {


    const valores = window.location.search;
    const urlParams = new URLSearchParams(valores);
    let ID = urlParams.get('ac');
    let tabla;

    mostrarDatos();
    inicializarTabla();

    function mostrarDatos() {

        $.ajax({
            url: URL_SERVIDOR + 'Encomienda/encomiendaActualizar?id_encomienda=' + ID,
            method: "GET"
        }).done(function (response) {
            $.each(response.Encomiendas, function (i, index) {
                $('#cliente').val(index.nombre);
                $('#fecha').val(index.fecha);
                $('#estado').val(index.estado);
               
            });

        }).fail(function (response) {
          //  console.log(response);

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

});