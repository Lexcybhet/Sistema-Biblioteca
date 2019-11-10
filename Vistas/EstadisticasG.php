<?php
  require '../Controladores/VerificarSesion.php';
  require '../Controladores/ConexionBaseDatos.php';
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
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/barra.css">
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
          <HR>
            <H1 align= "center">Estadisticas de Registros</H1>
          <BR>
          <?php 

            global $Conexion;

              $query = "SELECT count(*) as total from Usuario ";
                if ($result = mysqli_query($Conexion, $query)) {
                    $data=mysqli_fetch_assoc($result);
               }

           ?>
    <a href="EstadisticasUsuarios.php"><div class="full-box text-center" style="padding: 30px 10px;">
      <article class="full-box tile">
        <div class="full-box tile-title text-center text-titles text-uppercase">
          Usuarios
        </div>
        <div class="full-box tile-icon text-center">
          <i class="icon-user"></i>
        </div>
        <div class="full-box tile-number text-titles">
          <p class="full-box"><?php echo $data['total']; ?></p>
          <small>Registrados</small>
        </div>
      </article></a>    
          <?php 

            global $Conexion;

              $query = "SELECT count(*) as total from Beneficiario ";
                if ($result = mysqli_query($Conexion, $query)) {
                    $data2=mysqli_fetch_assoc($result);
               }

           ?>
      <a href="EstadisticasBeneficiarios.php"><article class="full-box tile">
        <div class="full-box tile-title text-center text-titles text-uppercase">
          Beneficiarios
        </div>
        <div class="full-box tile-icon text-center">
          <i class="icon-man-woman"></i>
        </div>
        <div class="full-box tile-number text-titles">
          <p class="full-box"><?php echo $data2['total']; ?></p>
          <small>Registrados</small>
        </div>
      </article></a>
       </div>
      </section>
<!-- Scripts -->
  <?php 
    include "Modulos/Scripts.php";
  ?>
</BODY>
</HTML>