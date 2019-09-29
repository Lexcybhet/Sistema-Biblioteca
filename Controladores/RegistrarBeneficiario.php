<?php 

/*Conexion Con la Base de Datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables del Formulario*/

	$NombreB = $_POST['NombreBeneficiario'];
	$ApellidoB = $_POST['ApellidoBeneficiario'];
	$CedulaB = $_POST['CedulaBeneficiario'];
	$GeneroB = $_POST['GeneroBeneficiario'];
	$TipoB = $_POST['TipoBeneficiario'];
	$CarreraB = $_POST['CarreraBeneficiario'];
	$CorreoB = $_POST['CorreoBeneficiario'];

/*Metodo Para Introducir Datos en la Base de Datos*/

	$Insertar = " INSERT INTO Beneficiario VALUES ('$CedulaB', '$NombreB', '$ApellidoB', '$GeneroB', '$TipoB', '$CarreraB', '$CorreoB') ";

/*Confirmar si se realiza*/

		if ($Conexion->query($Insertar) === true) {
			echo "Registro Exitoso";
			echo "<br><br><a href='../Vistas/Registrar.php'>Registrar Nuevo</a>";
			echo "<br><br><a href='../Vistas/ConsultarBeneficiario.php'>Mostrar Registros</a>";
		}else{
			echo "Registro Fallido";
			echo "<br><br><a href='../Vistas/Registrar.php'>Registrar Nuevo</a>";
		}
		
?>