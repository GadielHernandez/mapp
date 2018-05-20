<?php
$base = "";
require 'config/config.php'; //<-- se incluye el archivo de configuracion
session_start(); //<-- se inicia la sesion de un usuario
Page::ForceLogin(); //<-- se verifica si de verdad esta logueado un usuario si no se dirige al login
require_once 'views/header.php'; //<-- se incluye el encabezado
$page = selectView($_SESSION['privileges']); //<--  se selecciona cual vista mostrar
require_once 'views/' . $page . '.php'; //<-- se muestra la vista a el usuario

?>
