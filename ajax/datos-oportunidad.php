<?php 
include("../sql/conexion.php");
include('../sql/variables-usuarios.php');

$id = $_GET['id'];

$extraccion_oportunidad = "SELECT * from oportunidad where id_cliente = '$id'";

$resultado_oportunidad = $conn -> query($extraccion_oportunidad);

while ($perdomo_oportunidad = $resultado_oportunidad ->fetch_assoc()) {?>
                                        <div class="col-3">
                                            <div class="card">
                                                <div class="card-body  text-center">
                                                    
                                                    <h4 class="m-0 font-weight-semibold text-dark font-16 mt-3"><?php echo $perdomo_oportunidad['tipo']; ?></h4>   
                                                    <p class="text-muted  mb-0 font-13"><span class="text-dark">Creado por: </span><?php echo $perdomo_oportunidad['creador']; ?></p> 
                                                    <div class="mt-3">
                                                        <h5 class="font-24 m-0 font-weight-bold">$<?php echo number_format($perdomo_oportunidad['valor'],'2',',', '.'); ?></h5>
                                                        <p class="mb-0 text-muted"><?php echo $perdomo_oportunidad['fecha']; ?></p>                                        
                                                    </div> 
                                                    <a href="../entelcom/modificar-oportunidad.php?id=<?php echo $perdomo_oportunidad['id']; ?>&id_cliente=<?php echo $perdomo_oportunidad['id_cliente']; ?>" class="btn btn-soft-primary  btn-block mt-3">Editar</a>
                                                </div><!--end card-body-->          
                                            </div> <!--end card-->    
                                        </div><!--end col-->
                                        <?php }?>