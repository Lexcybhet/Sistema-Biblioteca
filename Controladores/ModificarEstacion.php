<?php 
/*Llamado a la conexion de la base de datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables del Formulario*/

	$id=$_REQUEST['Codigo'];
	$CodigoE = $_POST['CodigoEquipo'];
	$EstadoE = $_POST['EstadoEquipo'];
	$MarcaE = $_POST['MarcaEquipo'];
	
/*Metodo Para Actualizar Datos en la Base de Datos*/

	$Actualizar = " UPDATE Estaciones SET Codigo='$CodigoE', Marca='$MarcaE', Estado='$EstadoE' WHERE Codigo='$id' ";

/*Confirmar si se realiza*/

		if ($Conexion->query($Actualizar) === true) {
			echo "Registro Exitoso";
			echo "<br><br><a href='../Vistas/RegistrarEstacion.php'>Registrar Nueva</a>";
			echo "<br><br><a href='../Vistas/ConsultarEstaciones.php'>Mostrar Registros</a>";
		}else{
			echo "Registro Fallido";
			echo "<br><br><a href='../Vistas/RegistrarEstacion.php'>Registrar Nueva</a>";
		}
		
?>