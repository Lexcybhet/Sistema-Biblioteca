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
            <H1 align= "center">Usuarios</H1>
          <BR>
            <div class="tabla-m">
              <br>
              <div class="boton-menu">
                <a href="Crear.php"><h3><span class="icon-user-plus"></span>Crear Usuarios</h3></a>
              </div>
              <div class="boton-menu">
                <a href="ConsultarUsuarios.php"><h3><span class="icon-search"></span>Consultar Usuarios</h3></a>
              </div>
              <div class="boton-menu">
                <a href="ModificarUsuario2.php"><h3><span class="icon-pencil"></span>Modificar Usuarios</h3></a>
              </div>
              <div class="boton-menu">
                <a href="EliminarUsuario.html"><h3><span class="icon-user-minus"></span>Eliminar Usuarios</h3></a>
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