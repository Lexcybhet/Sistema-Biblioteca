<?php 
/*Llamado a la conexion de la base de datos*/

require 'ConexionBaseDatos.php';

/*Definir Variables*/

    $id= $_REQUEST['Cedula_Beneficiario'];
    
/*Metodo Para Eliminar en la Base de Datos*/

    $Eliminar = " DELETE FROM Beneficiario WHERE Cedula_Beneficiario='$id' ";

/*Confirmar si se realiza*/

        if ($Conexion->query($Eliminar) === true) {
			header('Location: ../Vistas/AprobadoE.php');
        }else{
            header('Location: ../Vistas/FallidoE.php');
        }
        
?>