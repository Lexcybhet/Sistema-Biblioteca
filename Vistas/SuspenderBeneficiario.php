<?php
  require '../Controladores/VerificarSesion.php'
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
                <h2>Registro de <span>Beneficiario</span></h2>
              </div>
              <?php
              $id=$_POST['Buscador'];
                require '../Controladores/ConexionBaseDatos.php';
                  $var_consulta= "SELECT * FROM Beneficiario WHERE Cedula_Beneficiario='$id'";
                  $var_resultado = $Conexion->query($var_consulta);
                  $var_fila=$var_resultado->fetch_array();

              ?>
                <form class="form-reg" action="../Controladores/SuspenderBeneficiario.php?Cedula_Beneficiario=<?php echo $var_fila ['Cedula_Beneficiario']; ?>" id="Beneficiario" name="Beneficiario" method="POST">
                  <label for="tipo"><B>Introduzca Nombre del Beneficiario: </B></label> 
                    <input class="input" type="text" name="NombreBeneficiario" placeholder="Nombre" value="<?php  echo $var_fila['Nombre_Beneficiario'];?>" required autofocus readonly>
                  <label for="tipo"><B>Introduzca Apellido del Beneficiario: </B></label> 
                    <input class="input" type="text" name="ApellidoBeneficiario" placeholder="Apellidos" value="<?php  echo $var_fila['Apellido_Beneficiario'];?>" required autofocus readonly>
                  <label for="tipo"><B>Introduzca Cedula del Beneficiario: </B></label> 
                    <input class="input" type="tel" name="CedulaBeneficiario" placeholder="Cedula" value="<?php  echo $var_fila['Cedula_Beneficiario'];?>" required readonly>
                  <label for="tipo"><B>Seleccione el Estado del Beneficiario: </B></label><br>
                    <select name="EstadoBeneficiario" value="<?php  echo $var_fila['Estado'];?>">
                      <option value="1">Activo</option>
                      <option value="2">Usuario Bloqueado</option>
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