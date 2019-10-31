<?php 
/*Llamado a la conexion de la base de datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables del Formulario*/

	$HEntrada = $_POST['EntradaB'];
	$HSalida = $_POST['SalidaB'];
	$CedulaU = $_POST['IdUsuario'];
	$CodigoE = $_POST['IdEstacion'];
	$CedulaB = $_POST['IdBeneficiario'];

/*Metodo Para Introducir Datos en la Base de Datos*/

	$Insertar = " INSERT INTO `Registros` (`id`, `Hora_Entrada`, `Hora_Salida`, `IdUsuario`, `idEstacion`, `IdBeneficiario`) VALUES (NULL, '$HEntrada', '$HSalida', '$CedulaU', '$CodigoE', '$CedulaB')";


/*Confirmar si se realiza*/

		if ($Conexion->query($Insertar) === true) {
			echo "Registro Exitoso";
			echo "<br><br><a href='../Vistas/Estaciones.php'>Mostrar Estaciones</a>";
		}else{
			echo "Registro Fallido";
			echo "<br><br><a href='../Vistas/Estaciones.php'>Mostrar Estaciones</a>";
		}
		
?>