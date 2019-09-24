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
            <center>
              <table class="datos" border='1' align='center'>
                <tr bgcolor='#E6E6E6'>
                 <th>Cedula Beneficiario</th>
                 <th>Nombre Beneficiario</th>
                 <th>Apellido Beneficiario</th>
                 <th>Genero del Beneficiario</th>
                 <th>Tipo de Beneficiario</th>
                 <th>Carrera del Beneficiario</th>
                 <th>Correo del Usuario</th>
                </tr>
                <?php        
                  include "../Controladores/MostrarBeneficiarios.php";
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