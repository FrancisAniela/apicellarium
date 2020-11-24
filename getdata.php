<?php
  include 'conexiontry.php';

  $query=$_POST['query'];
  
  //if(strlen($query)>4096){
	//$fname = time() . rand(0,10000) . '.txt';
	//$fp = fopen($fname, 'w');
        //fwrite($fp, $query);
        //fclose($fp);
        //$output = [];
	//exec('sqlcmd -U' . $usernamesql . ' -P"' . $passwordsql . '" -S' . $server . ' -D' .$database. ' -f' .'65001'. ' -i' . $fname, $output);
        //$returnval['exec'] = implode(PHP_EOL, $output);
        //$returnval['error'] = '';
        //echo json_encode($output);
        //unlink($fname);
  //}
  //else{
	$consultar = sqlsrv_query($conn,$query);

  	if( $consultar === false ) {
      		die(print_r( sqlsrv_errors(), true));
 	}


 	$resultado=array();

    	while($extraerDatos=sqlsrv_fetch_array($consultar,SQLSRV_FETCH_ASSOC)){
        	$resultado[]=$extraerDatos;
   	}
	
	if(count($resultado) > 1){	
	    print_r(json_encode($resultado));
	}
	else{
	    foreach($resultado as $result){
		print_r(json_encode($result));
            }	
	}
	//foreach($resultado as $result){
	    //if(count($resultado) > 1){
		//print_r(json_encode($result));
	    //}
	    //else{
		//print_r(json_encode($result));
	    //}
	//}
    	
  
  
?>