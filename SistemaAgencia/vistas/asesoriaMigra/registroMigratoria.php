<?php
include_once '../../config/parametros.php';
?>
<script>
    $(function () {
        $("#casado").change(function () {
            // alert($(this).val());
            if ($(this).val() === "si") {
                $("#input_nombre_conyuge").prop("disabled", false);
                $("#input_fecha_conyuge").prop("disabled", false);
                $("#nacionalidad_conyuge").prop("disabled", false);
            }

            if ($(this).val() === "no") {
                $("#input_nombre_conyuge").prop("disabled", true);
                $("#input_fecha_conyuge").prop("disabled", true);
                $("#nacionalidad_conyuge").prop("disabled", true);
            }
        });
    });
</script>

<div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>

                            <small> Registro de Información Migratoria</small>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Información Migratoria</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- ./row -->
                <div class="row">
                    <div class="col-12 col-sm-1"></div>
                    <div class="col-12 col-sm-10">
                        <div class="card card-primary card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-Personal" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Información Personal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Información de Viaje</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Información Familiar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Formación Académica</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">

                                    <div class="tab-pane fade show active" id="custom-tabs-one-Personal" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Nombre según su pasaporte?</label>
                                                    <input type="text" placeholder="Digite el nombre según pasaporte" class="form-control">

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Nombre de soltera/o?</label>
                                                    <input type="text" placeholder="Digite el nombre" class="form-control">
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->
                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Dirección de casa? </label>
                                                    <input type="text" placeholder="Digite la Dirección de su casa" class="form-control">

                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Correo electrónico?</label>  
                                                    <input type="email" placeholder="Digite el correo electrónico" class="form-control">

                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->
                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Fecha de nacimiento?</label>
                                                    <input type="date" class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Número de teléfono casa?</label> 
                                                    <input type="text" placeholder="Digite el número de Teléfono" class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Número de teléfono oficina?</label> 
                                                    <input type="text" placeholder="Digite el número de la oficina" class="form-control">
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Número de teléfono celular?</label>
                                                    <input type="text" placeholder="Digite el número de celular" class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Número de pasaporte?</label>
                                                    <input type="text" placeholder="Digite el numero de pasaporte" class="form-control">
                                                </div>

                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Tipo de pasaporte?</label>
                                                    <select id="categoria" class="form-control">
                                                        <option value="permitido">Diplomatico</option>
                                                        <option value="no">Oficial</option>
                                                        <option value="no"> Salvoconductos </option>

                                                    </select>
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->

                                        <!--**************una pregunta*********-->
                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label>
                                                        ¿Ha perdido algún pasaporte o se lo han robado?
                                                    </label>

                                                </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <select id="categoria" class="form-control">
                                                        <option value="" selected>Seleccione</option>
                                                        <option value="permitido">Perdido</option>
                                                        <option value="no">Robado</option>

                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-lg-2"></div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->

                                        <!--************** fin una pregunta*********-->  
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card">

                                                    <div class="card-header">
                                                        <h4 class="card-title"><label>¿Redes Sociales que utiliza? </label></h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <!-- the events -->
                                                        <div id="external-events1">
                                                            <div class="external-event bg-blue">Facebook</div>
                                                            <div class="external-event bg-success">WhatsApp</div>
                                                            <div class="checkbox">
                                                                <label for="drop-remove">
                                                                    <input type="checkbox" id="drop-remove">
                                                                    Eliminar
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>


                                            </div>

                                            <div class="col-lg-6">
                                                <!-- /.card -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Nombre de las personas</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                                          <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                                                            <ul class="fc-color-picker" id="color-chooser1">
                                                                <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                                                                <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                                                                <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                                                                <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                                                                <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /btn-group -->
                                                        <div class="input-group">
                                                            <input id="new-event1" type="text" class="form-control" placeholder="Digite el nombre">

                                                            <div class="input-group-append">
                                                                <button id="add-new-event1" type="button" class="btn btn-primary">Agregar</button>
                                                            </div>
                                                            <!-- /btn-group -->
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                </div>
                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->

                                    </div><!--fin de una pestaña-->

                                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Fecha probable de viaje?</label>
                                                    <input type="date" class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Cuántas personas que viajaran con usted?</label>
                                                    <input type="number" placeholder="Digite el Número de personas" class="form-control">
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->  
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card">

                                                    <div class="card-header">
                                                        <h4 class="card-title"><label>¿Nombre de las personas? </label></h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <!-- the events -->
                                                        <div id="external-events">
                                                            <div class="external-event bg-success">Petronila González</div>
                                                            <div class="external-event bg-warning">N'Golo Kanté</div>
                                                            <div class="checkbox">
                                                                <label for="drop-remove">
                                                                    <input type="checkbox" id="drop-remove">
                                                                    Eliminar
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>


                                            </div>

                                            <div class="col-lg-6">
                                                <!-- /.card -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Nombre de las personas</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                                          <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                                                            <ul class="fc-color-picker" id="color-chooser">
                                                                <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                                                                <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                                                                <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                                                                <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                                                                <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /btn-group -->
                                                        <div class="input-group">
                                                            <input id="new-event" type="text" class="form-control" placeholder="Digite el nombre">

                                                            <div class="input-group-append">
                                                                <button id="add-new-event" type="button" class="btn btn-primary">Agregar</button>
                                                            </div>
                                                            <!-- /btn-group -->
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                </div>
                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********-->
                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Parentesco que tiene con ellas?</label>
                                                    <select class="select2" id="combo_cerrada" multiple="multiple" data-placeholder="Seleccione" style="width:100%;">
                                                        <option>Primos/as</option>
                                                        <option>Madre</option>
                                                        <option>Padre</option>
                                                        <option>Hermanos/as</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Ha tenido visa antes?</label>
                                                    <select id="categoria" class="form-control">
                                                        <option value="" selected>Seleccione</option>
                                                        <option value="permitido">Si</option>
                                                        <option value="no">No</option>

                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Ha viajado antes a Estados Unidos?</label>
                                                    <select id="categoria" class="form-control">
                                                        <option value="" selected>Seleccione</option>
                                                        <option value="permitido">Si</option>
                                                        <option value="no">No</option>

                                                    </select>
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********--> 

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Tiene alguna petición de familia en trámite con la embajada de Estados Unidos?</label>
                                                    <select id="categoria" class="form-control">
                                                        <option value="" selected>Seleccione</option>
                                                        <option value="permitido">Si</option>
                                                        <option value="no">No</option>

                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Nombre de la empresa que visitará en los Estados Unidos?</label>
                                                    <input type="text" placeholder="Digite la Empresa" class="form-control">
                                                </div>

                                            </div>



                                        </div> 
                                        <!--************** fin una pregunta*********--> 

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Dirección de esa persona?</label>
                                                    <input type="text" placeholder="Digite la Dirección" class="form-control">

                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Dirección de esa empresa?</label>
                                                    <input type="text" placeholder="Digite la Dirección" class="form-control">
                                                </div>

                                            </div>



                                        </div> 
                                        <!--************** fin una pregunta*********--> 

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Número de teléfono de esa persona?</label>
                                                    <input type="text" placeholder="Digite la Teléfono" class="form-control">

                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Número de teléfono de esa empresa?</label>
                                                    <input type="text" placeholder="Digite la Teléfono" class="form-control">
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********--> 

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿e-mail de esa persona?</label>
                                                    <input type="text" placeholder="Digite el e-mail" class="form-control">

                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿e-mail de esa empresa?</label>
                                                    <input type="text" placeholder="Digite el e-mail" class="form-control">
                                                </div>

                                            </div>



                                        </div> 
                                        <!--************** fin una pregunta*********--> 
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Nombre completo de padre?</label>
                                                    <input type="text" placeholder="Digite el nombre" class="form-control">
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Fecha de nacimiento de padre?</label>
                                                    <input type="date" class="form-control">
                                                </div>

                                            </div>

                                        </div> 
                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Esta su padre en los Estados Unidos?</label>
                                                    <select id="categoria" class="form-control">
                                                        <option value="" selected>Seleccione</option>
                                                        <option value="permitido">Si</option>
                                                        <option value="no">No</option>

                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Qué estatus tiene su padre?</label>
                                                    <select id="categoria" class="form-control">
                                                        <option value="" selected>Seleccione</option>
                                                        <option value="permitido">Indocumentado</option>
                                                        <option value="no">Residente</option>

                                                    </select>
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********--> 

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Nombre completo de madre?</label>
                                                    <input type="text" placeholder="Digite el nombre" class="form-control">

                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Fecha de nacimiento de madre?</label>
                                                    <input type="date" class="form-control">
                                                </div>

                                            </div>



                                        </div> 
                                        <!--************** fin una pregunta*********--> 

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>¿Esta su madre en los Estados Unidos? </label>
                                                    <select id="categoria" class="form-control">
                                                        <option value="" selected>Seleccione</option>
                                                        <option value="permitido">Si</option>
                                                        <option value="no">No</option>

                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>¿Qué estatus tiene su madre? </label><br>
                                                    <select id="categoria" class="form-control">
                                                        <option value="" selected>Seleccione</option>
                                                        <option value="permitido">Indocumentado</option>
                                                        <option value="no">Residente</option>

                                                    </select>    
                                                </div>

                                            </div>
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label>¿Tiene parientes en los Estados Unidos que no sean sus padres? </label>
                                                    <select id="categoria" class="form-control">
                                                        <option value="" selected>Seleccione</option>
                                                        <option value="permitido">Si</option>
                                                        <option value="no">No</option>

                                                    </select>   
                                                </div>

                                            </div>



                                        </div> 
                                        <!--************** fin una pregunta*********--> 

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Nombre de esa persona?</label>
                                                    <input type="text" placeholder="Digite el nombre" class="form-control">

                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Parentesco que tiene con ella?</label>
                                                    <select id="categoria" class="form-control">
                                                        <option value="" selected>Seleccione</option>
                                                        <option value="permitido">Hermana/o</option>
                                                        <option value="no">Prima/o</option>

                                                    </select> 
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********--> 

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Fecha de nacimiento de esa persona?</label>
                                                    <input type="date" placeholder="Digite el e-mail" class="form-control">

                                                </div>

                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Nacionalidad de esa persona? </label>
                                                    <select id="categoria" class="form-control">
                                                        <option value="" selected>Seleccione</option>
                                                        <option value="permitido">Salvadoreña</option>
                                                        <option value="no">Otra</option>

                                                    </select>    
                                                </div>

                                            </div>

                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label>¿Es casado/a?  </label>
                                                    <select id="casado" class="form-control">
                                                        <option value="" selected>Seleccione</option>
                                                        <option value="si">Si</option>
                                                        <option value="no">No</option>

                                                    </select>    
                                                </div>

                                            </div>

                                        </div> 
                                        <!--************** fin una pregunta*********--> 

                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Nombre de su cónyuge?</label>
                                                    <br>
                                                    <br>
                                                    <input type="text" id="input_nombre_conyuge" disabled placeholder="Digite el nombre" class="form-control">

                                                </div>

                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>¿Fecha de nacimiento de su cónyuge?</label>
                                                    <input type="date" id="input_fecha_conyuge" disabled placeholder="Digite el nombre" class="form-control">

                                                </div>

                                            </div>

                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>¿Nacionalidad de su cónyuge?</label>
                                                    <select id="nacionalidad_conyuge" disabled class="form-control">
                                                        <option value="" selected>Seleccione</option>
                                                        <option value="permitido">Salvadoreña</option>
                                                        <option value="no">Otra</option>

                                                    </select>     
                                                </div>

                                            </div>



                                        </div> 
                                        <!--************** fin una pregunta*********--> 
                                    </div>

                                    <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                                        <!--**************una pregunta*********-->
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Estudios realizados?</label>
                                                    <div class="select2-blue">
                                                         <select id="estudios" class="form-control">
                                                        <option>Primero-Noveno</option>
                                                            <option>Educación Media</option>
                                                            <option>Educación Superior</option>
                                                        </select>
                                                    </div>   
                                                </div>

                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Lugar donde los estudio?</label>
                                                    <input type="text" placeholder="Digite el lugar" class="form-control">
                                                </div>

                                            </div>

                                        </div> 
                                        <!--**************una pregunta*********--> 
                                        
                                        <!--**************una pregunta*********-->
                                        <div class="row">
                                            
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Direccion del lugar donde los estudio?</label>
                                                    <input type="text" placeholder="Digite el lugar" class="form-control">
                                                </div>

                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>¿Año en que los termino?</label>
                                                    <input type="date" placeholder="Digite la Dirección" class="form-control">
                                                 
                                                </div>

                                            </div>
                                            

                                        </div> 
                                        <!--**************una pregunta*********--> 
                                             <div style="text-align: right;width:577px;margin-top:-8px;">
                                      <a class="btn btn-primary btn-sm" style="color: white">Guardar</a>
                                <a class="btn btn-danger btn-sm" style="color: white">Cancelar</a>

                                    </div>
                                    </div>

                                </div>


                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="col-12 col-sm-1"></div>
            </div>


        </section>
    </div>
