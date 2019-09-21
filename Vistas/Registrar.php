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
                <h2>Registro de <span>Beneficiario</span></h2>
              </div>
                <form class="form-reg" action="../Controladores/RegistrarBeneficiario.php" id="Beneficiario" name="Beneficiario" method="POST">
                  <label for="tipo"><B>Introduzca Nombre del Beneficiario: </B></label> 
                    <input class="input" type="text" name="NombreBeneficiario" placeholder="Nombre" required autofocus>
                  <label for="tipo"><B>Introduzca Apellido del Beneficiario: </B></label> 
                    <input class="input" type="text" name="ApellidoBeneficiario" placeholder="Apellidos" required autofocus>
                  <label for="tipo"><B>Introduzca Cedula del Beneficiario: </B></label> 
                    <input class="input" type="tel" name="CedulaBeneficiario" placeholder="Cedula" required >
                  <label for="sexo"><B>Seleccione su género:</B></label><br> 
                    <select name="GeneroBeneficiario">
                      <option value=""></option>
                      <option value="MASCULINO">MASCULINO</option>
                      <option value="FEMENINO">FEMENINO</option>
                    </select><br>
                  <label for="tipo"><B>Seleccione tipo de Beneficiario: </B></label><br> 
                    <select name="TipoBeneficiario" required>
                      <option value=""></option>
                      <option value="estudiante">ESTUDIANTE</option>
                      <option value="docente">DOCENTE</option>
                      <option value="pa">PERSONAL ADMINISTRATIVO</option>
                      <option value="po">PERSONAL OBRERO</option>
                      <option value="invitado">INVITADO</option>
                    </select><br>
                  <label for="tipo"><B>Seleccione Carrera de Beneficiario: </B></label><br>
                    <select name="CarreraBeneficiario" required>
                      <option value="tipo"></option>
                      <option value="manejo"> Manejo de Emergencias y Acción Contra Desastres</option>
                      <option value="admi">PNF en Administración</option>
                      <option value="agro">PNF en Agroalimentación</option>
                      <option value="contaduria">PNF en Contaduría Pública</option>
                      <option value="civil">PNF en Construcción Civil</option>
                      <option value="fono">PNF en Fonoaudiología</option>
                      <option value="geo">PNF en Geociencia</option>
                      <option value="historia">PNF en Historia</option>
                      <option value="informatica">PNF en Informática</option>
                      <option value="turismo">PNF en Turismo</option>
                      <option value="radio">Radiología e Imagenología</option>
                      <option value="NO">NO APLICA</option>
                    </select><br>
                  <label for="tipo"><B>Introduzca Correo Electrónico del Usuario: </B></label> 
                    <input class="input" type="email" name="CorreoBeneficiario" placeholder="Correo Electrónico" required>
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
