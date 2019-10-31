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
            <H1 align= "center">Modificar Usuario</H1>
          <HR><BR>            
            <div class="tabla-m">
              <br>
                <font class="Buscador" action="../Controladores/ModificarUsuario.php?Cedula_Usuario=<?php echo $var_fila ['Cedula_Usuario']; ?>" id="EliminarU" name="Eliminar" method="POST">
                <fieldset>
                  <p>Introduzca la Cedula del Usuario</p>
                  <input class="input" type="search" name="Buscador" placeholder="Buscar..." name="btn_eliminar">
                    <button type="submit">
                      <a href="../Controladores/ModificarUsuario.php?Cedula_Usuario=<?php echo $var_fila ['Cedula_Usuario']; ?>"><span class="icon-search"></span></a>
                    </button>
                </fieldset>
              </font>
            </div>
          
        </div>
      </section>
<!-- Scripts -->
  <?php 
    include "Modulos/Scripts.php";
  ?>
</BODY>
</HTML>