</div>


<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {'placeholder': 'dd/mm/yyyy'})
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {'placeholder': 'mm/dd/yyyy'})
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservationdate').datetimepicker({
            format: 'L'
        });
        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
        )

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        //Bootstrap Duallistbox
        $('.duallistbox').bootstrapDualListbox()


        $('.my-colorpicker2').on('colorpickerChange', function (event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
        });

        $("input[data-bootstrap-switch]").each(function () {
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });

    })
</script>

<script>

    $(function () {

        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
            ele.each(function () {

                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                }

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject)

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 1070,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0  //  original position after the drag
                })

            })
        }

        ini_events($('#external-events1 div.external-event'))

        /* initialize the calendar
         -----------------------------------------------------------------*/

        var Draggable = FullCalendarInteraction.Draggable;

        var containerEl = document.getElementById('external-events1');
        var checkbox = document.getElementById('drop-remove');
        var calendarEl = document.getElementById('calendar');

        // initialize the external events
        // -----------------------------------------------------------------

        new Draggable(containerEl, {
            itemSelector: '.external-event',
            eventData: function (eventEl) {
                console.log(eventEl);
                return {
                    title: eventEl.innerText,
                    backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                    borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                    textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
                };
            }
        });

        /* ADDING EVENTS */
        var currColor = '#3c8dbc' //Red by default
        //Color chooser button
        var colorChooser = $('#color-chooser-btn')
        $('#color-chooser1 > li > a').click(function (e) {
            e.preventDefault()
            //Save color
            currColor = $(this).css('color')
            //Add color effect to button
            $('#add-new-event1').css({
                'background-color': currColor,
                'border-color': currColor
            })
        })
        $('#add-new-event1').click(function (e) {
            e.preventDefault()
            //Get value and make sure it is not null
            var val = $('#new-event1').val()
            if (val.length == 0) {
                return
            }

            //Create events
            var event = $('<div />')
            event.css({
                'background-color': currColor,
                'border-color': currColor,
                'color': '#fff'
            }).addClass('external-event')
            event.html(val)
            $('#external-events1').prepend(event)

            //Add draggable funtionality
            ini_events(event)

            //Remove event from text input
            $('#new-event1').val('')
        })
    })


    /////////////////*****fin primero
