<?php

/*Especificando datos del servidor*/

	$Usuario="root"; /*Nombre Usuario*/
	$Contrasena=""; /*Contraseña de Servidor*/
	$BaseDatos="Control_acceso"; /*Nombre de la Base de datos*/
	$Dominio="localhost"; /*Direccion URL*/

/*Creando Conexion de Base de Datos*/

	$Conexion = mysqli_connect($Dominio,$Usuario,$Contrasena,$BaseDatos);
		if(!$Conexion)
			{
				echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
			}
?>






