<?php
/*Llamado a la base de datos*/

  require 'ConexionBaseDatos.php';

/*Metodo para Mostrar datos*/    
    $var_consulta= "SELECT * FROM Registros";
    $var_resultado = $Conexion->query($var_consulta);
      if($var_resultado->num_rows>0){
        while ($var_fila=$var_resultado->fetch_array())
          {
?>           
                <div class="cd-timeline-block">
                    <div class="cd-timeline-img">
                        <img src="../Vistas/Imagenes/avatars/StudetMaleAvatar.png" alt="user-picture">
                    </div>
                    <div class="cd-timeline-content">
                        <h4 class="text-center text-titles">Registro Nº: <?php echo $var_fila["id"]; ?>  Beneficiario <?php echo $var_fila["IdBeneficiario"]; ?></h4>
                        <p class="text-center">
                            <i class="zmdi zmdi-timer zmdi-hc-fw"></i> Hora de Entrada: <em><?php echo $var_fila["Hora_Entrada"]; ?></em> &nbsp;&nbsp;&nbsp; 
                            <i class="zmdi zmdi-time zmdi-hc-fw"></i> Hora Salida: <em><?php echo $var_fila["Hora_Salida"]; ?></em>
                            <i class="zmdi zmdi-time zmdi-hc-fw"></i> Estacion: <em><?php echo $var_fila["idEstacion"]; ?></em>
                        </p>
                    </div>
                </div>
<?php               
          }
      }
      else
        {
          echo "No hay Registros";

        }
?>