</script>
<script>
    $(function () {

        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
            ele.each(function () {

                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                }

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject)

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 1070,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0  //  original position after the drag
                })

            })
        }

        ini_events($('#external-events div.external-event'))

        /* initialize the calendar
         -----------------------------------------------------------------*/

        var Draggable = FullCalendarInteraction.Draggable;

        var containerEl = document.getElementById('external-events');
        var checkbox = document.getElementById('drop-remove');
        var calendarEl = document.getElementById('calendar');

        // initialize the external events
        // -----------------------------------------------------------------

        new Draggable(containerEl, {
            itemSelector: '.external-event',
            eventData: function (eventEl) {
                console.log(eventEl);
                return {
                    title: eventEl.innerText,
                    backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                    borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                    textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
                };
            }
        });

        /* ADDING EVENTS */
        var currColor = '#3c8dbc' //Red by default
        //Color chooser button
        var colorChooser = $('#color-chooser-btn')
        $('#color-chooser > li > a').click(function (e) {
            e.preventDefault()
            //Save color
            currColor = $(this).css('color')
            //Add color effect to button
            $('#add-new-event').css({
                'background-color': currColor,
                'border-color': currColor
            })
        })
        $('#add-new-event').click(function (e) {
            e.preventDefault()
            //Get value and make sure it is not null
            var val = $('#new-event').val()
            if (val.length == 0) {
                return
            }

            //Create events
            var event = $('<div />')
            event.css({
                'background-color': currColor,
                'border-color': currColor,
                'color': '#fff'
            }).addClass('external-event')
            event.html(val)
            $('#external-events').prepend(event)

            //Add draggable funtionality
            ini_events(event)

            //Remove event from text input
            $('#new-event').val('')
        })
    })
</script>

