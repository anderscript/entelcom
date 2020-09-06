<?php


include("../sql/conexion.php");
include('../sql/variables-usuarios.php');

$id = $_GET['id'];

$extraccion_lead = "SELECT * from lead where id_cliente = '$id'";

$resultado_lead = $conn -> query($extraccion_lead);

$perdomo =$resultado_lead -> fetch_assoc();

$extraccion_gestiones = "SELECT * from notas_gestiones where id_cliente = '$id' ORDER BY id DESC";

$resultado_gestiones = $conn -> query($extraccion_gestiones);

?>

<?php while($perdomo_gestiones=$resultado_gestiones -> fetch_assoc()) {

?>
<div class="row">
    <div class="col-auto">
        <img src="assets/images/users/user-2.jpg" alt="" class="thumb-md rounded-circle">
    </div><!--end col-->
    <div class="col">
        <div class="comment-body ml-n3 bg-light-alt p-3">
            <div class="row">
                <div class="col">
                    <p class="text-dark font-weight-semibold mb-2"><?php echo $perdomo_gestiones['nombre']; ?></p>
                </div><!--end col-->
                <div class="col-auto">
                    <span class="text-muted"><i class="far fa-clock mr-1"></i><?php echo $perdomo_gestiones['fecha']; ?></span>
                </div><!--end col-->
            </div><!--end row-->                                                                
            <p><?php echo $perdomo_gestiones['comentario']; ?>
            </p>
            <a href="#" class="text-primary"><i class="fas fa-reply mr-1"></i>Editar</a>
        </div>
    </div><!--end col-->
</div><!--end row-->
<br>
<?php } ?>