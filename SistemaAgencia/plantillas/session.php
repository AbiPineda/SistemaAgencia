<?php
session_start();
if (isset($_SESSION["activo"])) {
   echo ('<p style="padding-left: 265px;" >LOGUEADO, ROL ' . $_SESSION['nivel'] . '</p>');
} else {
   echo ("NO LOGUEADO");
}