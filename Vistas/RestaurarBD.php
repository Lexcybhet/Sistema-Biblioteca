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
              <h2>Restaurar <span>Base de Datos</span></h2>
            </div>
  <form action="../Controladores/RestaurarBD.php" method="POST">
    <label>Selecciona un punto de restauración</label><br>
    <select name="restorePoint">
      <option value="" disabled="" selected="">Selecciona un punto de restauración</option>
      <?php
        include_once '../Controladores/ConexionRespaldo.php';
        $ruta=BACKUP_PATH;
        if(is_dir($ruta)){
            if($aux=opendir($ruta)){
                while(($archivo = readdir($aux)) !== false){
                    if($archivo!="."&&$archivo!=".."){
                        $nombrearchivo=str_replace(".sql", "", $archivo);
                        $nombrearchivo=str_replace("-", ":", $nombrearchivo);
                        $ruta_completa=$ruta.$archivo;
                        if(is_dir($ruta_completa)){
                        }else{
                            echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
                        }
                    }
                }
                closedir($aux);
            }
        }else{
            echo $ruta." No es ruta válida";
        }
      ?>
    </select>
    <button type="submit" >Restaurar</button>
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