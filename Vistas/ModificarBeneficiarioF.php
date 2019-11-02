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
                <form class="form-reg" action="../Controladores/ModificarBeneficiario.php?Cedula_Beneficiario=<?php echo $var_fila ['Cedula_Beneficiario']; ?>" id="Beneficiario" name="Beneficiario" method="POST">
                  <label for="tipo"><B>Introduzca Nombre del Beneficiario: </B></label> 
                    <input class="input" type="text" name="NombreBeneficiario" placeholder="Nombre" value="<?php  echo $var_fila['Nombre_Beneficiario'];?>" required autofocus>
                  <label for="tipo"><B>Introduzca Apellido del Beneficiario: </B></label> 
                    <input class="input" type="text" name="ApellidoBeneficiario" placeholder="Apellidos" value="<?php  echo $var_fila['Apellido_Beneficiario'];?>" required autofocus>
                  <label for="tipo"><B>Introduzca Cedula del Beneficiario: </B></label> 
                    <input class="input" type="tel" name="CedulaBeneficiario" placeholder="Cedula" value="<?php  echo $var_fila['Cedula_Beneficiario'];?>" required >
                  <label for="sexo"><B>Seleccione su género:</B></label><br> 
                    <select name="GeneroBeneficiario" value="<?php  echo $var_fila['Genero'];?>">
                      <option value="MASCULINO">MASCULINO</option>
                      <option value="FEMENINO">FEMENINO</option>
                    </select><br>
                  <label for="tipo"><B>Seleccione tipo de Beneficiario: </B></label><br> 
                    <select name="TipoBeneficiario" required value="<?php  echo $var_fila['Tipo_Beneficiario'];?>">
                      <option value="ESTUDIANTE">ESTUDIANTE</option>
                      <option value="DOCENTE">DOCENTE</option>
                      <option value="PERSONAL ADMINISTRATIVO">PERSONAL ADMINISTRATIVO</option>
                      <option value="PERSONAL OBRERO">PERSONAL OBRERO</option>
                      <option value="INVITADO">INVITADO</option>
                    </select><br>
                  <label for="tipo"><B>Seleccione Carrera de Beneficiario: </B></label><br>
                    <select name="CarreraBe" value="<?php  echo $var_fila['Carrera'];?>" required>
                      <option value="Manejo de Emergencias y Acción Contra Desastres"> Manejo de Emergencias y Acción Contra Desastres</option>
                      <option value="PNF en Administración">PNF en Administración</option>
                      <option value="PNF en Agroalimentación">PNF en Agroalimentación</option>
                      <option value="PNF en Contaduría Pública">PNF en Contaduría Pública</option>
                      <option value="PNF en Construcción Civil">PNF en Construcción Civil</option>
                      <option value="PNF en Fonoaudiología">PNF en Fonoaudiología</option>
                      <option value="PNF en Geociencia">PNF en Geociencia</option>
                      <option value="PNF en Historia">PNF en Historia</option>
                      <option value="PNF en Informática">PNF en Informática</option>
                      <option value="PNF en Turismo">PNF en Turismo</option>
                      <option value="Radiología e Imagenología">Radiología e Imagenología</option>
                      <option value="NO APLICA">NO APLICA</option>
                    </select><br>
                  <label for="tipo"><B>Introduzca Correo Electrónico del Usuario: </B></label> 
                    <input class="input" type="email" name="CorreoU" placeholder="Correo Electrónico" value="<?php  echo $var_fila['Correo_Beneficiario'];?>" required>
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