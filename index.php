<?php
require_once "clases/conexion/conexion.php";
$conexion = new conexion;

$query = "select * from pacientes";
print_r($conexion->obtenerDatos($query));
?>