<?php
include('conexion.php');
    $id = $_POST['id_cliente'];
    $pais =$_POST['pais'];
    $email  =$_POST['email'];
    $lead =$_POST['lead'];
    $telefono =$_POST['telefono'];
    $web =$_POST['web'];
    $conpania =$_POST['conpania'];

    $sql="UPDATE lead SET nombre = '$lead', correo ='$email', telefono='$telefono', pais='$pais', web='$web', conpania='$conpania' where id_cliente='$id'";
    $conn ->query($sql);
?>