<?php
  include 'conexiontry.php';

  $query=$_POST['query'];

  $consultar = sqlsrv_query($conn,$query);

  if( $consultar === false ) {
      die(print_r( sqlsrv_errors(), true));
 }

  if( sqlsrv_fetch( $consultar ) === false)  
  {  
     echo "Error in retrieving row.\n";  
     die( print_r( sqlsrv_errors(), true));  
  }  

 $resultado=sqlsrv_get_field($consultar,0);

    echo $resultado;
?>