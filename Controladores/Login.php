<?php
	session_start();
		$Usuario=$_POST['Usuario'];
		$Contrasena=$_POST['Contrasena'];
		$Nombre=$_POST['Nombre'];

	require 'ConexionBaseDatos.php';
		$proceso = $Conexion-> query ("SELECT * FROM Usuario WHERE Cedula_Usuario='$Usuario' AND Contrasena='$Contrasena' AND Nombre_Usuario='$Nombre' ");
			if ($resultado = mysqli_fetch_array($proceso)) {
				$_SESSION['u_usuario']= $Nombre;
				//require '../Vistas/Inicio.php';
				echo "Sesion Exitosa";
			}
			else {
				echo "Sesion Fallida";
			}
?>