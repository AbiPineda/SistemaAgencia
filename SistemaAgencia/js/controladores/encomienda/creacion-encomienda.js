
$(function () {
        $("#empresa").change(function () {
           var cod = document.getElementById("empresa").value;

            var combo = document.getElementById("empresa");
           var empre = combo.options[combo.selectedIndex].text;
           //alert(cod);
           var $mostrar=$('#formulario');
           var $botones=$('#botones');

          $('#formulario').empty();//VACIO LOS DIV PARA QUE NO ME LOS MONTE UNO SOBRE OTRO
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
                                        '</div></div></div></form></div></div>');
           

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
               	   $mostrar.append('   <i class="fas fa-box-open bg-green"></i>'+
                        '<div class="timeline-item">'+
                         '<h3 class="timeline-header"><a href="#">Ingrese su configuracion estándar</a></h3>'+
                          
                            '<div class="timeline-body">'+
                            '<form id="register-form" name="register-form" onsubmit="return false">'+
                                '<div class="row">'+
                                    '<div class="col-sm-6">'+
                                        '<div class="form-group">'+
                                        '<label for="cars">Forma de operar</label>'+
                                        '<input name="forma" value="" id="forma" type="text" class="form-control" disabled="true">'+
                                         '<input name="nombre_empresa" value="" id="nombre_empresa" type="hidden">'+
                                        '</div></div>'+
                                        '<div class="col-sm-6">'+
                                        '<div class="form-group">'+
                                        '<label for="cars">Libras o por unidad</label>'+
                                        '<input name="unidad" value="" id="unidad" type="text" class="form-control" disabled="true">'+
                                        '</div></div>'+
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
                                    '<div class="col-sm-4">'+
                                       '<div class="form-group">'+
                                            '<label for="cars">Ingrese el producto</label>'+
                                            '<input name="nombre_producto" type="text" class="form-control" placeholder="Introduzca el producto">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-sm-4">'+
                                        '<div class="form-group">'+
                                           '<label for="cars">Seleccione caja o bolsa</label>'+
                                              '<select name="envoltura" id="caja" class="form-control">'+
                                                '<option value="">Seleccione</option>'+
                                                 '<option value="caja">Caja</option>'+
                                                  '<option value="bolsa">Bolsa</option>'+

                                            '</select>'+
                                        '</div></div>'+
                                    '<div class="col-sm-4">'+
                                       '<div class="form-group">'+
                                            '<label for="cars">Ingrese el costo</label>'+
                                            '<input name="costo" type="text" class="form-control" placeholder="Introduzca el costo">'+
                                        '</div>'+
                                    '</div>'+
                                '</div></form></div></div>');
                   ///para extraer un par de datos que necesito
            $.ajax({
            type: "GET",
            url: URL_SERVIDOR+"Empresa/empresas?nombre_empresa="+empre,
            async: false,
            dataType: "json",
            success: function(data) {

               
                $.each(data.empresa, function(i, index) {
                    $('#forma').val(index.forma_operacion);
                    $('#nombre_empresa').val(index.nombre_empresa);
                    $('#unidad').val(index.unidad);
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
               
               }

          


        });
});