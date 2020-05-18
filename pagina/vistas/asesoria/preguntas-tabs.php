<?php
include_once '../../config/parametros.php';
include_once '../../plantilla/cabecera.php';
include_once '../../plantilla/menu.php';

?>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<style>
.panel.with-nav-tabs .panel-heading {
    padding: 5px 5px 0 5px;
}

.panel.with-nav-tabs .nav-tabs {
    border-bottom: none;
}

.panel.with-nav-tabs .nav-justified {
    margin-bottom: -1px;
}

/********************************************************************/
/*** PANEL DEFAULT ***/
.with-nav-tabs.panel-default .nav-tabs>li>a,
.with-nav-tabs.panel-default .nav-tabs>li>a:hover,
.with-nav-tabs.panel-default .nav-tabs>li>a:focus {
    color: #777;
}

.with-nav-tabs.panel-default .nav-tabs>.open>a,
.with-nav-tabs.panel-default .nav-tabs>.open>a:hover,
.with-nav-tabs.panel-default .nav-tabs>.open>a:focus,
.with-nav-tabs.panel-default .nav-tabs>li>a:hover,
.with-nav-tabs.panel-default .nav-tabs>li>a:focus {
    color: #777;
    background-color: #ddd;
    border-color: transparent;
}

.with-nav-tabs.panel-default .nav-tabs>li.active>a,
.with-nav-tabs.panel-default .nav-tabs>li.active>a:hover,
.with-nav-tabs.panel-default .nav-tabs>li.active>a:focus {
    color: #555;
    background-color: #fff;
    border-color: #ddd;
    border-bottom-color: transparent;
}

.with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu {
    background-color: #f5f5f5;
    border-color: #ddd;
}

.with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>li>a {
    color: #777;
}

.with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>li>a:hover,
.with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>li>a:focus {
    background-color: #ddd;
}

.with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>.active>a,
.with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>.active>a:hover,
.with-nav-tabs.panel-default .nav-tabs>li.dropdown .dropdown-menu>.active>a:focus {
    color: #fff;
    background-color: #555;
}


input[type=text],
select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>


<!--Banner de auto -->
<div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <BR>
                <BR>
                <BR>


            </div>
        </div>
    </div>
</div>
<!--Banner de auto -->


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
                                                                Academica</a></li>

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
                                                                                    placeholder="Digite su nombre:">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Nombre de
                                                                                    soltera/o?</label>
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Digite su nombre:">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Dirección de casa?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Digite su dirección:">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Correo
                                                                                    electrónico?</label>
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Digite su correo electrónico:">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Fecha de
                                                                                    nacimiento?</label>
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Ingrese su fecha de nacimiento:">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Número de teléfono
                                                                                    casa?</label>
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Digite su numero:">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Número de teléfono
                                                                                    oficina?</label>
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Digite su numero:">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Número de teléfono
                                                                                    celular?</label>
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Digite su numero:">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Número de
                                                                                    pasaporte?</label>
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Digite su numero:">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Tipo de
                                                                                    pasaporte?</label>
                                                                                <select id="pasaporte" name="pasaporte">
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
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Redes sociales">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-11">
                                                                            <div class="form-group">
                                                                                <input type="submit" name="btnSubmit"
                                                                                    class="btnContact"
                                                                                    value="Guardar" />
                                                                            </div>
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
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Your name..">
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
                                                                                    placeholder="Your name..">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <fieldset id="input1"
                                                                                    class="clonedInput">
                                                                                    <label for="fname">¿Nombre de las
                                                                                        personas?</label>
                                                                                    <input type="text" id="name1"
                                                                                        name="name1"
                                                                                        placeholder="Your name..">
                                                                                </fieldset>
                                                                                <fieldset>
                                                                                    <input type="button" id="btnAdd"
                                                                                        value="+" />
                                                                                    
                                                                                </fieldset>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">¿Parentesco que tiene
                                                                                    con ellas?</label>
                                                                                <select id="parentesco"
                                                                                    name="parentesco">
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
                                                                                    <option value="si">Sí</option>
                                                                                    <option value="no">No</option>

                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname"> ¿Ha viajado antes a
                                                                                    EEUU? </label>
                                                                                <select id="viajar" name="viajar">
                                                                                    <option value="si">Sí</option>
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
                                                                                    <option value="si">Sí</option>
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
                                                                                    placeholder="Your name..">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Dirección de esa persona?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Your name..">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Dirección de esa empresa?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Your name..">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Número de teléfono de esa persona?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Your name..">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿Teléfono de esa empresa?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Your name..">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿E-mail de esa persona?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Your name..">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="form-group">
                                                                                <label for="fname">
                                                                                    ¿E-mail de la empresa?
                                                                                </label>
                                                                                <input type="text" id="fname"
                                                                                    name="firstname"
                                                                                    placeholder="Your name..">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-11">
                                                                            <div class="form-group">
                                                                                <input type="submit" name="btnSubmit"
                                                                                    class="btnContact"
                                                                                    value="Guardar" />
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab3default">Default 3
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
                                                        <div class="tab-pane fade" id="tab4default">Default 4
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


<script>
$(document).ready(function() {
    $('#btnDel').attr('disabled', 'disabled');
    $('#btnAdd').click(function() {
        var num = $('.clonedInput').length; // how many "duplicatable" input fields we currently have
        var newNum = new Number(num + 1); // the numeric ID of the new input field being added

        // create the new element via clone(), and manipulate it's ID using newNum value
        var newElem = $('#input' + num).clone().attr('id', 'Add' + newNum);

        // manipulate the name/id values of the input inside the new element
        newElem.children(':last').attr('id', 'name' + newNum).attr('name', 'name' + newNum);

        // insert the new element after the last "duplicatable" input field
        $('#input' + num).after(newElem);

        // enable the "remove" button
        $('#btnDel').attr('disabled', false);

        // business rule: you can only add 10 names
        if (newNum == 10)
            $('#btnAdd').attr('disabled', 'disabled');
    });

    $('#btnDel').click(function() {
        var num = $('.clonedInput').length; // how many "duplicatable" input fields we currently have
        $('#input' + num).remove(); // remove the last element

        // enable the "add" button
        $('#btnAdd').attr('disabled', false);

        // if only one element remains, disable the "remove" button
        if (num - 1 == 1)
            $('#btnDel').attr('disabled', 'disabled');
    });

});
</script>



<?php 
include_once '../../plantilla/footer.php';
 ?>