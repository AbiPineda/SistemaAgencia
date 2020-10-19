<?php
include_once '../../config/parametros.php';
include_once '../../plantillas/cabecera.php';
include_once  '../../plantillas/navbar.php';
include_once '../../plantillas/barra_lateral.php';
?>
<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registro de Vehículos</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Registro</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="timeline">
                    <!-- timeline time label -->
                    <div class="time-label">
                        <span class="bg-red">Información</span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-car bg-blue"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="#">Datos Generales</a></h3>

                            <div class="timeline-body">
                                <div class="row">

                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Marca</label>
                                            <select class="form-control">
                                                <option>Toyota</option>
                                                <option>Nissan</option>
                                                <option>Kia</option>
                                                <option>Hyundai</option>
                                                <option>Honda</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Modelo</label>
                                            <input type="text" class="form-control" placeholder="Introduzca modelo">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            <label>Año</label>
                                            <input type="number" class="form-control" min=2010 max=2020>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Placa</label>
                                            <input type="text" class="form-control" placeholder="Introduzca placa">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Combustible:</label>
                                            <select class="form-control">
                                                <option>Gasolina</option>
                                                <option>Diesel</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Color</label>
                                            <input type="text" class="form-control" placeholder="Introduzca color">
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Kilometraje</label>
                                            <input type="number" class="form-control" min=1>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Transmición</label>
                                            <select class="form-control">
                                                <option>Manual</option>
                                                <option>Automatico</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Precio</label>
                                            <input type="number" class="form-control" min=1>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label>Pasajeros</label>
                                            <input type="number" class="form-control" min=1 max=20>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <div class="form-group">
                                            <label>Puertas</label>
                                            <input type="number" class="form-control" min=1 max=5>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <!-- select -->
                                        <div class="form-group">
                                            <label>Categoría</label>
                                            <select class="form-control">
                                                <option>Económicos</option>
                                                <option>Sedan</option>
                                                <option>Compactos</option>
                                                <option>Microbuses</option>
                                                <option>Pickup</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <label>Seleccione foto</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="files" name="foto">
                                            <label class="custom-file-label" for="files"></label>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header no-border"><a href="#">Opciones Avanzadas</a></h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">
                                            <div class="icheck-primary d-inline">
                                                <input type="checkbox" id="checkboxPrimary1" checked>
                                                <label for="checkboxPrimary1"> Aire Acondicionado
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">
                                            <div class="icheck-success d-inline">
                                                <input type="checkbox" checked id="checkboxSuccess1">
                                                <label for="checkboxSuccess1">Silla para Bebé
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group clearfix">
                                            <div class="icheck-danger d-inline">
                                                <input type="checkbox" checked id="checkboxDanger1">
                                                <label for="checkboxDanger1">Equipo de Sonido
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-comments bg-yellow"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="#"> Información Adicional</a>
                            </h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>

                                            </label>
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
            </div>
        </div>
    </section>
</div>
<!-- END timeline item -->

<?php
  include_once '../../plantillas/footer.php';
?>


<!-- formulario mantenimiento -->
<!-- /.card-header -->
