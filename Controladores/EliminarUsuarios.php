<?php 
/*Llamado a la conexion de la base de datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables*/

	$id= $_REQUEST['Cedula_Usuario'];
	
/*Metodo Para Eliminar en la Base de Datos*/

	$Eliminar = " DELETE FROM Usuario WHERE Cedula_Usuario='$id' ";

/*Confirmar si se realiza*/

		if ($Conexion->query($Eliminar) === true) {
			echo "Eliminado Exitosamente";
			echo "<br><br><a href='../Vistas/Crear.php'>Registrar Nuevo</a>";
			echo "<br><br><a href='../Vistas/ConsultarUsuarios.php'>Mostrar Registros</a>";
		}else{
			echo "Fallido";
		}
		
?>