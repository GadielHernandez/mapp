<?php
ini_set('display_errors', 'Off');

include_once $base . "inc/database.php"; //<-- archivo que permite la conexion a la base de datos
include_once $base . "inc/user.php"; //<-- archivo que registra la configuracion del usuario
include_once $base . "inc/page.php"; //<-- permite redireccionar la pagina si no se esta logueado
include_once $base . "inc/query.php"; //<-- permite hacer consultas a la BD
include_once $base . "inc/controller.php"; //<-- define que mostrar de acuerdo a el privilegio de usuario

$con = DB::getConnection(); //<-- inicia la conexion a la BD
?>
