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
        echo "Connected!";
	else
		die(print_r(sqlsrv_errors(), true));
	
$tableName = "Account";	
$sql = "DELETE FROM $tableName";

$stmt = sqlsrv_query($conn, $sql);
	echo "<br/> ";
	if($stmt===false)
	{
		die(print_r(sqlsrv_errors(), true)); 
	}		
	else
		echo "<br/>Data deleted from " . $tableName;
	sqlsrv_free_stmt($stmt);
