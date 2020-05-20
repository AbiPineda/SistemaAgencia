<?php
include_once '../../config/parametros.php';
include_once '../../plantilla/cabecera.php';
include_once '../../plantilla/menu.php';
?>


<link href="<?= $base_url ?>css/bootstrap.min.css" rel="stylesheet">

<link href="<?= $base_url ?>js/bootstrap.min.js" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="<?= $base_url ?>css/css-asesoria/style.css" rel="stylesheet">

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


<div class="blog-page area-padding">
    <div class="container">
        <div class="row">
            <!-- End left sidebar -->
            <!-- Start single blog -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">

                    <!-- SECTION -->
                    <div class="section">
                        <!-- container -->
                        <div class="container">
                            <!-- row -->
                            <div class="row">

                                <div class="container">
                                    <div class="page-header">
                                        <h1>Información Migratoria
                                        </h1>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel with-nav-tabs panel-default">
                                                <div class="panel-heading">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="#tab1default"
                                                                              data-toggle="tab">Información Personal</a></li>
                                                        <li><a href="#tab2default" data-toggle="tab">Información de
                                                                Viaje</a></li>
                                                        <li><a href="#tab3default" data-toggle="tab">Información
                                                                Familiar</a></li>
                                                        <li><a href="#tab4default" data-toggle="tab">Formación
                                                                Académica</a></li>

                                                    </ul>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="tab1default">
                                                            <div class="container contact-form">
                                                                <form method="post">
                                                                    <h3>Datos de Información Personal</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Nombre según su
                                                                                    pasaporte?</label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite su nombre">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Nombre de
                                                                                    soltera/o?</label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite su nombre">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Dirección de casa?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite su dirección">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Correo
                                                                                    electrónico?</label>
                                                                                <input type="email" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite su correo electrónico">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Fecha de
                                                                                    nacimiento?</label>
                                                                                <input type="date" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Ingrese su fecha de nacimiento">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Número de teléfono
                                                                                    casa?</label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite su número">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Número de teléfono
                                                                                    oficina?</label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite su número">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Número de teléfono
                                                                                    celular?</label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite su número">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Número de
                                                                                    pasaporte?</label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite su número">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Tipo de
                                                                                    pasaporte?</label>
                                                                                <select id="pasaporte" name="pasaporte">
                                                                                    <option selected="">Seleccione</option>
                                                                                    <option value="diplomatico">
                                                                                        Diplomatico
                                                                                    </option>
                                                                                    <option value="oficial">Oficial
                                                                                    </option>
                                                                                    <option value="salvoconductos">
                                                                                        Salvoconductos
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Ha perdido algún
                                                                                    pasaporte o se lo han robado?
                                                                                </label>
                                                                                <select id="perdido" name="perdido">
                                                                                     <option selected="">Seleccione</option>
                                                                                    <option value="perdido">
                                                                                        Perdido
                                                                                    </option>
                                                                                    <option value="robado">Robado
                                                                                    </option>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Redes Sociales que utiliza?
                                                                                </label>
                                                                               <div class="form-group multiple-form-group input-group">
                        <div class="input-group-btn input-group-select">
                            <input type="hidden" class="input-group-select-val" name="contacts['type'][]" value="phone">
                        </div>
                        <input type="text" name="contacts['value'][]" class="form-control" placeholder="Digite la red social">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-success btn-add" style="margin-top:-15px;">+</button>
                        </span>
                    </div>
              
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-11">
                                                                            <a name="btnSubmit"
                                                                               class="btn btn-danger disabled" 
                                                                               >Atrás
                                                                            </a>

                                                                            <a name="btnSubmit" href="#tab2default" data-toggle="tab"
                                                                               class="btn btn-success" style="float: right"
                                                                               >Siguiente
                                                                            </a>



                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab2default">
                                                            <div class="container contact-form">
                                                                <form method="post">
                                                                    <h3>Datos de Información sobre Viajes</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Fecha probable de
                                                                                    viaje?</label>
                                                                                <input type="date" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Fecha">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Cuántas personas
                                                                                    que viajaran con usted?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite el número de personas">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Nombre de las
                                                                                    personas?</label>
                                                                                <div class="form-group multiple-form-group input-group">
                        <div class="input-group-btn input-group-select">
                            <input type="hidden" class="input-group-select-val" name="contacts['type'][]" value="phone">
                        </div>
                        <input type="text" name="contacts['value'][]" class="form-control" placeholder="Digite el nombre de la persona">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-success btn-add" style="margin-top:-15px;">+</button>
                        </span>
                    </div>                                                                  
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Parentesco que tiene
                                                                                    con ellas?</label>
                                                                                <select id="parentesco"
                                                                                        name="parentesco">
                                                                                    <option selected="">Seleccione</option>
                                                                                    <option value="madre">Madre</option>
                                                                                    <option value="padre">Padre</option>
                                                                                    <option value="hermanos">Hermano/a
                                                                                    </option>
                                                                                    <option value="primos">Primo/a
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Ha tenido visa
                                                                                    antes?</label>
                                                                                <select id="visa" name="visa">
                                                                                     <option selected="">Seleccione</option>
                                                                                    <option value="si">Si</option>
                                                                                    <option value="no">No</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname"> ¿Ha viajado antes a
                                                                                    EEUU? </label>
                                                                                <select id="viajar" name="viajar">
                                                                                     <option selected="">Seleccione</option>
                                                                                    <option value="si">Si</option>
                                                                                    <option value="no">No</option>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Tiene alguna
                                                                                    petición trámite con
                                                                                    la embajada?</label>
                                                                                <select id="peticion" name="peticion">
                                                                                     <option selected="">Seleccione</option>
                                                                                    <option value="si">Si</option>
                                                                                    <option value="no">No</option>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Nombre de la empresa que visitará
                                                                                    en los EEUU?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite el nombre de la empresa">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Dirección de esa persona?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite la dirección de la persona">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Dirección de esa empresa?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite la dirección de la empresa">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Número de teléfono de esa persona?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite el número de teléfono">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Teléfono de esa empresa?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite el teléfono de la empresa">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿E-mail de esa persona?
                                                                                </label>
                                                                                <input type="email" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite el email de la persona">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿E-mail de la empresa?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite el email de la empresa">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-11">
                                                                             <a name="btnSubmit" data-toggle="tab"
                                                                               class="btn btn-danger" 
                                                                               href="#tab1default"
                                                                              >Atrás
                                                                            </a>

                                                                            <a name="btnSubmit" data-toggle="tab"
                                                                               class="btn btn-success" style="float: right"
                                                                              href="#tab3default">Siguiente
                                                                            </a>
                                                                        </div>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab3default">
                                                            <div class="container contact-form">
                                                                <form method="post">
                                                                    <h3>Datos Generales de Familiares</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Nombre completo de padre?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite el nombre del padre">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Fecha de nacimiento de padre?
                                                                                </label>
                                                                                <input type="date" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="fecha">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Está su padre en los EEUU?
                                                                                </label>
                                                                                <select id="" name="visa">
                                                                                     <option selected="">Seleccione</option>
                                                                                    <option value="si">Si</option>
                                                                                    <option value="no">No</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Qué estatus tiene?
                                                                                </label>
                                                                                <select id="" name="visa">
                                                                                     <option selected="">Seleccione</option>
                                                                                    <option value="si">Ciudadano/a</option>
                                                                                    <option value="no">Inducumentado/a</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--fin de una fila-->
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Nombre completo de madre?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite el nombre de la madre">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Fecha de nacimiento de madre?
                                                                                </label>
                                                                                <input type="date" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="fecha">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Esta su madre en los EEUU?
                                                                                </label>
                                                                                <select id="" name="visa">
                                                                                    <option selected="">Seleccione</option>
                                                                                    <option value="si">Si</option>
                                                                                    <option value="no">No</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Qué estatus tiene?
                                                                                </label>
                                                                                <select id="" name="visa">
                                                                                     <option selected="">Seleccione</option>
                                                                                    <option value="si">Ciudadano/a</option>
                                                                                    <option value="no">Inducumentado/a</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        </div><!--fin de la fila-->

                                                                        <div class="row">

                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Parientes en los EEUU que no sean
                                                                                    sus padres?
                                                                                </label>
                                                                                <select id="" name="visa">
                                                                                    <option selected="">Seleccione</option>
                                                                                    <option value="si">Si</option>
                                                                                    <option value="no">No</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Nombre de esa persona?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite el nombre de la persona">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Parentesco que tiene con ella?
                                                                                </label>
                                                                                <select id="parentesco"
                                                                                        name="parentesco">
                                                                                    <option selected="">Seleccione</option>
                                                                                    <option value="madre">Madre</option>
                                                                                    <option value="padre">Padre</option>
                                                                                    <option value="hermanos">Hermano/a
                                                                                    </option>
                                                                                    <option value="primos">Primo/a
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div><!--fin de la fila-->
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Fecha de nacimiento de esa persona?
                                                                                </label>
                                                                                <input type="date" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Fecha">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Nacionalidad de esa persona?
                                                                                </label>
                                                                                <select id="parentesco"
                                                                                        name="parentesco">
                                                                                    <option selected="">Seleccione</option>
                                                                                    <option value="Salvadoreña">Salvadoreña</option>
                                                                                    <option value="Otra">Otra</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Es casado/a?
                                                                                </label>
                                                                               <select id="casado"
                                                                                        name="parentesco">
                                                                                    <option value="selec" selected="">Seleccione</option>
                                                                                    <option value="si">Si</option>
                                                                                    <option value="no">No</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Nombre de su cónyuge?
                                                                                </label>
                                                                    <input type="text" id="input_nombre_conyuge"
                                                                                       name="firstname" disabled="" 
                                                                                       placeholder="Digite el nombre del cónyuge">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Fecha de nacimiento de su cónyuge?
                                                                                </label>
                                                                                <input type="date" id="input_fecha_conyuge"
                                                                                       name="firstname"
                                                                                       placeholder="fecha" disabled />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Nacionalidad de su cónyuge?
                                                                                </label>
                                                                                <select id="nacionalidad_conyuge" name="parentesco" disabled>
                                                                                    <option selected="">Seleccione</option>
                                                                                    <option value="Salvadoreña">Salvadoreña</option>
                                                                                    <option value="Otra">Otra</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-11">
                                                                             <a name="btnSubmit" data-toggle="tab"
                                                                               class="btn btn-danger " 
                                                                               href="#tab2default"
                                                                              >Atrás
                                                                            </a>

                                                                            <a name="btnSubmit" data-toggle="tab"
                                                                                href="#tab4default"
                                                                               class="btn btn-success 
                                                                               " style="float: right" 
                                                                               >Siguiente
                                                                            </a>
                                                                        </div>
                                                                      </form>
                                                                    </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab4default">
                                                            <div class="container contact-form">
                                                                <form method="post">
                                                                    <h3>Datos sobre Formación Académica</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label> ¿Estudios
                                                                                    realizados? </label>
                                                                                    
                                                                                <select id="educacion" name="educacion">
                                                                                    <option selected="">Seleccione</option>
                                                                                    <option value="basica">Educación Basica</option>
                                                                                    <option value="media">Educación Media</option>
                                                                                    <option value="superior">Educación Superior</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Lugar donde los estudio?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Digite el nombre del lugar">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Dirección del lugar donde los
                                                                                    estudio?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Dirección del lugar">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Año en que los termino? 
                                                                                </label>
                                                                                <input type="date" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="fecha">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-11">
                                                                             <a name="btnSubmit"
                                                                                href="#tab3default"
                                                                                data-toggle ="tab"
                                                                               class="btn btn-danger " 
                                                                               value="Siguiente">Atrás
                                                                                 
                                                                            </a>

                                                                            <a name="btnSubmit" data-toggle="tab"
                                                                               class="btn btn-success disabled" style="float: right"
                                                                               value="Siguiente">Siguiente
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab5default">Default 5
                                                            <div class="container contact-form">
                                                                <form method="post">
                                                                    <h3>Drop Us a Message</h3>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Fecha probable de
                                                                                    viaje?</label>
                                                                                <input type="text" id="fname"
                                                                                       name="firstname"
                                                                                       placeholder="Your name..">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input type="submit" name="btnSubmit"
                                                                                   class="btnContact"
                                                                                   value="Send Message" />
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?=$base_url?>vistas/asesoria/js/input.js"></script>
<?php
include_once '../../plantilla/footer.php';
?>