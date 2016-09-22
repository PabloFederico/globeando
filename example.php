<?php
$serverName = "globeando.database.windows.net"; //serverName\instanceName
$connectionInfo = array( "Database"=>"globeando", "UID"=>"Pablo", "PWD"=>"Pablito175");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Conexión establecida.<br />";
}else{
     echo "Conexión no se pudo establecer.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>