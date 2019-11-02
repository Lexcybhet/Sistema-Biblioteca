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
            <H1 align= "center">Modificar Beneficiario</H1>
          <HR><BR>            
            <div class="tabla-m">
              <br>
                <form class="Buscador" action="ModificarBeneficiarioF.php" name="Consultar" method="POST">
                <fieldset>
                  <p>Introduzca la Cedula del Usuario</p>
                  <input class="input" type="search" name="Buscador" placeholder="Buscar..." />
                    <button type="submit">
                      <a href=""><span class="icon-search"></span></a>
                    </button>
                </fieldset>
              </form>
            </div>
          
        </div>
      </section>
<!-- Scripts -->
  <?php 
    include "Modulos/Scripts.php";
  ?>
</BODY>
</HTML>