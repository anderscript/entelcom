<?php
include("../sql/conexion.php");
include('../sql/variables-usuarios.php');
$id = $_GET['id'];

$extraccion_lead = "SELECT * from lead where id_cliente = '$id'";

$resultado_lead = $conn -> query($extraccion_lead);

$perdomo =$resultado_lead -> fetch_assoc();
?>
<div class="col-lg-4 align-self-center mb-3 mb-lg-0">
                                                <div class="dastyle-profile-main">
                                                    
                                                    <div class="dastyle-profile_user-detail">
                                                        <h5 class="dastyle-user-name"><?php echo $perdomo['nombre']; ?></h5>                                                        
                                                        <p class="mb-0 dastyle-user-name-post">Creado por: <?php echo $perdomo['creador']; ?></p>                                                        
                                                    </div>
                                                </div>                                                
                                            </div><!--end col-->
                                            
                                            <div class="col-lg-4 ml-auto align-self-center">
                                                <ul class="list-unstyled personal-detail mb-0">
                                                    <li class=""><i class="las la-phone mr-2 text-secondary font-22 align-middle"></i> <b> Telefono </b> : <?php echo $perdomo['telefono']; ?></li>
                                                    <li class="mt-2"><i class="las la-envelope text-secondary font-22 align-middle mr-2"></i> <b> Email </b> : <?php echo $perdomo['correo']; ?></li>
                                                    <li class="mt-2"><i class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b> Website </b> : 
                                                        <a href="#" class="font-14 text-primary">
                                                        <?php 
                                                            if($perdomo['web'] != ""){
                                                                echo $perdomo['web'];
                                                            } else {
                                                                
                                                            
                                                        ?>    
                                                        
                                                        No tiene</a> 
                                                        <?php }?>
                                                    </li>                                                   
                                                </ul>
                                               
                                            </div><!--end col-->
                                          