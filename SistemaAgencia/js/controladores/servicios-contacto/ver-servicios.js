$(document).ready(function () {
    inicializarTabla();

    function inicializarTabla() {
        $("#tabla_servicios").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "ajax": {
                "method": "GET",
                "url": "http://localhost/API-REST-PHP/ServiciosAdicionales/obtenerServicio",
                "dataSrc": function (json) {
                    //PARA CONPROVAR QUE EL SERVICIO EXISTE
                    if (json.servicio) {
                        for (let i = 0, ien = json.servicio.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.servicio[i].id_servicios + '" class="btn btn-primary" data-toggle="modal"';
                            html += '            data-target="#modal-editar">';
                            html += '            <i class="fas fa-edit" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.servicio[i].id_servicios + '" class="btn btn-warning" data-toggle="modal"';
                            html += '            data-target="#modal-galeria">';
                            html += '            <i class="fas fa-image" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.servicio[i].id_servicios + '" class="btn btn-danger" data-toggle="modal"';
                            html += '            data-target="#modal-eliminar">';
                            html += '            <i class="fas fa-trash" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.servicio[i]["botones"] = html;

                        }
                        return json.servicio;
                    } else {
                        return [];
                    }
                }
            },
            columns: [
                { data: "tipo_servicio" },
                { data: "descripcion_servicio" },
                { data: "costos_defecto" },
                { data: "botones" },
            ]
        });
        $('#loading').hide();
    }
    //PARA EDITAR
    $(document).on('click', '.btn-group .btn-primary', function () {
        console.log("EDITAR");
        id = $(this).closest("td").attr("id");
        console.log(id);

    });
    //PARA ELIMIAR
    $(document).on('click', '.btn-group .btn-danger', function () {
        console.log("ELIMINAR");
        id = $(this).closest("td").attr("id");
        console.log($(this).closest("td"));
        console.log(id);

    });
    //PARA EDITAR LA FOTO
    $(document).on('click', '.btn-group .btn-warning', function () {
        id = $(this).attr("name");
        fila = $(this).closest("tr");
        console.log(id);


    });

});