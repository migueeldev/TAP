<?php
// conexion.php

$conexion = new mysqli("localhost", "root", "", "test_estilos");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
