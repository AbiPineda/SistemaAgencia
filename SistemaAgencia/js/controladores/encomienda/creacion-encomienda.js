
$(function () {
        $("#empresa").change(function () {
           var cod = document.getElementById("empresa").value;

            var combo = document.getElementById("empresa");
           var empre = combo.options[combo.selectedIndex].text;
           //alert(cod);
           var $mostrar=$('#formulario');
           var $tabla=$('#tabla');
           var $botones=$('#botones');

          $('#formulario').empty();//VACIO LOS DIV PARA QUE NO ME LOS MONTE UNO SOBRE OTRO
           $('#tabla').empty();
          $('#botones').empty();

if(cod=='Estándar'){

                $mostrar.append(' <i class="fas fa-box-open bg-blue"></i>'+
                        '<div class="timeline-item">'+
                         '<h3 class="timeline-header"><a href="#">Registro de encomienda, configuración estándar</a></h3>'+
                          
                            '<div class="timeline-body">'+
                            '<form id="register-form" name="register-form" onsubmit="return false">'+
                                '<div class="row">'+
                                    '<div class="col-sm-6">'+
                                        '<div class="form-group">'+
                                           '<label for="cars">Seleccione el departamento</label>'+
                                              '<select name="depto" id="depto" class="form-control">'+
                                                '<option value="">Seleccione</option>'+
                                            '</select>'+
                                        '</div></div>'+
                                    '<div class="col-sm-6">'+
                                        '<div class="form-group">'+
                                            '<label for="cars">Seleccione el municipio</label>'+
                                              '<select name="id_municipios" id="id_municipios" class="form-control">'+
                                                '<option value="">Seleccione</option>'+
                                            '</select></div>'+
                                    '</div>'+
                                    '<div class="col-sm-6">'+
                                        '<div class="form-group">'+
                                            '<label>Punto de referencia</label>'+
                                            '<select name="punto" id="id_punto" class="form-control">'+
                                                '<option value="">Seleccione</option>'+
                                            '</select>'+
                                            '</div></div>'+
                                    '<div class="col-sm-6">'+
                                       '<div class="form-group">'+
                                            '<label for="cars">Ingrese el costo</label>'+
                                            '<input name="costo" id="costo" type="text" class="form-control" placeholder="Introduzca el costo">'+
                                        '</div></div>'+
                                        '<div class="col-sm-6">'+
                                        '<div class="form-group">'+
                                            '<label>Dirección de envio</label>'+
                                            '<input name="direccion" type="text" class="form-control" placeholder="Introduzca la dirección">'+
                                            '</div></div>'+
                                        '</div></form></div></div>');
           

                $botones.append(' <i class="fas fa-save bg-gradient-lightblue"></i>'+
                            '<div class="timeline-item">'+
                                '<span class="time"><i class="fas fa-save"></i>Guardar</span>'+
                               '<h3 class="timeline-header"><a href="#">Guardar Información</a></h3>'+
                                '<div class="timeline-body"><div class="row">'+
                                        '<div class="col-lg-1"></div><div class="col-lg-10"></div>'+
                                          '<div class="col-lg-1"></div>'+
                                        '<div style="text-align: right;width:577px;margin-top:-8px;">'+
                                 '<a class="btn btn-primary btn-sm" id="btn-estandar" style="color: white">Guardar</a>'+
                                '<a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>'+
                                '</div></div></div></div>');
                $('#script').html('<script type="text/javascript" src="../../js/controladores/encomienda/deptos-enco.js">');
               $('#script').html('<script type="text/javascript" src="../../js/controladores/encomienda/insertar-estandar.js">');
               
}

               if (cod=='Personalizado') {
               	   $mostrar.append('<i class="fas fa-box-open bg-green"></i>'+
                        '<div class="timeline-item">'+
                         '<h3 class="timeline-header"><a href="#">Registro de encomienda, configuración Personalizada</a></h3>'+
                          
                            '<div class="timeline-body">'+
                            '<form id="register-form" name="register-form" onsubmit="return false">'+
                                '<div class="row">'+
                                    '<div class="col-sm-6">'+
                                        '<div class="form-group">'+
                                           '<label for="cars">Seleccione el departamento</label>'+
                                              '<select name="depto" id="depto" class="form-control">'+
                                                '<option value="">Seleccione</option>'+
                                            '</select>'+
                                        '</div></div>'+
                                    '<div class="col-sm-6">'+
                                        '<div class="form-group">'+
                                            '<label for="cars">Seleccione el municipio</label>'+
                                              '<select name="id_municipios" id="id_municipios" class="form-control">'+
                                                '<option value="">Seleccione</option>'+
                                            '</select></div>'+
                                    '</div>'+
                                    '<div class="col-sm-6">'+
                                        '<div class="form-group">'+
                                            '<label>Punto de referencia</label>'+
                                            '<input name="punto_referencia" type="text" class="form-control" placeholder="Introduzca el punto de referencia">'+
                                        '</div></div>'+
                                    '<div class="col-sm-6">'+
                                       '<div class="form-group">'+
                                            '<label for="cars">Ingrese el producto</label>'+
                                            '<input name="nombre_producto" type="text" class="form-control" placeholder="Introduzca el producto">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-sm-4">'+
                                        '<div class="form-group">'+
                                           '<label for="cars">Caja o bolsa</label>'+
                                              '<input name="costo" type="text" class="form-control" placeholder="Introduzca el costo">'+
                                        '</div></div>'+
                                    '<div class="col-sm-4">'+
                                       '<div class="form-group">'+
                                            '<label for="cars">Ingrese el costo</label>'+
                                            '<input name="costo" type="text" class="form-control" placeholder="Introduzca el costo">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-sm-4">'+
                                        '<div class="form-group" id="unidad">'+
                                           '</div></div>'+
                                '</div>'+
                                '<div class="timeline-footer" style="text-align: right;">'+
                                 '<a class="btn btn-info btn-sm" style="color: white">Agregar</a>'+
                                 '</div>'+
                                '</form></div></div>');

               	   $tabla.append('<i class="fas fa-user bg-green"></i>'+
                        '<div class="timeline-item">'+
                          '<h3 class="timeline-header no-border"><a href="#">Agregando Información</a></h3>'+
                            '<div class="timeline-body">'+
                                '<div class="row">'+
                                    '<div class="col-sm-12">'+

                                       '<table id="example2" class="table table-bordered table-hover">'+
                                            '<thead>'+
                                                '<tr style="text-align: center;">'+
                                                    '<th>Producto</th>'+
                                                    '<th>Costo</th>'+
                                                    '<th>Cantidad</th>'+
                                                    '<th>Acción</th>'+
                                                '</tr>'+
                                            '</thead>'+
                                            '<tbody>'+
                                                '<tr style="text-align: center;">'+
                                                   ' <td>Acetaminofén</td>'+
                                                    '<td>$48.20</td>'+
                                                    '<td>2 Lbs</td>'+
                                                    '<td>'+
                                                        '<div class="btn-group">'+
                                                            '<button type="button" class="btn btn-danger"><i'+
                                                                    'class="fas fa-trash-alt">x</i></button>'+

                                                        '</div>'+
                                                    '</td>'+
                                                '</tr>'+
                                            '</tbody>'+

                                        '</table>'+
                                    '</div>'+

                                   ' <div class="col-sm-12">'+
                                       ' <div style="text-align: right;width:475px;margin-top: 27px;">'+
                                            '<label> Total de Encomienda: </label> <label> $84.09</label>'+
                                        '</div>'+
                                    '</div>'+

                                '</div>'+
                            '</div>'+
                        '</div>')
                   ///para extraer un par de datos que necesito
            $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Empresa/empresas?nombre_empresa="+empre,
            async: false,
            dataType: "json",
            success: function(data) {

               var unidad = $("#unidad");
                $.each(data.empresa, function(i, index) {
                   if (index.unidad == 'lb') {
               	unidad.append('<label for="cars">Cantidad de Libras</label>'+
                              '<input name="cantidad" type="text" class="form-control" placeholder="lbs">');
               }
               if (index.unidad=='unidad') {
               	unidad.append('<label for="cars">Cantidad de unidades</label>'+
                              '<input name="cantidad" type="text" class="form-control" placeholder="Unidades">');
               }
                });
            },
            error: function(err) {
              /* const Toast = Swal.mixin();
            Toast.fire({
                title: 'Oops...',
                icon: 'error',
                text:'No hay Ramas para mostrar',
                showConfirmButton: true,
            });*/
            }
        });

                $botones.append(' <i class="fas fa-save bg-green"></i>'+
                            '<div class="timeline-item">'+
                                '<span class="time"><i class="fas fa-save"></i>Guardar</span>'+
                               '<h3 class="timeline-header"><a href="#">Guardar Información</a></h3>'+
                                '<div class="timeline-body"><div class="row">'+
                                        '<div class="col-lg-1"></div><div class="col-lg-10"></div>'+
                                          '<div class="col-lg-1"></div>'+
                                        '<div style="text-align: right;width:577px;margin-top:-8px;">'+
                                 '<a class="btn btn-primary btn-sm" id="btn-perso" style="color: white">Guardar</a>'+
                                '<a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>'+
                                '</div></div></div></div>');

                $('#script').html('<script type="text/javascript" src="../../js/controladores/encomienda/deptos.js">');
               $('#script').html('<script type="text/javascript" src="../../js/controladores/encomienda/insertar-personalizada.js">');
               
                $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
               }

          


        });
});