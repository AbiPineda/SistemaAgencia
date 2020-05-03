<?php
include_once '../../config/parametros.php';
?>
<div class="content-wrapper" style="min-height: 1185.73px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reserva de Tour</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item active">Mantenimiento</li>
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
                        <i class="fas fa-plane bg-blue"></i>
                        <div class="timeline-item">
                            <!--<span class="time"><i class="fas fa-clock"></i> 12:05</span>-->
                            <h3 class="timeline-header"><a href="#">Datos Generales:</a></h3>

                            <div class="timeline-body">
                                <div class="row">

                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Nombre del Cliente</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option >Juan Perez Martinez (juan01)</option>
                                                <option>Eduardo Antonio Bermudez (Bern03)</option>
                                                <option>Agustina Palacios Barahona (faraon93)</option>
                                                <option>Maria Semedos Lara Benitenz (Bens12)</option>
                                                <option>Marca Andrea Comayagua (abre_w)</option>
                                                <option>Mauricion Antnonio Landaverte(maur-we) </option>
                                                <option>Julia Helien Valladares (la_valla)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Seleccione el Tour</label>
                                            <div class="select2-blue">
                                                <select class="form-control select2" style="width: 100%;">
                                                    <option data-select2-id="146">!VAMONOS A COSTA RICA¡</option>
                                                    <option data-select2-id="147">VÁMONOS AL FESTIVAL DE LAS FLORES A GUATEMALA</option>
                                                    <option data-select2-id="148">VÁMONOS A NICARAGUA</option>
                                                    <option data-select2-id="149">¡ ¡ ¡ VÁMONOS A MACHUPICCHU !!!</option>
                                                    <option data-select2-id="161">¡¡¡VAMONOS A ORIENTE - VOLCAN DE CONCHAGUA!!!</option>
                                                    <option data-select2-id="163">¡¡¡ TOURS A PARADISIACA ROATÁN!!!</option>
                                                </select>
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
                        <i class="fas fa-user bg-green"></i>
                        <div class="timeline-item">
                            <!--<span class="time"><i class="fas fa-clock"></i> 5 mins ago</span>-->
                            <h3 class="timeline-header no-border"><a href="#">Numero de asientos</a></h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Adultos (+12 años)</label>
                                            <input type="number" class="form-control" min="1" max="100">
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
                                            <label>Bebés (0 a 4 años)</label>
                                            <input type="number" class="form-control" min="1" max="4">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label>Tercera edad (+60)</label>
                                            <input type="number" class="form-control" min="1" max="5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                        <i class="fas fa-list bg-yellow"></i>
                        <div class="timeline-item">
                            <!--<span class="time"><i class="fas fa-clock"></i> 27 mins ago</span>-->
                            <h3 class="timeline-header"><a href="#">Costo total del tour</a>
                            </h3>
                            <div class="timeline-body">
                                <div class="row">
                                    <div class="offset-4"></div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                        <label>Total</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control"  value="$239.43">
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
                <!-- END timeline item -->
            </div>
        </div>
    </section>
</div>

