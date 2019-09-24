<?php 
/*Llamado a la conexion de la base de datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables del Formulario*/

	$id=$_REQUEST['Cedula_Usuario'];
	$NombreU = $_POST['NombreUsuario'];
	$ApellidoU = $_POST['ApellidoUsuario'];
	$CedulaU = $_POST['CedulaUsuario'];
	$CorreoU = $_POST['CorreoUsuario'];
	$TipoU = $_POST['TipoUsuario'];
	$ContrasenaU = $_POST['ContrasenaU'];
	
/*Metodo Para Actualizar Datos en la Base de Datos*/

	$Actualizar = " UPDATE Usuario SET Cedula_Usuario='$CedulaU', Nombre_Usuario='$NombreU', Apellido_Usuario='$ApellidoU', Tipo_Usuario='$TipoU', Correo_Usuario='$CorreoU', Contrasena='$ContrasenaU' WHERE Cedula_Usuario='$id' ";

/*Confirmar si se realiza*/

		if ($Conexion->query($Actualizar) === true) {
			echo "Registro Exitoso";
			echo "<br><br><a href='../Vistas/Crear.php'>Registrar Nuevo</a>";
		}else{
			echo "Registro Fallido";
			echo "<br><br><a href='../Vistas/Crear.php'>Registrar Nuevo</a>";
		}
		
?>