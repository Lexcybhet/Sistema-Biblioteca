<?php 
/*Llamado a la conexion de la base de datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables del Formulario*/

	$CodigoE = $_POST['CodigoEquipo'];
	$EstadoE = $_POST['EstadoEquipo'];
	$MarcaE = $_POST['MarcaEquipo'];

/*Metodo Para Introducir Datos en la Base de Datos*/

	$Insertar = " INSERT INTO Estaciones VALUES ('$CodigoE', '$EstadoE', '$MarcaE') ";

/*Confirmar si se realiza*/

		if ($Conexion->query($Insertar) === true) {
			
			require '../Vistas/RegistroExitoso.html';
		}else{
			require '../Vistas/RegistroFallido.html';
		}
		
?>