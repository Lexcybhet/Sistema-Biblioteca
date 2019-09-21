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
  <header>
    <div class="wrapper">
      <div class="logo">
        <img src="Imagenes/Ministerio.png" width="150" height="170" hspace="5">
        BIBLIOTECA BR. "FABIO J. CONTRERAS P."
        <img src="Imagenes/logo.png" width="100" height="110" hspace="5">
      </div>
  </header>
    <nav>
      <ul>
        <li><a href="Inicio.html"><span class="icon-home"></span>Inicio</a></li>
        <li><a href="Usuarios.html"><span class="icon-user"></span>Usuario</a></li>
        <li><a href="Beneficiarios.html"><span class="icon-man-woman"></span>Beneficiario</a></li>
        <li><a href="Estaciones.html"><span class="icon-display"></span>Estaciones</a></li>
        <li><a href="Herramientas.html"><span class="icon-cogs"></span>Herramientas</a></li>
        <li><a href="Salida.html"><span class="icon-exit"></span>Salir</a></li>
      </ul>
    </nav>
      <section class="main container">
        <div class="contenido">
          <BR><HR>
            <H1 align= "center">ÁREA DE CONSULTA ELECTRÓNICA E INTERNET</H1>
          <HR><BR>
            <div class="cont1">
              <div class="form-top">
                <h2>Registro de <span>Estaciones</span></h2>
              </div>
                <form class="form-reg" action="../Controladores/RegistrarEstaciones.php" id="Estaciones" name="Estaciones" method="POST">
                  <label for="tipo"><B>Introduzca Codigo del Equipo: </B></label> 
                    <input class="input" type="text" name="CodigoEquipo" placeholder="Codigo" required autofocus>
                  <label for="sexo"><B>Seleccione el Estado del Equipo:</B></label><br> 
                    <select name="EstadoEquipo">
                      <option value=""></option>
                      <option value="FUNCIONAL">Funcional</option>
                      <option value="FUERASERVICIO">Fuera de Servicio</option>
                    </select><br>
                  <label for="tipo"><B>Introduzca Marca del Equipo: </B></label> 
                    <input class="input" type="text" name="MarcaEquipo" placeholder="Marca" required autofocus> 
                      <div class="btn-form">
                        <input class="btn-submit" type="submit" value="REGISTRAR">
                        <input class="btn-reset" type="reset" value="LIMPIAR">
                      </div>
                </form>
            </div>
        </div>
      </section>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</BODY>
</HTML>
