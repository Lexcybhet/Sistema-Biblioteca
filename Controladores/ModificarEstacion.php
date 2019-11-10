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
			header('Location: ../Vistas/AprobadoRE.php');
		}else{
			header('Location: ../Vistas/FallidoRE.php');
		}
		
?>