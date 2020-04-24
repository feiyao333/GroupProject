<?php
$serverName = "itkmssql";
    $connectionOptions = array(
	//*****************************
        "Database" => "GroupProject3",
        "Uid" => "IT353F914",
        "PWD" => "special82"
    );
	
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if($conn)
        //echo "Connected!";
	else
		die(print_r(sqlsrv_errors(), true));

?>