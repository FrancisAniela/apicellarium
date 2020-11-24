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

$server = $_POST['server'];
$database = $_POST['database'];
$passwordsql = $_POST['passwordsql'];
$usernamesql = $_POST['usernamesql'];


$serverName = $server; //serverName\instanceName

$connectionInfo = array( "Database"=>$database,"UID"=>$usernamesql, "PWD"=>$passwordsql, "CharacterSet"=>'UTF-8', "FormatDecimals"=>true);
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}

?>