<?php
include("../sql/conexion.php");

    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    
    $sql = "INSERT INTO post (titulo, contenido) values ('$titulo', '$contenido')";
    $ejecucion = $conn -> query("$sql");
    if ($ejecucion){
        
    
?>
<div class="alert alert-primary border-0 b-round" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="mdi mdi-close align-middle font-16"></i></span>
                                        </button>
                                        <strong>Se publico!</strong> 👍 El post <?php echo $titulo; ?> se publico exitosamente.
                                    </div>
                                    <?php }?>