 <!-- ./wrapper -->
    <!--modal alternativo para los eventos-->
    <div class="modal fade" id="modal_eventos" tabindex="-1" role="dialog" aria-labelledby="modal-eventLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tituloEvento">Agregar titulo </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form id="register-form" onsubmit="return false">

                        <input type="text" id="txtId" name="txtId" />
                        <input type="text" id="txtFecha" name="fecha" />
                        <input type="hidden" name="id_cliente" value="1">


                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label>Título:</label>
                                <input type="text" class="form-control" id="txtTitulo" name="title"
                                    placeholder="Titulo de la cita" />
                            </div>

                            <div class="form-group col-md-4">
                                <label>Hora de la cita</label>
                                <div class="input-group clockpicker" data-autoclose="true">
                                    <input type="text" id="txtHora" name="start" class="form-control" value="10:30" />
                                </div>

                            </div>
                            <div class="form-group col-md-4">
                                <label>Cliente</label>
                                <select name="id_cliente" id="cliente"></select>


                            </div>
                        </div>

                        <div class="form-group">
                            <label> Descripción: </label>
                            <textarea name="descripcion" id="txtDescripcion" rows="3" class="form-control"></textarea>
                        </div>


                </div>
                <div class="modal-footer">
                    <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
                    <button type="button" id="btnModificar" class="btn btn-secondary">Modificar</button>
                    <button type="button" id="btnEliminar" class="btn btn-danger">Eliminar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--fin de modal de enventos-->