<?php
    include 'conexiontry.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
   
    $consultar = sqlsrv_query($conn,"EXEC [Acces].[usp_BuscarUsuarioApp] @Login='".$username."', @Pass='".$password."'");
    if( $consultar === false ) {
        die(print_r( sqlsrv_errors(), true));
   }

    $resultado=array();
	
    while($extraerDatos=sqlsrv_fetch_array($consultar,SQLSRV_FETCH_ASSOC)){
        $resultado[]=$extraerDatos;
    }
    

    if(count($resultado) > 1)
    {	
         print_r(json_encode($resultado[0],JSON_FORCE_OBJECT));
    }
    else
    {
        foreach($resultado as $result)
        {
            print_r(json_encode($result));
        }	
    }
?>