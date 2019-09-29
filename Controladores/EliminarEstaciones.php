<?php 
/*Llamado a la conexion de la base de datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables*/

	$id= $_REQUEST['Codigo'];
	
/*Metodo Para Eliminar en la Base de Datos*/

	$Eliminar = " DELETE FROM Estaciones WHERE Codigo='$id' ";

/*Confirmar si se realiza*/

		if ($Conexion->query($Eliminar) === true) {
			echo "Elimado Exitosamente";
			echo "<br><br><a href='../Vistas/RegistrarEstacion.php'>Registrar Nuevo</a>";
			echo "<br><br><a href='../Vistas/ConsultarEstaciones.php'>Mostrar Registros</a>";
		}else{
			echo "Fallido";
		}
		
?>