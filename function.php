<?php


function total_lead($conn){
    
        $sql ="SELECT count(*) total FROM lead";
        $resultado = $conn->query($sql);
        $per = $resultado -> fetch_assoc();
        echo $per['total'];
    }


    function oportunidades_wom($conn){
        $sql ="SELECT count(*) total FROM oportunidad where tipo='Ganado'";
        $resultado = $conn->query($sql);
        $per = $resultado -> fetch_assoc();
        echo $per['total'];
          
    }
    
    function oportunidades_cuota($conn){
        $sql ="SELECT count(*) total FROM oportunidad where tipo='Cuota'";
        $resultado = $conn->query($sql);
        $per = $resultado -> fetch_assoc();
        echo $per['total'];
          
    }

    function oportunidades_compromiso($conn){
        $sql ="SELECT count(*) total FROM oportunidad where tipo='Compromiso'";
        $resultado = $conn->query($sql);
        $per = $resultado -> fetch_assoc();
        echo $per['total'];
          
    }
?>