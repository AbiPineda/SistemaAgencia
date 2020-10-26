<div class="modal fade" id="modal-servicio">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="register-formS" name="register-form" onsubmit="return false">
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

                                            <h3 class="timeline-header"><a href="#">Registrar Servicio</a> </h3>

                                            <div class="timeline-body">
                                                <!-- INICIO de primera fila -->
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Nombre de Servicio</label>
                                                            <input type="text" name="nombre_servicio"
                                                                class="form-control"
                                                                placeholder="Digite nombre de servicio">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Precio</label>
                                                            <input type="text" name="precio"
                                                                class="form-control"
                                                                placeholder="Digite precio">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Descripción</label>
                                                            <textarea class="form-control" rows="3" name="descripcion"
                                                                placeholder="Describir.."></textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="timeline-footer" style="text-align: right;">
                                                <a class="btn btn-info btn-sm" style="color: white" type="button"
                                                    id="btnAgregar">Guardar</a>
                                                <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                                            </div>
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


<script type="text/javascript" src="<?= $base_url?>js/controladores/vehiculos/insertarServicios.js"></script>
<script type="text/javascript" src="<?= $base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>