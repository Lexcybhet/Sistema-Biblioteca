<?php

	require 'ConexionBaseDatos.php';

      $doc = "";
      if(isset($_POST['Cedula_Usuario'])){
        $doc = $_POST['Cedula_Usuario'];
        $existe = 0;

        	if ($doc=="") {
        		echo "Campo Invalido";
        	}
        	else{
        		$resultados = mysqli_query($Conexion,"SELECT * FROM Usuario WHERE Cedula_Usuario = '$doc'");
  					while($consulta = mysqli_fetch_array($resultados)){
  						$existe++;
  					}
  				if ($existe==0) {
  					echo "El documento no Existe";
  				}
  				else{
  					$_DELETE_SQL = "DELETE FROM Usuario WHERE Cedula_Usuario = '$doc'";
  					mysqli_query($Conexion,$_DELETE_SQL); 
  					echo "Se elimino exitosamente";
  				}
        	}

      }

?>