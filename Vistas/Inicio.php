<!DOCTYPE html>
<HTML lang="es">
<HEAD>
  <meta charset="utf-8">
  <meta name="viewport" content="width=divice-width, user-scalable=no, inicial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <TITLE>Área Consulta Electrónica e Internet</TITLE>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
</HEAD>
<BODY>
<!--Cabecera o Encabezado del Sistema-->	
  <header> 
    <div class="wrapper">
      <div class="logo">
        <img src="Imagenes/Ministerio.png" width="150" height="170" hspace="5">
        BIBLIOTECA BR. "FABIO J. CONTRERAS P."
        <img src="Imagenes/logo.png" width="100" height="110" hspace="5">
      </div>
  </header>
  <!-- Menu de Navegacion -->
    <nav> 
      <ul>
        <li><a href="Inicio.html"><span class="icon-home"></span>Inicio</a></li>
        <li><a href="Usuarios.html"><span class="icon-user"></span>Usuario</a></li>
        <li><a href="Beneficiarios.html"><span class="icon-man-woman"></span>Beneficiario</a></li>
        <li><a href="Estaciones.html"><span class="icon-display"></span>Estaciones</a></li>
        <li><a href="Herramientas.html"><span class="icon-cogs"></span>Herramientas</a></li>
        <li><a href="../Controladores/logout.php"><span class="icon-exit"></span>Salir</a></li>
      </ul>
    </nav>
    <!-- Contenido -->
      <section class="main container">
        <div class="contenido">
          <img style="float:left; margin:5px;" src="Imagenes/Libros.png" width="300" height="400"><H1 align= "center"><br><br><br>BIENVENIDOS AL SISTEMA DE CONTROL DE ACCESO DEL ÁREA DE CONSULTA ELECTRÓNICA E INTERNET<BR></H1>
            <section>
              <h1><?php echo $user->getNombre(); ?> </h1>
            </section>
        </div>
      </section>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</BODY>
</HTML>

