<?php

include 'conexiontry.php';

$query=$_POST['query'];

$consultar = sqlsrv_query($conn,".$query.");

if( $consultar === false ) {
    die(print_r( sqlsrv_errors(), true));
}

$resultado=array();

    while($extraerDatos=sqlsrv_fetch_array($consultar)){
        $resultado[]=$extraerDatos;
    }

    echo json_encode($resultado);
?>