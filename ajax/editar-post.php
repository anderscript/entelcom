<?php
include('../sql/conexion.php');
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];

    $sql="UPDATE post SET titulo = '$titulo', contenido ='$contenido' where id='$id'";
    $conn ->query($sql);
?>
<div class="alert alert-primary border-0 b-round" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true"><i class="mdi mdi-close align-middle font-16"></i></span>
                                        </button>
                                        <strong>Se publico!</strong> 👍 El post se publico exitosamente.
                                    </div>