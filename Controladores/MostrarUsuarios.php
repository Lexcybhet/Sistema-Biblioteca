<?php
/*Llamado a la base de datos*/ 
  
  require 'ConexionBaseDatos.php';

/*Metodo para Mostrar datos*/    
    $var_consulta= "SELECT * FROM Usuario ORDER BY Cedula_Usuario";
    $var_resultado = $Conexion->query($var_consulta);
      if($var_resultado->num_rows>0){
        while ($var_fila=$var_resultado->fetch_array())
          {
?>
           <tr>
              <td><?php echo $var_fila["Cedula_Usuario"]; ?></td>
              <td><?php echo $var_fila["Nombre_Usuario"]; ?></td>
              <td><?php echo $var_fila["Apellido_Usuario"]; ?></td>
              <td><?php echo $var_fila["Tipo_Usuario"]; ?></td>
              <td><?php echo $var_fila["Correo_Usuario"]; ?></td>
              <td><a href="ModificarUsuario.php?Cedula_Usuario=<?php echo $var_fila ['Cedula_Usuario']; ?>"><span class='icon-pencil'></span></a></td>
              <td><a href="../Controladores/EliminarUsuarios.php?Cedula_Usuario=<?php echo $var_fila['Cedula_Usuario']; ?>"><span class='icon-bin'></span></a></td>
            </tr>
<?php               
          }
      }
      else
        {
          echo "No hay Registros";

        }
?>