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
            <H1 align= "center">Estadisticas de Registros</H1>
          <HR><BR>
            <div class="tabla-m">
              <br>
              <div class="boton-menu">
                <a href="EstadisticasBGenero.php"><h3><span class="icon-stats-dots"></span>Genero</h3></a>
              </div>
              <div class="boton-menu">
                <a href="EstadisticasBCarrera.php"><h3><span class="icon-cloud-download"></span>Carrera</h3></a>
              </div>
              <div class="boton-menu">
                <a href="EstadisticasBTipo.php"><h3><span class="icon-man-woman"></span>Tipo de Beneficiario</h3></a>
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