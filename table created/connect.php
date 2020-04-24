<?php
    $serverName = "itkmssql";
    $connectionOptions = array(
	//*******************************
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
	$sql = "IF NOT EXISTS (SELECT * FROM Sys.tables
	WHERE name =N'Account' and type =N'U')
	BEGIN
	CREATE TABLE $tableName(  	
	EMAIL VARCHAR(30) PRIMARY KEY not null ,
	psw VARCHAR(15) not null,
	name VARCHAR(15) not null,	
	Address VARCHAR(30) not null) 	
	END";	
	
	$stmt = sqlsrv_query($conn, $sql);
	echo "<br/> ";
	if($stmt===false)
	{
		die(print_r(sqlsrv_errors(), true)); 
	}		
	else
		echo "<br/>Table " . $tableName. " Created!";
	sqlsrv_free_stmt($stmt);
	$tableName = "Item";
	$sql ="IF NOT EXISTS (SELECT * FROM Sys.tables
	WHERE name =N'Item' and type =N'U')
	BEGIN
	CREATE TABLE $tableName ( 
	title VARCHAR(15) PRIMARY KEY NOT NULL,
	price int NOT NULL,
	numofph int NOT NULL)		
	END";
	$stmt = sqlsrv_query($conn, $sql);	
	if($stmt)
        echo "<br/>Table " . $tableName. " Created!";
	else
		die(print_r(sqlsrv_errors(), true));
	sqlsrv_free_stmt($stmt);
	
	$tableName = "Cart";	
	$sql = "IF NOT EXISTS (SELECT * FROM Sys.tables
	WHERE name =N'Cart' and type =N'U')
	BEGIN
	CREATE TABLE $tableName(  
	cartid int PRIMARY KEY NOT NULL,	
	EMAIL VARCHAR(30) not null ,
	title VARCHAR(15) not null,
	number int DEFAULT 1) 	
	END";	
	
	$stmt = sqlsrv_query($conn, $sql);
	if($stmt===false)
	{
		die(print_r(sqlsrv_errors(), true)); 
	}		
	else
		echo "<br/>Table " . $tableName. " Created!";
	sqlsrv_free_stmt($stmt);
			
?>