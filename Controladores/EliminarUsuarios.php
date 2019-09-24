<?php 
/*Llamado a la conexion de la base de datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables*/

	$id= $_REQUEST['Cedula_Usuario'];
	
/*Metodo Para Eliminar en la Base de Datos*/

	$Eliminar = " DELETE FROM Usuario WHERE Cedula_Usuario='$id' ";

/*Confirmar si se realiza*/

	return $conexion -> query($Eliminar)

		if ($resultado) {
			
			require '../Vistas/ConsultarUsuarios.php';
		}else{
			echo "Error";
		}
		
?>