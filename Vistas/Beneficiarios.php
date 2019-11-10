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
          <HR>
            <H1 align= "center">Beneficiarios</H1>
            <BR>
            <div class="tabla-m">
              <br>
              <div class="boton-menu">
                <a href="Registrar.php"><h3><span class="icon-user-plus"></span>Registrar Beneficiarios</h3></a>
              </div>
              <div class="boton-menu">
                <a href="ConsultarBeneficiario.php"><h3><span class="icon-search"></span>Consultar Beneficiarios</h3></a>
              </div>
              <div class="boton-menu">
                <a href="ModificarBeneficiario2.php"><h3><span class="icon-pencil"></span>Modificar Beneficiarios</h3></a>
              </div>
              <div class="boton-menu">
                <a href="EliminarBeneficiario.html"><h3><span class="icon-user-minus"></span>Eliminar Beneficiarios</h3></a>
              </div>
              <div class="boton-menu">
                <a href="SuspenderBeneficiarioB.php"><h3><span class="icon-lock"></span>Suspender Beneficiarios</h3></a>
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