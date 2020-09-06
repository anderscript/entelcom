<?php
include("conexion.php");



  if(isset($_GET['phone'])){
    
    $id = $_GET['id'];
    
    $pais = $_GET['pais'];
    $sql = "UPDATE lead SET telefono = '$phone' where id_cliente='$id'";
    $resultado = $conn -> query($sql);
    echo "Se guardo Telefono";

  }
    
  if(isset($_GET['correo'])){
    $correo = $_GET['correo'];
    $id = $_GET['id'];
    $sql_correo = "UPDATE lead SET correo = '$correo' where id_cliente='$id'";
    $resultado_correo = $conn -> query($sql_correo);
    echo "Se guardo Correo";
  }

  if(isset($_GET['correo'])){
    $correo = $_GET['pais'];
    $id = $_GET['id'];
    $sql_pais = "UPDATE lead SET pais = '$pais' where id_cliente='$id'";
    $resultado_pais = $conn -> query($sql_pais);
    echo "Se guardo Pais";
  }
    

    if(isset($_POST['valor'])){
        $valor = $_POST['valor'];
        $id = $_POST['id'];
        $sql_correo = "UPDATE lead SET oportunidad = '$valor' where id_cliente='$id'";
        $resultado_correo = $conn -> query($sql_correo);
        
        $extraccion_lead = "SELECT * from lead where id_cliente = '$id'";

    $resultado_lead = $conn -> query($extraccion_lead);

    $perdomo =$resultado_lead -> fetch_assoc();
        echo '$'.$perdomo['oportunidad'];
    }







 
?>