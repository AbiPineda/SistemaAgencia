<?php

if (isset($_POST['idTransaccion'])) {


    foreach ($_POST as $valor) {
        echo $valor . '<br>';
    }
} else {
    echo "NO HAY NADA";
}