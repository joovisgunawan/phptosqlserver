<?php
$serverName = "LAPTOP-1L2O87II"; 
$connectionInfo = array(
    "Database"=>"flutter"
);
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established to sql server.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>