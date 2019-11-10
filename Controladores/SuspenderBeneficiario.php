<?php 

/*Conexion Con la Base de Datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables del Formulario*/

	$id=$_REQUEST['Cedula_Beneficiario'];
	$NombreB = $_POST['NombreBeneficiario'];
	$ApellidoB = $_POST['ApellidoBeneficiario'];
	$CedulaB = $_POST['CedulaBeneficiario'];
	$EstadoB = $_POST['EstadoBeneficiario'];

/*Metodo Para Actualizar Datos en la Base de Datos*/

	$Actualizar = " UPDATE Beneficiario SET Cedula_Beneficiario='$CedulaB', Nombre_Beneficiario='$NombreB', Apellido_Beneficiario='$ApellidoB', Estado='$EstadoB' WHERE Cedula_Beneficiario='$id' ";

/*Confirmar si se realiza*/

		if ($Conexion->query($Actualizar) === true) {
			header('Location: ../Vistas/AprobadoRB.php');
		}else{
			header('Location: ../Vistas/FallidoRB.php');
		}
		
?>	