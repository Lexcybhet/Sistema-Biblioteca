<?php 

/*Conexion Con la Base de Datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables del Formulario*/

	$id=$_REQUEST['Cedula_Beneficiario'];
	$NombreB = $_POST['NombreBeneficiario'];
	$ApellidoB = $_POST['ApellidoBeneficiario'];
	$CedulaB = $_POST['CedulaBeneficiario'];
	$GeneroB = $_POST['GeneroBeneficiario'];
	$TipoB = $_POST['TipoBeneficiario'];
	$CarreraB = $_POST['CarreraBe'];
	$CorreoB = $_POST['CorreoBeneficiario'];

/*Metodo Para Actualizar Datos en la Base de Datos*/

	$Actualizar = " UPDATE Beneficiario SET Cedula_Beneficiario='$CedulaB', Nombre_Beneficiario='$NombreB', Apellido_Beneficiario='$ApellidoB', Genero='$GeneroB', Tipo_Beneficiario='$TipoB', Carrera='$CarreraB', Correo_Beneficiario='$CorreoU' WHERE Cedula_Beneficiario='$id' ";

/*Confirmar si se realiza*/

		if ($Conexion->query($Actualizar) === true) {
			echo "Registro Exitoso";
			echo "<br><br><a href='../Vistas/Registrar.php'>Registrar Nuevo</a>";
		}else{
			echo "Registro Fallido";
			echo "<br><br><a href='../Vistas/Registrar.php'>Registrar Nuevo</a>";
		}
		
?>	