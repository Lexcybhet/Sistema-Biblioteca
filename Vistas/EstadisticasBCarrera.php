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

              $query = "SELECT count(*) as total from Beneficiario WHERE Carrera='Manejo de Emergencias y Acción Contra Desastres'";
                if ($result = mysqli_query($Conexion, $query)) {
                    $data=mysqli_fetch_assoc($result);
               }

           ?>
    <div class="full-box text-center" style="padding: 30px 10px;">
      <article class="full-box tile">
        <div class="full-box tile-title text-center text-titles text-uppercase">
          Manejo de Emergencias y Acción Contra Desastres
        </div>
        <div class="full-box tile-icon text-center">
          <i class="icon-user"></i>
        </div>
        <div class="full-box tile-number text-titles">
          <p class="full-box"><?php echo $data['total']; ?></p>
          <small>Registrados</small>
        </div>
      </article>
          <?php 

            global $Conexion;

              $query = "SELECT count(*) as total from Beneficiario WHERE Carrera='PNF en Administración'";
                if ($result = mysqli_query($Conexion, $query)) {
                    $data2=mysqli_fetch_assoc($result);
               }

           ?>
      <article class="full-box tile">
        <div class="full-box tile-title text-center text-titles text-uppercase">
          PNF en Administración
        </div>
        <div class="full-box tile-icon text-center">
          <i class="icon-user"></i>
        </div>
        <div class="full-box tile-number text-titles">
          <p class="full-box"><?php echo $data2['total']; ?></p>
          <small>Registrados</small>
        </div>
      </article>      
          <?php 

            global $Conexion;

              $query = "SELECT count(*) as total from Beneficiario WHERE Carrera='PNF en Agroalimentación'";
                if ($result = mysqli_query($Conexion, $query)) {
                    $data3=mysqli_fetch_assoc($result);
               }

           ?>
      <article class="full-box tile">
        <div class="full-box tile-title text-center text-titles text-uppercase">
          PNF en Agroalimentación
        </div>
        <div class="full-box tile-icon text-center">
          <i class="icon-user"></i>
        </div>
        <div class="full-box tile-number text-titles">
          <p class="full-box"><?php echo $data3['total']; ?></p>
          <small>Registrados</small>
        </div>
      </article>
          <?php 

            global $Conexion;

              $query = "SELECT count(*) as total from Beneficiario WHERE Carrera='PNF en Contaduría Pública'";
                if ($result = mysqli_query($Conexion, $query)) {
                    $data4=mysqli_fetch_assoc($result);
               }

           ?>
      <article class="full-box tile">
        <div class="full-box tile-title text-center text-titles text-uppercase">
          PNF en Contaduría Pública
        </div>
        <div class="full-box tile-icon text-center">
          <i class="icon-user"></i>
        </div>
        <div class="full-box tile-number text-titles">
          <p class="full-box"><?php echo $data4['total']; ?></p>
          <small>Registrados</small>
        </div>
      </article>
          <?php 

            global $Conexion;

              $query = "SELECT count(*) as total from Beneficiario WHERE Carrera='PNF en Construcción Civil'";
                if ($result = mysqli_query($Conexion, $query)) {
                    $data5=mysqli_fetch_assoc($result);
               }

           ?>
      <article class="full-box tile">
        <div class="full-box tile-title text-center text-titles text-uppercase">
          PNF en Construcción Civil
        </div>
        <div class="full-box tile-icon text-center">
          <i class="icon-user"></i>
        </div>
        <div class="full-box tile-number text-titles">
          <p class="full-box"><?php echo $data5['total']; ?></p>
          <small>Registrados</small>
        </div>
      </article>
          <?php 

            global $Conexion;

              $query = "SELECT count(*) as total from Beneficiario WHERE Carrera='PNF en Fonoaudiología'";
                if ($result = mysqli_query($Conexion, $query)) {
                    $data6=mysqli_fetch_assoc($result);
               }

           ?>
      <article class="full-box tile">
        <div class="full-box tile-title text-center text-titles text-uppercase">
          PNF en Fonoaudiología
        </div>
        <div class="full-box tile-icon text-center">
          <i class="icon-user"></i>
        </div>
        <div class="full-box tile-number text-titles">
          <p class="full-box"><?php echo $data6['total']; ?></p>
          <small>Registrados</small>
        </div>
      </article>      
          <?php 

            global $Conexion;

              $query = "SELECT count(*) as total from Beneficiario WHERE Carrera='PNF en Geociencia'";
                if ($result = mysqli_query($Conexion, $query)) {
                    $data7=mysqli_fetch_assoc($result);
               }

           ?>
      <article class="full-box tile">
        <div class="full-box tile-title text-center text-titles text-uppercase">
          PNF en Geociencia
        </div>
        <div class="full-box tile-icon text-center">
          <i class="icon-user"></i>
        </div>
        <div class="full-box tile-number text-titles">
          <p class="full-box"><?php echo $data7['total']; ?></p>
          <small>Registrados</small>
        </div>
      </article>      
          <?php 

            global $Conexion;

              $query = "SELECT count(*) as total from Beneficiario WHERE Carrera='PNF en Historia'";
                if ($result = mysqli_query($Conexion, $query)) {
                    $data8=mysqli_fetch_assoc($result);
               }

           ?>
      <article class="full-box tile">
        <div class="full-box tile-title text-center text-titles text-uppercase">
          PNF en Historia
        </div>
        <div class="full-box tile-icon text-center">
          <i class="icon-user"></i>
        </div>
        <div class="full-box tile-number text-titles">
          <p class="full-box"><?php echo $data8['total']; ?></p>
          <small>Registrados</small>
        </div>
      </article>      
          <?php 

            global $Conexion;

              $query = "SELECT count(*) as total from Beneficiario WHERE Carrera='PNF en Informática'";
                if ($result = mysqli_query($Conexion, $query)) {
                    $data9=mysqli_fetch_assoc($result);
               }

           ?>
      <article class="full-box tile">
        <div class="full-box tile-title text-center text-titles text-uppercase">
          PNF en Informática
        </div>
        <div class="full-box tile-icon text-center">
          <i class="icon-user"></i>
        </div>
        <div class="full-box tile-number text-titles">
          <p class="full-box"><?php echo $data9['total']; ?></p>
          <small>Registrados</small>
        </div>
      </article>      
          <?php 

            global $Conexion;

              $query = "SELECT count(*) as total from Beneficiario WHERE Carrera='PNF en Turismo'";
                if ($result = mysqli_query($Conexion, $query)) {
                    $data10=mysqli_fetch_assoc($result);
               }

           ?>
      <article class="full-box tile">
        <div class="full-box tile-title text-center text-titles text-uppercase">
          PNF en Turismo
        </div>
        <div class="full-box tile-icon text-center">
          <i class="icon-user"></i>
        </div>
        <div class="full-box tile-number text-titles">
          <p class="full-box"><?php echo $data10['total']; ?></p>
          <small>Registrados</small>
        </div>
      </article>      
          <?php 

            global $Conexion;

              $query = "SELECT count(*) as total from Beneficiario WHERE Carrera='Radiología e Imagenología'";
                if ($result = mysqli_query($Conexion, $query)) {
                    $data11=mysqli_fetch_assoc($result);
               }

           ?>
      <article class="full-box tile">
        <div class="full-box tile-title text-center text-titles text-uppercase">
          Radiología e Imagenología
        </div>
        <div class="full-box tile-icon text-center">
          <i class="icon-user"></i>
        </div>
        <div class="full-box tile-number text-titles">
          <p class="full-box"><?php echo $data11['total']; ?></p>
          <small>Registrados</small>
        </div>
      </article>      
          <?php 

            global $Conexion;

              $query = "SELECT count(*) as total from Beneficiario WHERE Carrera='NO APLICA'";
                if ($result = mysqli_query($Conexion, $query)) {
                    $data12=mysqli_fetch_assoc($result);
               }

           ?>
      <article class="full-box tile">
        <div class="full-box tile-title text-center text-titles text-uppercase">
          No Aplica
        </div>
        <div class="full-box tile-icon text-center">
          <i class="icon-user"></i>
        </div>
        <div class="full-box tile-number text-titles">
          <p class="full-box"><?php echo $data12['total']; ?></p>
          <small>Registrados</small>
        </div>
      </article>
       </div>
      </section>
<!-- Scripts -->
  <?php 
    include "Modulos/Scripts.php";
  ?>
</BODY>
</HTML>