
$(function () {
        $("#empresa").change(function () {
           var cod = document.getElementById("empresa").value;
           //alert(cod);
           var $mostrar=$('#formulario');
           var $botones=$('#botones');

          $('#formulario').empty();//VACIO LOS DIV PARA QUE NO ME LOS MONTE UNO SOBRE OTRO
          $('#botones').empty();

        if(cod=='Estándar'){

                $mostrar.append(' <i class="fas fa-box-open bg-blue"></i>'+
                        '<div class="timeline-item">'+
                         '<h3 class="timeline-header"><a href="#">Ingrese su configuracion estándar</a></h3>'+
                          
                            '<div class="timeline-body">'+
                            '<form id="register-form" name="register-form" onsubmit="return false">'+
                                '<div class="row">'+
                                    '<div class="col-sm-4">'+
                                        '<div class="form-group">'+
                                        '<label for="cars">Forma de operar</label>'+
                                        '<input name="nombre_empresa" value="" id="forma" type="text" class="form-control" disabled="true">'+
                                        '</div></div>'+
                                    '<div class="col-sm-8">'+
                                        '<div class="form-group">'+
                                            '<label>Dirección</label>'+
                                            '<input name="direccion" type="text" class="form-control" placeholder="Introduzca la dirección" autocomplete="off">'+
                                        '</div></div>'+
                                    '<div class="col-sm-6">'+
                                        '<div class="form-group">'+
                                            '<label>Punto de referencia</label>'+
                                            '<input name="punto_referencia" type="text" class="form-control" placeholder="Introduzca el telefono">'+
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
                                            '<label for="cars">Ingrese el costo</label>'+
                                            '<input name="costo" type="text" class="form-control" placeholder="Introduzca el costo">'+
                                        '</div></div></div></form></div></div>');
                $('#forma').val(cod);

                $botones.append(' <i class="fas fa-save bg-gradient-lightblue"></i>'+
                            '<div class="timeline-item">'+
                                '<span class="time"><i class="fas fa-save"></i>Guardar</span>'+
                               '<h3 class="timeline-header"><a href="#">Guardar Información</a></h3>'+
                                '<div class="timeline-body"><div class="row">'+
                                        '<div class="col-lg-1"></div><div class="col-lg-10"></div>'+
                                          '<div class="col-lg-1"></div>'+
                                        '<div style="text-align: right;width:577px;margin-top:-8px;">'+
                                 '<a class="btn btn-primary btn-sm" id="btn-preguntas" style="color: white">Guardar</a>'+
                                '<a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>'+
                                '</div></div></div></div>');
               }

               if (cod=='Personalizada') {
               	   $mostrar.append('   <i class="fas fa-box-open bg-green"></i>'+
                        '<div class="timeline-item">'+
                         '<h3 class="timeline-header"><a href="#">Ingrese su configuracion estándar</a></h3>'+
                          
                            '<div class="timeline-body">'+
                            '<form id="register-form" name="register-form" onsubmit="return false">'+
                                '<div class="row">'+
                                    '<div class="col-sm-4">'+
                                        '<div class="form-group">'+
                                        '<label for="cars">Forma de operar</label>'+
                                        '<input name="nombre_empresa" value="" id="forma" type="text" class="form-control" disabled="true">'+
                                        '</div></div>'+
                                    '<div class="col-sm-8">'+
                                        '<div class="form-group">'+
                                            '<label>Dirección</label>'+
                                            '<input name="direccion" type="text" class="form-control" placeholder="Introduzca la dirección" autocomplete="off">'+
                                        '</div></div>'+
                                    '<div class="col-sm-6">'+
                                        '<div class="form-group">'+
                                            '<label>Punto de referencia</label>'+
                                            '<input name="punto_referencia" type="text" class="form-control" placeholder="Introduzca el telefono">'+
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
                                    '<div class="col-sm-5">'+
                                       '<div class="form-group">'+
                                            '<label for="cars">Ingrese el producto</label>'+
                                            '<input name="producto" type="text" class="form-control" placeholder="Introduzca el producto">'+
                                        '</div>'+
                                    '</div>'+
                                    '<div class="col-sm-6">'+
                                        '<div class="form-group">'+
                                           '<label for="cars">Seleccione caja o bolsa</label>'+
                                              '<select name="caja" id="caja" class="form-control">'+
                                                '<option value="">Seleccione</option>'+
                                                 '<option value="caja">Caja</option>'+
                                                  '<option value="bolsa">Bolsa</option>'+

                                            '</select>'+
                                        '</div></div>'+
                                    '<div class="col-sm-5">'+
                                       '<div class="form-group">'+
                                            '<label for="cars">Ingrese el costo</label>'+
                                            '<input name="costo" type="text" class="form-control" placeholder="Introduzca el costo">'+
                                        '</div>'+
                                    '</div>'+
                                '</div></form></div></div>');
                $('#forma').val(cod);

                $botones.append(' <i class="fas fa-save bg-green"></i>'+
                            '<div class="timeline-item">'+
                                '<span class="time"><i class="fas fa-save"></i>Guardar</span>'+
                               '<h3 class="timeline-header"><a href="#">Guardar Información</a></h3>'+
                                '<div class="timeline-body"><div class="row">'+
                                        '<div class="col-lg-1"></div><div class="col-lg-10"></div>'+
                                          '<div class="col-lg-1"></div>'+
                                        '<div style="text-align: right;width:577px;margin-top:-8px;">'+
                                 '<a class="btn btn-primary btn-sm" id="btn-preguntas" style="color: white">Guardar</a>'+
                                '<a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>'+
                                '</div></div></div></div>');
               }

          


        });
});