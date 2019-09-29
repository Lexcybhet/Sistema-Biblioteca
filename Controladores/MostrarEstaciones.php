<?php
/*Llamado a la base de datos*/ 
  require 'ConexionBaseDatos.php';
/*Metodo para Mostrar datos*/    
    $var_consulta= "SELECT * FROM Estaciones";
    $var_resultado = $Conexion->query($var_consulta);
      if($var_resultado->num_rows>0){
        while ($var_fila=$var_resultado->fetch_array())
          {
?>
           <tr>
              <td><?php echo $var_fila["Codigo"]; ?></td>
              <td><?php echo $var_fila["Estado"]; ?></td>
              <td><?php echo $var_fila["Marca"]; ?></td>
              <td><a href="ModificarEstacion.php?Codigo=<?php echo $var_fila ['Codigo']; ?>"><span class='icon-pencil'></span></a></td>
              <td><a href="../Controladores/EliminarEstaciones.php?Codigo=<?php echo $var_fila['Codigo']; ?>"><span class='icon-bin'></span></a></td>
            </tr>
<?php               
          }
      }
      else
        {
          echo "No hay Registros";

        }
?>