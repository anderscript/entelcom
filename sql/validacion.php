<?php
session_start();

include('conexion.php');
include('extraccion.php');

$usuario = $_POST['username'];
$pass = $_POST['password'];

 
$extraccion_usuario = "SELECT * from usuarios where nombre = '$usuario'";
	
	$resultado_usuario = $conn -> query($extraccion_usuario);
	
	$perdomo_usuario =$resultado_usuario -> fetch_assoc();

	if($pass == $perdomo_usuario['pass'] and $usuario != ""){
         $_SESSION['nombre'] = $usuario;
         $_SESSION['clave'] = $pass;
		header('location: ../index.php');
	} else 
	{
		header('location: ../auth-404.html');
	}



?>