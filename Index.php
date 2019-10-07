<!DOCTYPE html>
<HTML lang="es">
<HEAD>
  <meta charset="utf-8">
  <meta name="viewport" content="width=divice-width, user-scalable=no, inicial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <TITLE>Área Consulta Electrónica e Internet</TITLE>
  <link rel="stylesheet" type="text/css" href="Vistas/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Vistas/css/estilos.css">
  <link rel="stylesheet" type="text/css" href="Vistas/Imagenes/fonts.css">
</HEAD>
<BODY>
  <header>
    <div class="wrapper">
      <div class="logo">
        <img src="Vistas/Imagenes/Ministerio.png" width="150" height="170" hspace="5">
        BIBLIOTECA BR. "FABIO J. CONTRERAS P."
        <img src="Vistas/Imagenes/logo.png" width="100" height="110" hspace="5">
      </div>
  </header>
      <section class="main container">
        <div class="contenido">
          <BR><HR>
            <H1 align= "center">ÁREA DE CONSULTA ELECTRÓNICA E INTERNET</H1>
          <HR><BR>
            <div class="login-box">
              <img src="Vistas/Imagenes/Avatar.png" class="avatar" alt="Avatar Image">
                <h1>Inicie Sesión</h1>
                  <form action="Controladores/Login.php" method="POST">
                    <label for="username">Usuario</label>
                      <input type="text" name="Usuario" value="" placeholder="Introduzca su Cedula" />
                    <label for="username">Nombre</label>
                      <input type="password" name="Contrasena" value="" placeholder="Introduzca su Contraseña" />
                      <input type="submit" value="Ingresar">
                      <a href="#">Crear Usuario</a><br>
                      <a href="#">¿Olvido su Contraseña?</a>
                  </form>
            </div>
            <br><br>
        </div>
      </section>
<script src="Vistas/js/jquery-3.3.1.slim.min.js"></script>
<script src="Vistas/js/popper.min.js"></script>
<script src="Vistas/js/bootstrap.min.js"></script>
</BODY>
</HTML>
