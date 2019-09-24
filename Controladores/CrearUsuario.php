<?php 
/*Llamado a la conexion de la base de datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables del Formulario*/

	$NombreU = $_POST['NombreUsuario'];
	$ApellidoU = $_POST['ApellidoUsuario'];
	$CedulaU = $_POST['CedulaUsuario'];
	$CorreoU = $_POST['CorreoUsuario'];
	$TipoU = $_POST['TipoUsuario'];
	$ContrasenaU = $_POST['Contrasena'];

/*Metodo Para Introducir Datos en la Base de Datos*/

	$Insertar = " INSERT INTO Usuario VALUES ('$CedulaU', '$NombreU', '$ApellidoU', '$TipoU', '$CorreoU', '$ContrasenaU') ";

/*Confirmar si se realiza*/

		if ($Conexion->query($Insertar) === true) {
			echo "Registro Exitoso";
			echo "<br><br><a href='../Vistas/Crear.php'>Registrar Nuevo</a>";
		}else{
			echo "Registro Fallido";
			echo "<br><br><a href='../Vistas/Crear.php'>Registrar Nuevo</a>";
		}
		
?>