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
                <h2>Registro de <span>Estaciones</span></h2>
              </div>
                <form class="form-reg" action="../Controladores/RegistrarEstaciones.php" id="Estaciones" name="Estaciones" method="POST">
                  <label for="tipo"><B>Introduzca Codigo del Equipo: </B></label> 
                    <input class="input" type="text" name="CodigoEquipo" placeholder="Codigo" required autofocus>
                  <label for="sexo"><B>Seleccione el Estado del Equipo:</B></label><br> 
                    <select name="EstadoEquipo">
                      <option value=""></option>
                      <option value="FUNCIONAL">Funcional</option>
                      <option value="FUERA DE SERVICIO">Fuera de Servicio</option>
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
<!-- Scripts -->
  <?php 
    include "Modulos/Scripts.php";
  ?>
</BODY>
</HTML>