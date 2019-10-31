<?php 

  require '../Controladores/VerificarSesion.php';
  if (isset($_POST['submit'])) {
    $Nombre =$_POST['NombreUsuario'];
    $Apellido =$_POST['ApellidoUsuario'];
    $Cedula =$_POST['CedulaUsuario'];
    $Correo =$_POST['CorreoUsuario'];
    $Contra =$_POST['Contrasena'];
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
              <h2>Copia de <span>Seguridad</span></h2>
            </div>
                <center>¿Desea Crear una Copia de Seguridad?</center>
                      <div class="btn-form">
                        <a href="../Controladores/RespaldoBD.php"><div class="btn-submit"><center>SI</center></a>
                        </div>
                        <a href="Inicio.php"><div class="btn-reset"><center>NO</center></a></div>                        
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