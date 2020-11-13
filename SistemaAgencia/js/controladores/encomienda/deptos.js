$(document).ready(function() {
        //********para el combo de los departamentos

         $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Empresa/deptos",
            async: false,
            dataType: "json",
            success: function(data) {

                var $select = $('#depto');
                $.each(data.deptos, function(i, name) {
                    $select.append('<option value=' + name.id_departamentos+ '>' + name.nombre_deptos+
                        '</option>');
                });
            },
            error: function(err) {
                var $select = $('#depto');
              /* const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text:'No hay Ramas para mostrar',
                showConfirmButton: true,
            });*/
            }
        });

        //*************para cargar los municipios

        $(function () {
        $("#depto").change(function () {
           var id = document.getElementById("depto").value;
           //alert(id);
           $('#id_municipios').empty();
           $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Empresa/municipios?id_deptos="+id,
            async: false,
            dataType: "json",
            success: function(data) {

                var $select = $('#id_municipios');
                 $select.append('<option value="">Seleccione</option>');
                $.each(data.municipios, function(i, name) {
                    $select.append('<option value=' + name.id_municipios+ '>' + name.nombre_municipios+
                        '</option>');
                });
            },
            error: function(err) {
                var $select = $('#id_municipios');
                 $select.append('<option value="">Seleccione</option>');
              /* const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text:'No hay Ramas para mostrar',
                showConfirmButton: true,
            });*/
            }
        });


             });
        });

    });