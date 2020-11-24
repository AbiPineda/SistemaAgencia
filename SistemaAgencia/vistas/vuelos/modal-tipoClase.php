<div class="modal fade" id="modal-tipoClase">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="register-clase" name="register-form" onsubmit="return false">
                <div class="modal-body">
                    <p>
                        <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <div class="col-md-12">

                                <!-- INICIO de primera fila -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Nombre de Tipo de Clase</label>
                                            <input type="text" name="nombre_clase" id="nombre_clase"
                                                class="form-control" placeholder="Digite nombre de clase">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Descripción</label>
                                            <textarea class="form-control" rows="3" name="descripcion" id="descripcion"
                                                placeholder="Describir.."></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="timeline-footer" style="text-align: right;">
                                <a class="btn btn-info btn-sm" style="color: white" type="button"
                                    id="btnAgregarClase">Guardar</a>
                                <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                            </div>

                        </div>

                    </section>
                    <p>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<script type="text/javascript" src="<?= $base_url?>js/controladores/vuelos/insertarClase.js"></script>