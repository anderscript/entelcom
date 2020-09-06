<?php
include('conexion.php');
$id = $_POST['id'];
$id_cliente = $_POST['id_cliente'];
$valor = $_POST['valor'];
$fecha = $_POST['fecha'];
$tipo = $_POST['tipo'];
$sql="UPDATE oportunidad SET valor = '$valor', tipo ='$tipo', fecha='$fecha' where id='$id'";
$conn ->query($sql);
header("location: ../gestion-lead.php?id=$id_cliente");
?>