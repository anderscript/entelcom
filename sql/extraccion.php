<?php

function extraccion_lead(){

include("conexion.php");
$extraccion_datos = "SELECT * from lead";

$resultado_extraccion = $conn -> query($extraccion_datos);

while($result_lead = $resultado_extraccion->fetch_assoc()){

	echo "<tr>
                 <td><a href='gestion-lead.php?id=$result_lead[id_cliente]'>".$result_lead['nombre']."</a></td>
                 <td><a href='gestion-lead.php?id=$result_lead[id_cliente]'>".$result_lead['correo']."</a></td>
                 <td>Edinburgh</td>
                 <td>61</td>
				 <td>2011/04/25</td>
				 <td><a href='gestion-lead.php?id=$result_lead[id_cliente]'>".$result_lead['creador']."</a></td>
                                            
         </tr> </a>";

	}
}




?>