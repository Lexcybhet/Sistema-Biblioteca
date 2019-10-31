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
              <div class="tabla-m">
                <center><h3>Estacion: <?php echo $var_fila["Codigo"]; ?></h3>
                <img style="float:left; margin:30px;" src="Imagenes/Equipo.png" width="100" height="100">
                <p align="left">
                  <strong>Marca: </strong><?php echo $var_fila["Marca"]; ?><br>
                  <strong>Estado del Equipo: </strong><?php echo $var_fila["Estado"]; ?><br><br>
                  <a href="AsignarEstaciones.php?Codigo=<?php echo $var_fila['Codigo']; ?>"class="btn btn-primary" title="Asignar Beneficiario"><span class="icon-user-plus"></span></a>
                  <a href="ModificarEstacion.php?Codigo=<?php echo $var_fila ['Codigo']; ?>" class="btn btn-primary" title="Modificar Estacion"><span class='icon-pencil'></span></a>
                  <a href="../Controladores/EliminarEstaciones.php?Codigo=<?php echo $var_fila['Codigo']; ?>"class="btn btn-primary" title="Eliminar Estacion"><span class='icon-bin'></span></a>
                  <?php require '../Vistas/Controlador.php'; ?>
                </p></center>
              </div><br>
<?php               
          }
      }
      else
        {
          echo "No hay Registros";

        }
?>