<?php  

	if (isset($_POST['submit'])) {
		if (empty($Nombre)) {
			echo "<p class='error'>Campo vacio, agregar nombre</p>";
		}
			else{
				if (strlen($Nombre) > 15) {
					echo "<p class='error'>Cantidad de caracteres superada</p>";
				}
			}
		if (empty($Apellido)) {
			echo "<p class='error'>Campo vacio, agregar apellido</p>";
		}
		if (empty($Cedula)) {
			echo "<p class='error'>Campo vacio, agregar Cedula</p>";
		}
		if (empty($Correo)) {
			echo "<p class='error'>Campo vacio, agregar correo</p>";
		}
		if (empty($Contra)) {
			echo "<p class='error'>Campo vacio, agregar contraseña</p>";
		}
	}

?>