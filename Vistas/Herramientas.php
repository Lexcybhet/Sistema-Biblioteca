<?php
  require '../Controladores/VerificarSesion.php';
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
          <HR>
            <H1 align= "center">Herramientas</H1>
          <HR><BR>
            <div class="tabla-m">
              <br>
              <div class="boton-menu">
                <a href="EstadisticasG.php"><h3><span class="icon-stats-dots"></span>Estadisticas</h3></a>
              </div>
              <div class="boton-menu">
                <a href="CopiadeSeguridad.php"><h3><span class="icon-cloud-download"></span>Copia de Seguridad</h3></a>
              </div>
              <div class="boton-menu">
                <a href="RestaurarBD.php"><h3><span class="icon-database"></span>Restaurar Base de Datos</h3></a>
              </div>              
              <div class="boton-menu">
                <a href="Bitacora.php"><h3><span class="icon-database"></span>Bitacora</h3></a>
              </div>
            </div>
          <br>
        </div>
      </section>
<!-- Scripts -->
  <?php 
    include "Modulos/Scripts.php";
  ?>
</BODY>
</HTML>