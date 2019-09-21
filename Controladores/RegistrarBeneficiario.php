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
			require '../Vistas/RegistroExitoso.html';
		}else{
			require '../Vistas/RegistroFallido.html';
		}
		
?>