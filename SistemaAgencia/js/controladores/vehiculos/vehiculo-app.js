$(document).ready(function() {
    let explorer = $("#kv-explorer");
    let idVehiculo;
    let tabla;

    inicializarTabla();


    //BOTON DE EDITAR
    $(document).on('click', '.btn-group .btn-primary', function() {
        $('#loadingActualizar').hide();
        idVehiculo = $(this).attr("name");
        fila = $(this).closest("tr");


        placaSeleccionado = fila.find('td:eq(0)').text();
        anioSeleccionado = fila.find('td:eq(1)').text();
        precioSeleccionada = fila.find('td:eq(2)').text();
        combustibleSeleccionado = fila.find('td:eq(3)').text();

        //MANDALOS LOS VALORES AL MODAL
        document.getElementById("placa").value = placaSeleccionado;
        document.getElementById("anio").value = anioSeleccionado;
        document.getElementById("precio_diario").value = precioSeleccionada;
        document.getElementById("tipoCombustible").value = combustibleSeleccionado;

        $('#modal-editar').modal('show');

    });
    //BOTON EDITAR LA FOTO
    $(document).on('click', '.btn-group .btn-warning', function() {
        $('#modal-imagenes').modal('show');
        let identificador = $(this).attr("name");
        let nombreTabla = 'servicios_adicionales';
        let informacionAdicional = { tipo: nombreTabla, identificador: identificador };
        let urlFotos = [];
        let infoFotos = [];

        $.ajax({
            url: URL_SERVIDOR + "Imagen/show?tipo=" + nombreTabla + "&identificador=" + identificador,
            method: "GET",

        }).done(function(response) {
            //REST_Controller::HTTP_OK
            response.forEach(element => {
                let informacion = {
                    url: URL_SERVIDOR + "Imagen/delete",
                    key: element.id_foto
                };
                infoFotos.push(informacion);
                urlFotos.push(element.foto_path);
            });
            explorer.fileinput({
                theme: 'fas',
                language: 'es',
                uploadUrl: URL_SERVIDOR + '/Imagen/save',
                uploadExtraData: informacionAdicional,
                overwriteInitial: false,
                initialPreviewAsData: true,
                initialPreview: urlFotos,
                initialPreviewConfig: infoFotos,
                required: true,
                maxFileSize: 2000,
                maxFilesNum: 10,
                allowedFileExtensions: ["jpg", "png", "gif"]

            });
        });
    });
    //BOTON PARA ELIMINAR
    $(document).on('click', '.btn-group .btn-danger', function(evento) {
        idVehiculo = $(this).attr("name");
        fila = $(this).closest("tr");

        const Toast = Swal.mixin();
        Swal.fire({
            title: '¿Estas seguro?',
            text: "Se Eliminará este registro!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar!'
        }).then((result) => {
            console.log(result);
            if (result.value) {
                eliminar();
            }
        })
    });
    //BOTON PARA ACTUALIZAR
    $(document).on('click', '#btnActualizar', function(evento) {
        evento.preventDefault(); //para evitar que la pagina se recargue
        let form = $("#miFormulario");
        form.validate();
        if (form.valid()) {
            actualizar();
        }
    });
    //CUANDO EL MODAL SE CIERRA
    $('#modal-imagenes').on('hidden.bs.modal', function(e) {
        console.log("cerrando modal")
        explorer.fileinput('destroy');
    })

    function inicializarTabla() {
        tabla = $("#tabla_vehiculos").DataTable({
            "responsive": true,
            "autoWidth": false,
            "deferRender": true,
            "ajax": {
                "url": URL_SERVIDOR + "vehiculo/vehiculos",
                "method": "GET",
                "dataSrc": function(json) {
                    console.log(json);

                    if (json.autos) {
                        for (let i = 0, ien = json.autos.length; i < ien; i++) {
                            //CREAMOS UNA NUEVA PROPIEDAD LLAMADA BOTONES
                            html = "";
                            html += '<td>';
                            html += '    <div class="btn-group">';
                            html += '        <button type="button" name="' + json.autos[i].idvehiculo + '" class="btn btn-primary" data-toggle="modal"';
                            html += '            data-target="">';
                            html += '            <i class="fas fa-edit" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.autos[i].idvehiculo + '" class="btn btn-warning" data-toggle="modal"';
                            html += '            data-target="#modal-galeria">';
                            html += '            <i class="fas fa-image" style="color: white"></i>';
                            html += '        </button>';
                            html += '        <button type="button" name="' + json.autos[i].idvehiculo + '" class="btn btn-danger" data-toggle="modal"';
                            html += '            data-target="#modal-eliminar">';
                            html += '            <i class="fas fa-trash" style="color: white"></i>';
                            html += '        </button>';
                            html += '    </div>';
                            html += '</td>';
                            json.autos[i]["botones"] = html;

                        }
                        $('#loading').hide();
                        return json.autos;
                    } else {
                        $('#loading').hide();
                        return [];
                    }
                }
            },
            columns: [
                { data: "placa" },
                { data: "anio" },
                { data: "precio_diario" },
                { data: "tipoCombustible" },
                { data: "botones" },
            ]
        });

    }


    function actualizar() {
        $('#loadingActualizar').show();
        let data = {
            "idvehiculo": idVehiculo,
            "placa": document.getElementById("placa").value,
            "anio": document.getElementById("anio").value,
            "precio_diario": document.getElementById("precio_diario").value,
            "tipoCombustible": document.getElementById("tipoCombustible").value

        };
        ///OCUPAR ESTA CONFIGURACION CUANDO SOLO SEA TEXTO
        $.ajax({
            url: URL_SERVIDOR + "vehiculo/actualizarVehiculo",
            method: "PUT",
            timeout: 0,
            data: data
        }).done(function(response) {
            //REST_Controller::HTTP_OK
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Exito...',
                icon: 'success',
                text: response.mensaje,
                showConfirmButton: true,
            }).then((result) => {
                $('#modal-editar').modal('hide');;
                tabla.ajax.reload(null, false);
            });
        }).fail(function(response) {
            console.log(response);

            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: "ERROR EN ENVIO DE INFORMACION",
                showConfirmButton: true,
            });

        }).always(function(xhr, opts) {
            $('#loadingActualizar').hide();
        });
    }

    function eliminar() {
        let data = {
            "idvehiculo": idVehiculo
        };
        ///OCUPAR ESTA CONFIGURACION CUANDO SOLO SEA TEXTO

        $.ajax({
            url: URL_SERVIDOR + "vehiculo/eliminarVehiculo",
            method: "DELETE",
            timeout: 0,
            data: data
        }).done(function(response) {
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
        }).fail(function(response) {

            console.log(response);
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text: "ERROR EN EL ENVIO DE INFORMACION",
                showConfirmButton: true,
            });

        }).always(function(xhr, opts) {
            $('#loadingActualizar').hide();
        });
    }
});