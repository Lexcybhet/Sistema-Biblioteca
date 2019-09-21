<?php

  require 'ConexionBaseDatos.php';
  	$var_consulta= "SELECT * FROM Beneficiario";
    	$var_resultado = $Conexion->query($var_consulta);
      	if($var_resultado->num_rows>0)
        	{
        		while ($var_fila=$var_resultado->fetch_array())
          			{
            			echo "<tr><td>".$var_fila["Cedula_Beneficiario"]."</td>";
           			 	echo "<td>".$var_fila["Nombre_Beneficiario"]."</td>";
            			echo "<td>".$var_fila["Apellido_Beneficiario"]."</td>";
            			echo "<td>".$var_fila["Genero"]."</td>";
            			echo "<td>".$var_fila["Tipo_Beneficiario"]."</td>";
            			echo "<td>".$var_fila["Carrera"]."</td>";
            			echo "<td>".$var_fila["Correo_Beneficiario"]."</td>";
?>
						<td><a href=""><span class='icon-pencil'></span></a></td>
                      <td><a href=""><span class='icon-bin'></span></a></td>
                    </tr>
	<?php 
          			}
            }
        else
        	{
            	echo "No hay Registros";

            }

	?>