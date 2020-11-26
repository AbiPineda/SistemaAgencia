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


        $(function () {
        $("#id_municipios").change(function () {
           var punto = document.getElementById("id_municipios").value;
           var combo = document.getElementById("empresa");
           var empre = combo.options[combo.selectedIndex].text;
          // alert(empre);

           //para el nombre del municipio
           var muni = document.getElementById("id_municipios");
           var municipio = muni.options[muni.selectedIndex].text;
          // alert(municipio);
           $('#id_punto').empty();
           //alert(punto);

           $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Estandar/puntoReferencia?nombre_empresa="+empre+"&id_municipios="+punto,
            async: false,
            dataType: "json",
            success: function(data) {

                var $select = $('#id_punto');
                 $select.append('<option value="">Seleccione</option>');
                $.each(data.punto, function(i, index) {
                    $select.append('<option value=' + index.costo+ '>' +index.punto_referencia+
                        '</option>');
                });
            },
            error: function(err) {
                var $select = $('#id_punto');
                 $select.append('<option value="">Seleccione</option>');
            const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text:'No hay Ruta para '+municipio,
                showConfirmButton: true,
            });
            }
            });


        });
    });

    //para poner el costo de la ruta
    $(function () {
        $("#id_punto").change(function () {
           var costo = document.getElementById("id_punto").value;

           $("#costo").val(costo);

         });
      });


});