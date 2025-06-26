<?php
$conexion = new mysqli("localhost", "root", "Control19", "colegio");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
