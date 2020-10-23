 $(function () {
        $("#id_pregunta").change(function () {
            // alert($(this).val());
           var combo = document.getElementById("id_pregunta");
           var selected = combo.options[combo.selectedIndex].text;
           // alert(selected);
           var $mostrar=$('#mostrar');
           var $botones=$('#botones');

          $('#mostrar').empty();//VACIO LOS DIV PARA QUE NO ME LOS MONTE UNO SOBRE OTRO
          $('#botones').empty();


          if (selected=='Abiertas') {
            $('#combo_rama').empty();
            $('#combo_rama').prop("disabled",false);
            $mostrar.append('<i class="fas fa-address-card bg-green"></i>'+
                            '<div class="timeline-item">'+
                                '<span class="time"><i class="fas fa-anchor"></i>Selección</span>'+
                                '<h3 class="timeline-header"><a href="#">Tipo de Pregunta Abiertas</a></h3>'+
                                '<div class="timeline-body" style="margin-top: -9px;">'+
                                '<form id="register-form" name="register-form" onsubmit="return false">'+
                                    '<div class="row">'+
                                
                                    
                                        '<div class="col-lg-6">'+
                                        
                                            '<div class="form-group">'+
                                                '<label for="cars">Digite la Pregunta</label>'+
                                                '<input id="input_abierta" name="pregunta" placeholder="Digite la pregunta" type="text" class="form-control">'+
                                                 '<input id="rama" name="id_rama" type="hidden">'+
                                                 '<input  value="abierta" name="opcion" type="hidden">'+
                                            '</div></div><div class="col-lg-6">'+

                                            '<div class="form-group">'+
                                                '<label for="cars">Más de una Respuesta</label>'+
                                                '<select name="mas_respuestas" id="mas_respuestas" class="form-control">'+
                                                    '<option disabled selected >Seleccione</option>'+
                                                    '<option value="Si">Si</option>'+
                                                    '<option value="No">No</option>'+

                                                '</select></div></div>'+

                                    '</div></form></div></div>');

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
           $('#script').html('<script type="text/javascript" src="../../js/controladores/asesorias/insertar-pregunta-app.js">');
            $('#script').html('<script type="text/javascript" src="../../js/controladores/asesorias/combobox-ramas.js">');
           }
           if (selected=='Cerradas') {
            $('#combo_rama').empty();
            $('#combo_rama').prop("disabled",false);
            $mostrar.append('<i class="fas fa-address-card bg-gradient-info"></i> <div class="timeline-item">'+
                                '<span class="time"><i class="fas fa-anchor"></i>Selección</span>'+
                                '<h3 class="timeline-header"><a href="#">Tipo de Pregunta Cerrada</a></h3>'+
                                '<div class="timeline-body" style="margin-top: -9px;">'+
                                    '<form id="register-form" name="register-form" onsubmit="return false">'+
                                    '<div class="row">'+
                                        '<div class="col-lg-1">'+
                                        '</div>'+
                                         
                                        '<div class="col-lg-6">'+
                                            '<div class="form-group"><label for="cars">Digite la Pregunta</label>'+
                                             '<input id="input_cerrada" name="pregunta" placeholder="Digite la pregunta" type="text" class="form-control" style="width:100%;">'+
                                            '<input id="rama" name="id_rama" type="hidden">'+
                                            '<input  value="cerrada" name="opcion" type="hidden">'+
                                            '</div></div><div class="col-lg-4">'+
                                            '<div class="form-group">'+
                                                '<label>Opciones de Respueta</label>'+
                                                '<select class="select2" name="opcion_respuesta[]" id="combo_cerrada" multiple="multiple" data-placeholder="Seleccione" style="width:100%;">'+
                                                    '<option>Si</option>'+
                                                    '<option>No</option>'+
                                                    '<option>Tal Vez</option>'+
                                                    '<option>Pueda ser</option>'+
                                                    '<option>Lo pensare</option></select></div></div>'+
                                            '<div class="col-lg-1"></div></div></form></div></div>');

            $botones.append(' <i class="fas fa-save bg-gradient-lightblue"></i>'+
                            '<div class="timeline-item">'+
                                '<span class="time"><i class="fas fa-save"></i>Guardar</span>'+
                               '<h3 class="timeline-header"><a href="#">Guardar Información</a></h3>'+
                                '<div class="timeline-body"><div class="row">'+
                                        '<div class="col-lg-1"></div><div class="col-lg-10"></div>'+
                                          '<div class="col-lg-1"></div>'+
                                        '<div style="text-align: right;width:577px;margin-top:-8px;">'+
                                 '<a class="btn btn-primary btn-sm" id="btn-cerrada" style="color: white">Guardar</a>'+
                                '<a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>'+
                                '</div></div></div></div>');
               $('.select2').select2();
               $('#script').html('<script type="text/javascript" src="../../js/controladores/asesorias/insertar-cerrada-app.js">');
               $('#script').html('<script type="text/javascript" src="../../js/controladores/asesorias/combobox-ramas.js">');
           }

           if (selected=='Rama') {

            $('#combo_rama').prop("disabled",true);
            $mostrar.append('<i class="fas fa-address-card bg-gradient-info"></i>'+
                            '<div class="timeline-item">'+
                                '<span class="time"><i class="fas fa-address-card"></i>Selección</span>'+
                                '<h3 class="timeline-header"><a href="#">Registro de una nueva rama</a></h3>'+
                                '<div class="timeline-body" style="margin-top: -9px;">'+
                                 '<form id="register-form" name="register-form" onsubmit="return false">'+
                                    '<div class="row">'+
                                   
                                    '<div class="col-lg-2"></div>'+
                                     
                                      '<div class="col-lg-6">'+
                                      '<div class="form-group">'+
                                                '<label for="cars">Digite la rama</label>'+
                                                '<input id="input_rama" name="categoria_rama" type="text" placeholder="Digite la rama" class="form-control" style="width:100%;">'+
                                               '</div>'+
                                            '</div><div class="col-lg-2">'+
                                            '</div>'+
                                        '</div> </form></div></div>');
            $botones.append(' <i class="fas fa-save bg-gradient-lightblue"></i>'+
                            '<div class="timeline-item">'+
                                '<span class="time"><i class="fas fa-save"></i>Guardar</span>'+
                               '<h3 class="timeline-header"><a href="#">Guardar Información</a></h3>'+
                                '<div class="timeline-body"><div class="row">'+
                                        '<div class="col-lg-1"></div><div class="col-lg-10"></div>'+
                                          '<div class="col-lg-1"></div>'+
                                        '<div style="text-align: right;width:577px;margin-top:-8px;">'+
                                '<button type="button" id="btn-rama" class="btn btn-primary btn-sm" style="color: white">Agregar</button>'+
                    '<button type="button" class="btn btn-danger btn-sm" style="color: white" data-dismiss="modal">Cancelar</button>'+
                                '</div></div></div></div>');

        $('#script').html('<script type="text/javascript" src="../../js/controladores/asesorias/insertar-rama-app.js">');
         
           }

        });
});

function ShowRama()
{
/* Para obtener el valor */
var cod = document.getElementById("combo_rama").value;
//alert(cod);
$('#rama').val(cod);

 
/* Para obtener el texto */
//var combo = document.getElementById("combo_rama");
//var selected = combo.options[combo.selectedIndex].text;
}