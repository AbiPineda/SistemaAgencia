 $(function () {
        $("#id_pregunta").change(function () {
            // alert($(this).val());
           var combo = document.getElementById("id_pregunta");
           var selected = combo.options[combo.selectedIndex].text;
            alert(selected);
           var $mostrar=$('#mostrar');
           var $botones=$('#botones');
          $('#mostrar').empty();//VACIO LOS DIV PARA QUE NO ME LOS MONTE UNO SOBRE OTRO
          $('#botones').empty();

          if (selected=='Abiertas') {
           
            $mostrar.append('<i class="fas fa-address-card bg-green"></i>'+
                            '<div class="timeline-item">'+
                                '<span class="time"><i class="fas fa-anchor"></i>Selección</span>'+
                                '<h3 class="timeline-header"><a href="#">Tipo de Pregunta Abiertas</a></h3>'+
                                '<div class="timeline-body" style="margin-top: -9px;"><div class="row">'+
                                        '<div class="col-lg-1"></div>'+

                                        '<div class="col-lg-7">'+

                                            '<div class="form-group">'+
                                                '<label for="cars">Digite la Pregunta</label>'+
                                                '<input id="input_abierta" placeholder="Digite la pregunta" type="text" disabled class="form-control">'+
                                            '</div></div><div class="col-lg-3">'+

                                            '<div class="form-group">'+
                                                '<label for="cars">Más de una Respuesta</label>'+
                                                '<select name="id_categoria" id="combo_abierta" data-placeholder="Seleccione" class="form-control" disabled>'+
                                                    '<option value="1">Seleccione</option>'+
                                                    '<option value="2">Si</option>'+
                                                    '<option value="3">No</option>'+

                                                '</select></div></div><div class="col-lg-1"></div>'+

                                    '</div></div></div>');

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
           if (selected=='Cerradas') {

            $mostrar.append('<i class="fas fa-address-card bg-gradient-info"></i> <div class="timeline-item">'+
                                '<span class="time"><i class="fas fa-anchor"></i>Selección</span>'+
                                '<h3 class="timeline-header"><a href="#">Tipo de Pregunta Cerrada</a></h3>'+
                                '<div class="timeline-body" style="margin-top: -9px;"><div class="row">'+
                                        '<div class="col-lg-1"></div><div class="col-lg-6">'+
                                            '<div class="form-group"><label for="cars">Digite la Pregunta</label>'+
                                             '<input id="input_cerrada" placeholder="Digite la pregunta" type="text" disabled class="form-control" style="width:100%;">'+
                                            '</div></div><div class="col-lg-4">'+
                                            '<div class="form-group">'+
                                                '<label>Opciones de Respueta</label>'+
                                                '<select class="select2" disabled id="combo_cerrada" multiple="multiple" data-placeholder="Seleccione" style="width:100%;">'+
                                                    '<option>Si</option>'+
                                                    '<option>No</option>'+
                                                    '<option>Tal Vez</option>'+
                                                    '<option>Pueda ser</option>'+
                                                    '<option>Lo pensare</option></select></div></div>'+
                                            '<div class="col-lg-1"></div></div></div></div>');

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

           if (selected=='Rama') {
            $mostrar.append('<i class="fas fa-address-card bg-gradient-info"></i>'+
                            '<div class="timeline-item">'+
                                '<span class="time"><i class="fas fa-address-card"></i>Selección</span>'+
                                '<h3 class="timeline-header"><a href="#">Registro de una nueva rama</a></h3>'+
                                '<div class="timeline-body" style="margin-top: -9px;">'+
                                    '<div class="row"><div class="col-lg-2"></div>'+
                                      '<div class="col-lg-6"><div class="form-group">'+
                                                '<label for="cars">Digite la rama</label>'+
                                                '<input id="input_rama" type="text" placeholder="Digite la rama" disabled class="form-control" style="width:100%;">'+
                                            '</div></div><div class="col-lg-2"></div>'+
                                        '</div></div></div>');
            $botones.append(' <i class="fas fa-save bg-gradient-lightblue"></i>'+
                            '<div class="timeline-item">'+
                                '<span class="time"><i class="fas fa-save"></i>Guardar</span>'+
                               '<h3 class="timeline-header"><a href="#">Guardar Información</a></h3>'+
                                '<div class="timeline-body"><div class="row">'+
                                        '<div class="col-lg-1"></div><div class="col-lg-10"></div>'+
                                          '<div class="col-lg-1"></div>'+
                                        '<div style="text-align: right;width:577px;margin-top:-8px;">'+
                                 '<a class="btn btn-primary btn-sm" id="btn-rama"  style="color: white">Guardar</a>'+
                                '<a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>'+
                                '</div></div></div></div>');
           }

        });
});

