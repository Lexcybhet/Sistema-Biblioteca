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
          <img style="float:left; margin:5px;" src="Imagenes/Libros.png" width="300" height="400"><H1 align= "center"><br><br><br>BIENVENIDOS AL SISTEMA DE CONTROL DE ACCESO DEL ÁREA DE CONSULTA ELECTRÓNICA E INTERNET<BR></H1>
            <section>
              <h1>
                <?php 
                  session_start();
                    if (isset($_SESSION['u_usuario'])) {
                      echo "Usuario ";       
                    }
                    else {
                      //require '../Index.php';
                    }
                
                ?> 
              </h1>
            </section>  
        </div>
      </section>
<!-- Scripts -->
  <?php 
    include "Modulos/Scripts.php";
  ?>
</BODY>
</HTML>