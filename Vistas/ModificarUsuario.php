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
              <h2>Registro de <span>Usuario</span></h2>
            </div>
            <?php
              $id=$_REQUEST['Cedula_Usuario'];
                 require '../Controladores/ConexionBaseDatos.php';
                      $var_consulta= "SELECT * FROM Usuario WHERE Cedula_Usuario='$id'";
                        $var_resultado = $Conexion->query($var_consulta);
                        $var_fila=$var_resultado->fetch_array();
                                  
            ?>
              <form class="form-reg" action="../Controladores/ModificarUsuario.php?Cedula_Usuario=<?php echo $var_fila ['Cedula_Usuario']; ?>" id="Usuario" name="Usuario" method="POST">
                <label for="tipo"><B>Introduzca Nombre del Usuario: </B></label>
                  <input class="input" type="text" name="NombreUsuario" placeholder="Nombre" value="<?php  echo $var_fila['Nombre_Usuario'];?>" required autofocus>
                <label for="tipo"><B>Introduzca Apellido del Usuario: </B></label> 
                  <input class="input" type="text" name="ApellidoUsuario" placeholder="Apellidos" value="<?php  echo $var_fila['Apellido_Usuario'];?>"required autofocus>
                <label for="tipo"><B>Introduzca Cedula del Usuario: </B></label> 
                  <input class="input" type="text" name="CedulaUsuario" placeholder="Cedula" value="<?php  echo $var_fila['Cedula_Usuario'];?>" required >
                <label for="tipo"><B>Introduzca Correo Electrónico del Usuario: </B></label> 
                  <input class="input" type="email" name="CorreoUsuario" placeholder="Correo Electrónico" value="<?php  echo $var_fila['Correo_Usuario'];?>" required>
                <label for="tipo"><B>Seleccione tipo de usuario: </B></label><br>
                  <select name="TipoUsuario" value="<?php  echo $var_fila['Tipo_Usuario'];?>">
                    <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                    <option value="ENCARGADO">ENCARGADO</option>
                  </select><br>
                      <div class="btn-form">
                        <input class="btn-submit" type="submit" value="GUARDAR">
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