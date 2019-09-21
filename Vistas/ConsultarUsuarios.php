<!DOCTYPE html>
<HTML lang="es">
<HEAD>
  <meta charset="utf-8">
  <meta name="viewport" content="width=divice-width, user-scalable=no, inicial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <TITLE>Área Consulta Electrónica e Internet</TITLE>
  <link rel="stylesheet" type="text/css" href="../Vistas/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Vistas/css/estilos.css">
  <link rel="stylesheet" type="text/css" href="../Vistas/css/fonts.css">
</HEAD>
<BODY>
  <header>
    <div class="wrapper">
      <div class="logo">
        <img src="../Vistas/Imagenes/Ministerio.png" width="150" height="170" hspace="5">
        BIBLIOTECA BR. "FABIO J. CONTRERAS P."
        <img src="../Vistas/Imagenes/logo.png" width="100" height="110" hspace="5">
      </div>
  </header>
    <nav>
      <ul>
        <li><a href="../Vistas/Inicio.html"><span class="icon-home"></span>Inicio</a></li>
        <li><a href="../Vistas/Usuarios.html"><span class="icon-user"></span>Usuario</a></li>
        <li><a href="../Vistas/Beneficiarios.html"><span class="icon-man-woman"></span>Beneficiario</a></li>
        <li><a href="../Vistas/Estaciones.html"><span class="icon-display"></span>Estaciones</a></li>
        <li><a href="../Vistas/Herramientas.html"><span class="icon-cogs"></span>Herramientas</a></li>
        <li><a href="../Vistas/Salida.html"><span class="icon-exit"></span>Salir</a></li>
      </ul>
    </nav>
      <section class="main container">
        <div class="contenido">
          <BR><HR>
            <H1 align= "center">Consultar Usuario</H1>
          <BR>
            <center>
              <table class="datos" border='1' align='center'>
                <tr bgcolor='#E6E6E6'>
                  <th>Cedula Usuario</th>
                  <th>Nombre Usuario</th>
                  <th>Apellido Usuario</th>
                  <th>Tipo de Usuario</th>
                  <th>Correo del Usuario</th>
                </tr>
                <?php        
                  include "../Controladores/MostrarUsuarios.php";
                ?>
          </table>
          <br><br>
          <a href="Crear.php"><input class="btn-submit" type="submit" value="NUEVO USUARIO"></a>
          </center>
        </div>
      </section>
<script src="../Vistas/js/jquery-3.3.1.slim.min.js"></script>
<script src="../Vistas/js/popper.min.js"></script>
<script src="../Vistas/js/bootstrap.min.js"></script>
</BODY>
</HTML>