 <?php

	require 'ConexionBaseDatos.php';
	session_start();
		$Usuario=$_POST['Usuario'];
		$Contrasena=$_POST['Contrasena'];
		$Tipo=$_POST['TipoUsuario'];
		$contra = md5($Contrasena);
				
			$proceso = $Conexion-> query ("SELECT * FROM Usuario WHERE Cedula_Usuario='$Usuario' AND Contrasena='$Contrasena' AND idTipo='$Tipo' ");
			$resultado = mysqli_fetch_array($proceso);
				if ($resultado) {
					$_SESSION['User'] = $Usuario;
					$_SESSION['TipoU'] = $Tipo;
					header('Location: ../Vistas/Inicio.php');
				}
				else {
					header('Location: ../Index.php');
				}
?>