<?php
  require '../Controladores/VerificarSesion.php'
  if ($_SESSION['TipoU'] != 1) {
    header('Location: ../Vistas/Acceso.php');
  }
?>
<!DOCTYPE html>
<HTML lang="es">
<HEAD>
  <meta charset="utf-8">
  <meta name="viewport" content="width=divice-width, user-scalable=no, inicial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <TITLE>Área Consulta Electrónica e Internet</TITLE>
<!-- Llamado a los Estilos -->  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
</HEAD>
<BODY>
<!--Cabecera o Encabezado del Sistema-->  
  <?php 
    include "Modulos/Header.php";
  ?>
<!-- Menu de Navegacion -->
  <?php 
    include "Modulos/Menu.php";
  ?>
    <!-- Contenido -->
      <section class="main container">
        <div class="contenido">
          <BR><HR>
            <H1 align= "center">Consulta de Usuario</H1>
          <BR>
          <?php    
            require '../Controladores/ConexionBaseDatos.php';

              $CedulaU = $_POST['Buscador'];
              $var_consulta = "SELECT * FROM Usuario WHERE Cedula_Usuario = $CedulaU ";
              $var_resultado = $Conexion->query($var_consulta);
                if ($var_resultado->num_rows>0) {
                  while ($var_fila=$var_resultado->fetch_array()){
                    echo "<center>
                          <table border='1' align='center'>
                          <tr bgcolor='#E6E6E6'>
                          <th>Cedula Usuario</th>
                          <th>Nombre Usuario</th>
                          <th>Apellido Usuario</th>
                          <th>Tipo de Usuario</th>
                          <th>Correo del Usuario</th>
                    </tr>";
                    echo "<tr><td>".$var_fila["Cedula_Usuario"]."</td>";
                    echo "<td>".$var_fila["Nombre_Usuario"]."</td>";
                    echo "<td>".$var_fila["Apellido_Usuario"]."</td>";
                    echo "<td>".$var_fila["idTipo"]."</td>";
                    echo "<td>".$var_fila["Correo_Usuario"]."</td>";
          ?>
                          <td><a href="ModificarUsuario.php?Cedula_Usuario=<?php echo $var_fila ['Cedula_Usuario']; ?>"><span class='icon-pencil'></span></a></td>
                          <td><a href="../Controladores/EliminarUsuarios.php?Cedula_Usuario=<?php echo $var_fila['Cedula_Usuario']; ?>"><span class='icon-bin'></span></a></td>
                          </tr>
          <?php
                    echo "</table>";
                  }
                }
                else{
                  echo "<center><div class='error'>Error, No hay registros con la cedula solicitada</div><center>";
                }
          ?>
          </table>
          <br><br>
          <a href="Crear.php"><input class="btn-submit" type="submit" value="NUEVO USUARIO"></a>
          </center>
        </div>
      </section>
<!-- Scripts -->
  <?php 
    include "Modulos/Scripts.php";
  ?>
</BODY>
</HTML>