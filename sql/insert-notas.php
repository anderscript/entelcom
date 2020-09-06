<?php
include("conexion.php");

if(isset($_POST['notas'])){
    $comentario = $_POST['notas'];
    $id_cliente = $_POST['id_cliente'];
    $nombre = $_POST['nombre_usuario'];
    $dia = date('j');
    $dia_final= $dia - 1;
    $mes= date('m');
    $ano = date('y');
    $fecha = $dia_final."/".$mes."/".$ano;

    $sql="INSERT INTO notas_gestiones (id_cliente, comentario, fecha, nombre) values ('$id_cliente', '$comentario', '$fecha', '$nombre')";
    $conn -> query($sql);
    echo "Se agrego la nota";
}

?>