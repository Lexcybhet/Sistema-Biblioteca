<?php

	require 'ConexionBaseDatos.php';
	session_start();
		$Usuario=$_POST['Usuario'];
		$Contrasena=$_POST['Contrasena'];
				
			$proceso = $Conexion-> query ("SELECT * FROM Usuario WHERE Cedula_Usuario='$Usuario' AND Contrasena='$Contrasena' ");
			$resultado = mysqli_fetch_array($proceso);
				if ($resultado) {
					$_SESSION['User'] = $Usuario;
					header('Location: ../Vistas/Inicio.php');
				}
				else {
					header('Location: ../Index.php');
				}
?>