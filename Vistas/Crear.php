<?php 

  require '../Controladores/VerificarSesion.php';
  if ($_SESSION['TipoU'] != 1) {
    header('Location: ../Vistas/Acceso.php');
  }
    
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
            <H1 align= "center">ÁREA DE CONSULTA ELECTRÓNICA E INTERNET</H1>
          <HR><BR>
           <div class="cont1">
            <div class="form-top">
              <h2>Registro de <span>Usuario</span></h2>
            </div>
              <form class="form-reg" action="../Controladores/CrearUsuario.php" id="Usuario" name="Usuario" method="POST" autocomplete="off">
                <label for="tipo"><B>Introduzca Nombre del Usuario: </B></label>
                  <input class="input" type="text" name="NombreUsuario" placeholder="Nombre" required autofocus maxlength="15">
                <label for="tipo"><B>Introduzca Apellido del Usuario: </B></label> 
                  <input class="input" type="text" name="ApellidoUsuario" placeholder="Apellidos" required autofocus maxlength="15">
                <label for="tipo"><B>Introduzca Cedula del Usuario: </B></label> 
                  <input class="input" type="text" name="CedulaUsuario" placeholder="Cedula" required maxlength="10">
                <label for="tipo"><B>Introduzca Correo Electrónico del Usuario: </B></label> 
                  <input class="input" type="email" name="CorreoUsuario" placeholder="Correo Electrónico" required>
                <label for="tipo"><B>Seleccione tipo de usuario: </B></label><br>
                  <select name="TipoUsuario" required>
                    <option value="">Seleccione una opcion</option>
                    <option value="1">ADMINISTRADOR</option>
                    <option value="2">ENCARGADO</option>
                  </select><br>
                    <label for="tipo"><B>Introduzca Contraseña Usuario: </B></label> 
                     <input class="input" type="password" name="Contrasena" placeholder="Contraseña" required maxlength="15">
                      <div class="btn-form">
                        <input class="btn-submit" type="submit" value="REGISTRAR">
                        <input class="btn-reset" type="reset" value="LIMPIAR">
                      </div>
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