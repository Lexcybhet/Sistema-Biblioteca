<?php 
/*Llamado a la conexion de la base de datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables*/

    $id= $_REQUEST['Cedula_Beneficiario'];
    
/*Metodo Para Eliminar en la Base de Datos*/

    $Eliminar = " DELETE FROM Beneficiario WHERE Cedula_Beneficiario='$id' ";

/*Confirmar si se realiza*/

        if ($Conexion->query($Eliminar) === true) {
			echo "Eliminado Exitosamente";
			echo "<br><br><a href='../Vistas/Registrar.php'>Registrar Nuevo</a>";
			echo "<br><br><a href='../Vistas/ConsultarBeneficiario.php'>Mostrar Registros</a>";
        }else{
            echo "Fallido";
        }
        
?>