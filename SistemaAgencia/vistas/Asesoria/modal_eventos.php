  <!-- ./wrapper -->

  <script type="text/javascript" src="<?= $base_url?>js/controladores/asesorias/operaciones.js"></script>

    <!--modal alternativo para los eventos-->
    <div class="modal fade" id="modal_registro" tabindex="-1" role="dialog" aria-labelledby="modal-eventLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Registro de cita</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="register-form" onsubmit="return false">
                <div class="modal-body">
                        <div class="form-row">
                             <div class="form-group col-md-8">
                                <label>Cliente</label>
                                <select name="id_cliente" id="cliente" class="form-control" onchange="ShowSelected();">
                                    <option>Seleccione</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                 <label>Fecha</label>
                              <input type="text" id="txtFecha" name="fecha" class="form-control"/>
                              <input type="hidden" id="usuario" name="usuario" class="form-control" />
                          </div>
                            
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                             <label>¿Asistirá solo/a?</label>
                             <select name="asistencia" id="asistencia" class="form-control">
                                <option selected>Seleccione</option>
                                 <option value="1">Si</option>
                                 <option value="0">No</option>
                             </select>
                             </div>

                        <div class="form-group col-md-8">
                            <div id="recargar">
                                <label>¿Personas que asistirán ?</label>
                              <div class="form-group multiple-form-group input-group">
                              <input type="text" name="asistiran[]" id="asistiran" disabled="true" class="form-control" placeholder="Digite el nombre">
                              <span class="input-group-btn">
                              <button type="button" class="btn btn-success btn-add" id="btn-asistiran" disabled="true" style="margin-top:0px;">+</button>
                             </span>
                             </div>
                                
                            </div>
                             
                        </div>
                            
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4"> 
                                <input type="hidden" class="form-control" id="txtTitulo" name="title"
                                value="Asesoria" />
                            </div>

                            <div class="form-group col-md-4">
                                <label>Hora de la cita</label>
                                <div class="input-group clockpicker" data-autoclose="true">
                            <input type="text" id="timepicker" name="start" class="form-control" value="08:00" />

                                </div>

                            </div>
                            
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" id="btnAgregar" class="btn btn-primary btn-sm" style="color: white">Agregar</button>
                    <button type="button" class="btn btn-danger btn-sm" style="color: white" data-dismiss="modal">Cancelar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--fin de modal de enventos-->


 <!-- ./otro modal*************************** -->
    <!--modal alternativo para los eventos-->
    <div class="modal fade" id="modal_eventos" tabindex="-1" role="dialog" aria-labelledby="modal-eventLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloEvento">Titulo del evento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="update-form" onsubmit="return false">
                <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-4">
                                 <label>Fecha</label>
                              <input type="text" id="txtFecha2" name="fecha" class="form-control"/>
                          </div>

                          <div class="form-group col-md-4">
                             <label>¿Asistirá solo/a?</label>
                             <select name="asistencia" id="asistencia2" class="form-control">
                                <option selected>Seleccione</option>
                                 <option value="1">Si</option>
                                 <option value="0">No</option>
                             </select>
                             </div>
                            
                        </div>

                        <div class="form-row">
                            
                        <div class="form-group col-md-2"></div>
                        <div class="form-group col-md-8">
                            <div id="recargar2">
                                <label>¿Personas que asistirán ?</label>
                              <div id="inputs"></div>
                              <div class="form-group multiple-form-group input-group">
                              <input type="text" name="asistiran[]" id="asistiran2" value="" disabled="true" class="form-control" placeholder="Agregar otra persona">
                              <span class="input-group-btn">
                              <button type="button" class="btn btn-success btn-add" id="btn-asistiran2" disabled="true" style="margin-top:0px;">+</button>
                             </span>
                             </div>
                                
                            </div>
                             
                        </div>
                            
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4"> 
                                <input type="hidden" class="form-control" id="txtTitulo" name="title"
                                value="Asesoria" />
                            </div>

                            <div class="form-group col-md-4">
                                <label>Hora de la cita</label>
                                <div class="input-group clockpicker" data-autoclose="true">
                            <input type="text" id="timepicker2" name="start" class="form-control" />

                                </div>

                            </div>
                            
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" id="btnActualizar"  class="btn btn-info float-right">Actualizar</button>
                    <button type="button" id="btnAgregar" class="btn btn-warning" style="color: white">Eliminar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--fin de modal de enventos-->