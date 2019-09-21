<?php
  require 'ConexionBaseDatos.php';
                    $var_consulta= "SELECT * FROM Usuario";
                      $var_resultado = $Conexion->query($var_consulta);
                        if($var_resultado->num_rows>0)
                          {
                            while ($var_fila=$var_resultado->fetch_array())
                              {
                  ?>
                    <tr>
                      <td><?php echo $var_fila["Cedula_Usuario"]; ?></td>
                      <td><?php echo $var_fila["Nombre_Usuario"]; ?></td>
                      <td><?php echo $var_fila["Apellido_Usuario"]; ?></td>
                      <td><?php echo $var_fila["Tipo_Usuario"]; ?></td>
                      <td><?php echo $var_fila["Correo_Usuario"]; ?></td>
                      <td><a href="ModificarUsuario.php?id=<?php echo $var_fila["Cedula_Usuario"]; ?>"><span class='icon-pencil'></span></a></td>
                      <td><a href="EliminarUsuario.php?Cedula_Usuario=<?php echo $var_fila["Cedula_Usuario"]; ?>"><span class='icon-bin'></span></a></td>
                    </tr>
                  <?php               
                              }
                          }
                      else
                        {
                          echo "No hay Registros";

                         }
                  ?>