<?php
    include 'conexiontry.php';

    $query=$_POST['query'];

    $consultar = sqlsrv_query($conn,".$query.");

    if( $consultar === false ) {
        die(print_r( sqlsrv_errors(), true));
   }

?>