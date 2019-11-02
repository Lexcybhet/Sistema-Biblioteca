<?php
  require '../Controladores/VerificarSesion.php'
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
            <H1 align= "center">Consulta de Beneficiario</H1>
          <BR>
          <?php    
            require '../Controladores/ConexionBaseDatos.php';

              $CedulaB = $_POST['Buscador'];
              $var_consulta = "SELECT * FROM Beneficiario WHERE Cedula_Beneficiario = $CedulaB ";
              $var_resultado = $Conexion->query($var_consulta);
                if ($var_resultado->num_rows>0) {
                  while ($var_fila=$var_resultado->fetch_array()){
                    echo "<center>
                          <table border='1' align='center'>
                          <tr bgcolor='#E6E6E6'>
                          <th>Cedula Beneficiario</th>
                          <th>Nombre Beneficiario</th>
                          <th>Apellido Beneficiario</th>
                          <th>Genero del Beneficiario</th>
                          <th>Tipo de Beneficiario</th>
                          <th>Carrera del Beneficiario</th>
                          <th>Correo del Beneficiario</th>
                    </tr>";
                    echo "<tr><td>".$var_fila["Cedula_Beneficiario"]."</td>";
                    echo "<td>".$var_fila["Nombre_Beneficiario"]."</td>";
                    echo "<td>".$var_fila["Apellido_Beneficiario"]."</td>";
                    echo "<td>".$var_fila["Genero"]."</td>";
                    echo "<td>".$var_fila["Tipo_Beneficiario"]."</td>";
                    echo "<td>".$var_fila["Carrera"]."</td>";
                    echo "<td>".$var_fila["Correo_Beneficiario"]."</td>";
          ?>
                          <td><a href="ModificarBeneficiario.php?Cedula_Beneficiario=<?php echo $var_fila ['Cedula_Beneficiario']; ?>"><span class='icon-pencil'></span></a></td>
                          <td><a href="../Controladores/EliminarBeneficiarios.php?Cedula_Beneficiario=<?php echo $var_fila ['Cedula_Beneficiario']; ?>"><span class='icon-bin'></span></a></td>
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
          <a href="Registrar.php"><input class="btn-submit" type="submit" value="NUEVO BENEFICIARIO"></a>
          </center>
        </div>
      </section>
<!-- Scripts -->
  <?php 
    include "Modulos/Scripts.php";
  ?>
</BODY>
</HTML>