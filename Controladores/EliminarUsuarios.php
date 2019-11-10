<?php 
/*Llamado a la conexion de la base de datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables*/

	$id= $_REQUEST['Cedula_Usuario'];
	
/*Metodo Para Eliminar en la Base de Datos*/

	$Eliminar = " DELETE FROM Usuario WHERE Cedula_Usuario='$id' ";

/*Confirmar si se realiza*/

		if ($Conexion->query($Eliminar) === true) {
			header('Location: ../Vistas/AprobadoE.php');
		}else{
			header('Location: ../Vistas/FallidoE.php');
		}
		
?>