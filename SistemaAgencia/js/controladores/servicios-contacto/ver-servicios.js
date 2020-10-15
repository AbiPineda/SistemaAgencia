$(document).ready(function () {
    let ListaServicios;
    let idSerevicio; 
    inicializarTabla();
    inicializarCombo();
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
                            html += '            data-target="">';
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
                { data: "nombre" },
                { data: "descripcion_servicio" },
                { data: "costos_defecto" },
                { data: "botones" },
            ]
        });
        $('#loading').hide();
    }
    function inicializarCombo() {
        //Initialize Select2 Elements
        ListaServicios = [
            {
                "id": 1,
                "text": "Vehiculo"
            }, {
                "id": 2,
                "text": "Guia Turistico"
            }, {
                "id": 3,
                "text": "Busero"
            },
            {
                "id": 4,
                "text": "Taxista"
            },
            {
                "id": 5,
                "text": "Cocinero"
            },
            {
                "id": 6,
                "text": "Payaso"
            }
        ];
        $('#tipo_servicio').select2(
            {
                data: ListaServicios
            }
        );
    }
    //PARA EDITAR
    $(document).on('click', '.btn-group .btn-primary', function () {
        idSerevicio = $(this).attr("name");
        fila = $(this).closest("tr");
    
        tipoSeleccionado = fila.find('td:eq(0)').text();
        nombreSeleccionado = fila.find('td:eq(1)').text();
        descripcionSeleccionada = fila.find('td:eq(2)').text();
        costoSeleccionado = fila.find('td:eq(3)').text();

        //MANDALOS LOS VALORES AL MODAL
        document.getElementById("nombre").value = nombreSeleccionado;
        document.getElementById("costos_defecto").value = costoSeleccionado;
        document.getElementById("descripcion_servicio").value = descripcionSeleccionada;
        for (let index = 0; index < ListaServicios.length; index++) {
            if (ListaServicios[index].text == tipoSeleccionado) {
                $('#tipo_servicio').val(ListaServicios[index].id); // Select the option with a value of '1'
                $('#tipo_servicio').trigger('change'); // Notify any JS components that the value changed
                break;
            }
        }
        $('#modal-editar').modal('show');;

    });
    //PARA EDITAR LA FOTO
    $(document).on('click', '.btn-group .btn-warning', function () {
        id = $(this).attr("name");
        fila = $(this).closest("tr");
        console.log(id);
    });
    //PARA ELIMIAR
    $(document).on('click', '.btn-group .btn-danger', function () {
        console.log("ELIMINAR");
        id = $(this).closest("td").attr("id");
        console.log($(this).closest("td"));
        console.log(id);

    });

});