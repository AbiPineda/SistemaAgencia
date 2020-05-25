<?php
include_once '../../config/parametros.php';
include_once '../../plantilla/cabecera.php';
include_once '../../plantilla/menu.php';
?>
<br><br>




<div class="container-linea-tiempo">
    <div class="row caja-time">
        <!-- Products tab & slick -->
        <div class="col-md-12 ">

            <div class="timeline">
                <!-- timeline time label -->
                <div class="time-label">
                    <span class="bg-red">Información</span>
                </div>
                <!-- /.timeline-label -->
                <!-- timeline item -->
                <div>
                    <i class="fa fa-users icono-linea bg-blue"></i>
                    <div class="timeline-item">

                        <h3 class="timeline-header"><a href="#">Datos del Cliente</a> </h3>

                        <div class="timeline-body">
                            <!-- INICIO de primera fila -->
                            <div class="row">
                                <div class="col-sm-5">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Nombre Completo</label>
                                        <input type="text" class="form-control" placeholder="Digite nombre del Lugar">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Correo Electronico</label>
                                        <input type="text" class="form-control" placeholder="Digite nombre del Lugar">
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Telefono</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <!-- FIN de primera fila -->
                            
                            
                            
                            <!-- FIN de 3ra fila -->
                        </div>

                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->
                <div>
                    <i class="fa fa-map icono-linea bg-green"></i>
                    <div class="timeline-item">

                        <h3 class="timeline-header no-border"><a href="#">Datos del Tours</a></h3>
                        <div class="timeline-body">

                            <!-- INICIO de 2da fila -->
                            <div class="row">
                            <div class="col-sm-3">
                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Lugar de Salida</label>
                                        <input type="text" class="form-control" placeholder="Digite nombre del Lugar">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Fecha Salida</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Fecha Retorno</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Total de Personas</label>
                                        <input type="number" class="form-control" min="1" max="3">
                                    </div>
                                </div>
                                
                                
                            </div><!-- INICIO de 3ra fila -->
                            <div class="row">
                            <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Bebés (0 a 4 años)</label>
                                        <input type="number" class="form-control" min="1" max="3">
                                    </div>
                                </div>
                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Niños (5 a 11 años)</label>
                                        <input type="number" class="form-control" min="1" max="10">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Adultos (+12 años)</label>
                                        <input type="number" class="form-control" min="1" max="100">
                                    </div>
                                </div>
                                
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Adultos Mayores</label>
                                        <input type="number" class="form-control" min="1" max="3">
                                    </div>
                                </div>
                            </div>
                            <!-- FIN de 2da fila -->
                            
                        </div>
                    </div>
                </div>
                <!-- END timeline item -->
                <!-- timeline item -->
                <div>
                    <i class="fa fa-plus icono-linea bg-yellow"></i>
                    <div class="timeline-item">

                        <h3 class="timeline-header"><a href="#">Servicios Adicionales</a></h3>
                        <div class="timeline-body">
                        <div class="row"  style="font-size: 13px;">
                                <div class="offset"></div>
                                <div class="col-sm-3">
                                    <div class="checkbox checkbox-primary" style="padding-left: 55px;">
                                        <input id="checkbox1" type="checkbox" checked>
                                        <label for="checkbox1">
                                        Alojamiento
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox2" type="checkbox" checked>
                                        <label for="checkbox2">
                                            Traslados
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox3" type="checkbox" checked>
                                        <label for="checkbox3">
                                            Renta de Auto
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox4" type="checkbox" checked>
                                        <label for="checkbox4">
                                            Seguro de Viaje
                                        </label>
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                        <div class="timeline-footer" style="text-align: right;">
                                <a class="btn btn-info btn-sm" style="color: white">Guardar</a>
                                <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>
                            </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- Products tab & slick -->

    </div>
</div>

<?php
include_once '../../plantilla/footer.php';
?>

