<?php 
/*Llamado a la conexion de la base de datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables del Formulario*/

	$FEntrada = $_POST['EntradaFB'];
	$HEntrada = $_POST['EntradaB'];
	$HSalida = $_POST['SalidaB'];
	$CedulaU = $_POST['IdUsuario'];
	$CodigoE = $_POST['IdEstacion'];
	$CedulaB = $_POST['IdBeneficiario'];

/*Metodo Para Introducir Datos en la Base de Datos*/

	$Insertar = " INSERT INTO `Registros` (`id`, `Fecha_Ingreso`, `Hora_Entrada`, `Hora_Salida`, `IdUsuario`, `idEstacion`, `IdBeneficiario`) VALUES (NULL, '$FEntrada', '$HEntrada', '$HSalida', '$CedulaU', '$CodigoE', '$CedulaB')";

	$var_consulta = "SELECT * FROM Beneficiario WHERE Cedula_Beneficiario = $CedulaB ";
	$var_resultado = $Conexion->query($var_consulta);
	$var_fila=$var_resultado->fetch_array();

/*Confirmar si se realiza*/

		if ($var_fila['Cedula_Beneficiario'] == $CedulaB) {
			if ($var_fila['Estado'] != 1) {
				header('Location: ../Vistas/UsuarioSuspendido.php');
			}
			else{
				if ($Conexion->query($Insertar) === true) {
					header('Location: ../Vistas/Estaciones.php');
				}else{
					header('Location: ../Vistas/FallidoA.php');
				}
			}
		}
		else{
			header('Location: ../Vistas/FallidoA.php');
		}
		
?>