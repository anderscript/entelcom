<?php
session_start();
include('conexion.php');
include('variables-usuarios.php');
$nombre_completo = $_POST['nombre_completo']; //nombre del formulario lead
$correo = $_POST['correo']; //Correo del formulario lead

$sql = "INSERT INTO lead (nombre, correo, creador, oportunidad) values ('$nombre_completo', '$correo', '$nombre', '0')";

$resultado=$conn -> query($sql);

header("location: ../lead.php");



?>