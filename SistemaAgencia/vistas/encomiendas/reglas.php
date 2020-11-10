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
                    <h1>Registro de Reglas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Registro de Reglas</li>
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
                        <i class="fas fa-box-open bg-blue"></i>
                        <div class="timeline-item">

                            <h3 class="timeline-header"><a href="#">Reglas de los Productos</a></h3>

                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                            <label for="cars">Seleccione el Producto:</label>

                                            <select id="categoria" class="form-control">
                                                <option value="permitido">Acetaminofen</option>
                                                <option value="no">Jeringas</option>
                                                <option value="no">Y más efecto de diseño</option>
                                            </select> 
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                         <!-- text input -->
                                         <div class="form-group">
                                            <label>Unidades de medidad</label>
                                            <input type="text" class="form-control" placeholder="Introduzca la unidad de medida">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                         <!-- text input -->
                                         <div class="form-group">
                                            <label>Tarifa</label>
                                            <input type="text" class="form-control" placeholder="Introduzca la tarifa">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                         <!-- text input -->
                                         <div class="form-group">
                                            <label>Comisión</label>
                                            <input type="text" class="form-control" placeholder="Introduzca la comisión">
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


<?php
  include_once '../../plantillas/footer.php';
?>
