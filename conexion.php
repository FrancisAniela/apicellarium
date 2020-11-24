<?php

// $server = $_POST['server'];
// $database = $_POST['database'];
// $password = $_POST['password'];
// $username = $_POST['username'];
// $connect = new mysqli("192.168.1.51:49248","usrwmssys","wms123456","CELLARIUMDB");

// $connect->set_charset('utf8');

// if($connect){


// }else{
//     echo "Fallo, revise ip o firewall";
//     exit();
// }

$serverName = "192.168.1.51\SQL2016, 49248"; //serverName\instanceName

$connectionInfo = array( "Database"=>"CELLARIUMV2","UID"=>"usrwmssys", "PWD"=>"wms123456");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?>