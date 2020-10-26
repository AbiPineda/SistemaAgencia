<div class="modal fade" id="modal-categoria">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
                <p>
                    <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="timeline">

                                <div>
                                    <i class="fas fa-car bg-blue"></i>
                                    <div class="timeline-item">

                                        <h3 class="timeline-header"><a href="#">Registrar Categoria</a> </h3>
                                        <form id="categoria" name="register-form" onsubmit="return false">
                                            <div class="timeline-body">
                                                <!-- INICIO de primera fila -->
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Nombre de Categoria</label>
                                                            <input type="text" class="form-control" name="nombre"
                                                                placeholder="Digite nombre de categoria">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Descripción de Categoria</label>
                                                            <input type="text" class="form-control" name="descripcion"
                                                                placeholder="Digite descripcion">
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="timeline-footer" style="text-align: right;">
                                                <a class="btn btn-info btn-sm" style="color: white" type="button"
                                                    id="btnCategoria">Guardar</a>
                                                <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <p>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script type="text/javascript" src="<?= $base_url?>js/controladores/vehiculos/categoria-app.js"></script>