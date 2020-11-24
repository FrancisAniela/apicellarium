<?php
  include 'conexiontry.php';
  $ct=0;
  $query=$_POST['query'];
  $params[]=$_POST['params'];
  $ok = false;
  
  $procedure_params=array();
  //foreach ($params as &$param) {
     //$procedure_params[]=$param;
  //}
  
  $procedure_params = array(
  array(&$params['IdPedido']),
  array(&$params['Completo'])
  );
	
  $consultar = sqlsrv_prepare( $conn, $query, $procedure_params);

  if( $consultar === false ) {
      die(print_r( sqlsrv_errors(), true));
  }

 $resultado=array();

//do 
	//{
		++$ct;
		echo "------------------------ Result " . $ct . ": ----\r\n";
		if ( !($errors = sqlsrv_errors()) )
		{
			$errors = 'No Errors';
		}
		else 
		{
			$errors = "Errores: ". print_r($errors, true);
		}
		//if ( sqlsrv_num_fields($consultar) > 0 )
		//{
                        print_r(sqlsrv_execute($consultar));
                        //echo "Filas: ". print_r(sqlsrv_num_rows($consultar));
                        //echo "campos = " .  sqlsrv_num_fields($consultar);
                        echo "resultado " . print_r(sqlsrv_fetch_array($consultar));
			while($extraerDatos=sqlsrv_fetch_array($consultar)){
                           echo 'entre';
			   echo $extraerDatos;
                           echo "Fetch array: " . print_r(sqlsrv_fetch_array($consultar));
                           $resultado[]=$extraerDatos;
                        } 
                        
			print_r($resultado);
		//}
		//else if ( ($rows=sqlsrv_rows_affected($consultar)) != -1 )
		//{
		//	echo "Rows affected: $rows\r\n";
		//}
		echo "Errors: $errors\r\n---------------- End of Result $ct ----\r\n\r\n";
	//} while ( sqlsrv_next_result($consultar) ) ;

//do
   // {
       // while($extraerDatos=sqlsrv_fetch_array($consultar,SQLSRV_FETCH_ASSOC)){
            // $resultado[]=$extraerDatos;
       // }
  //  } while ( ($ok=sqlsrv_next_result($consultar)) );
    
   // echo json_encode($resultado);
   
?>