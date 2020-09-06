<?php
include("conexion.php");
$id = $_POST['id_cliente'];
$nombre = $_POST['nombre_usuario'];
$valor = $_POST['valor'];
$tipo= $_POST['tipo'];
$fecha = $_POST['fecha'];
    $sql = "INSERT INTO oportunidad (id_cliente, valor, creador, tipo, fecha) values ('$id', '$valor', '$nombre', '$tipo', '$fecha')";
    $conn -> query($sql);
    
?>