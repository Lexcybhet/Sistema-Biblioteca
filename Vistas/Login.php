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
            <div class="login-box">
              <img src="Imagenes/Avatar.png" class="avatar" alt="Avatar Image">
                <h1>Inicie Sesión</h1>
                  <form action="../Controladores/Login.php" method="POST">
                    <label for="username">ID</label>
                      <input type="text" name="Usuario" placeholder="Introduzca su Cedula">
                    <label for="username">Nombre</label>
                      <input type="text" name="Nombre" placeholder="Introduzca su Nombre">
                    <label for="password">Contraseña</label>
                      <input type="password" name="Contrasena" placeholder="Introduzca su Contraseña">
                      <input type="submit" value="Ingresar">
                      <br><br>
                      <a href="#">Crear Usuario</a><br>
                      <a href="#">¿Olvido su Contraseña?</a>
                  </form>
            </div>
            <br><br>
          
        </div>
      </section>
<!-- Scripts -->
  <?php 
    include "Modulos/Scripts.php";
  ?>
</BODY>
</HTML>