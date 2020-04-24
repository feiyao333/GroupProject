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
	

/*
$tableName = "Item";
$sql = "INSERT INTO Item
VALUES('Bus basic', 20, 1,'1@Q'),
('Bus regular', 30, 2,'2@q'),('Bus advance', 40,3,'1@Q'),

('Eng basic', 29,1,'2@q'),
('Eng regular', 37,2,'2@q'),('Eng advance', 45,3,'1@Q'),

('Sci basic', 26,1,'2@q'),
('Sci regular', 33,2,'1@Q'),('Sci advance', 41,3,'2@q'),

('Tec basic', 22,1,'1@Q'),
('Tec regular', 32,2,'2@q'),('Tec advance', 46,3,'2@q'),

('Art basic', 24,1,'1@Q'),
('Art regular', 35,2,'2@q'),('Art advance', 45,3,'2@q');";	


$sql = "INSERT INTO $tableName
VALUES('Pikachu', 100, 1),
('Raichu', 200, 2)";



$sql = "INSERT INTO $tableName
VALUES('Caterpie', 10, 3),
('Rayquaza', 1000, 4),('mega Rayquaza', 100000, 5)";

$tableName = "Cart";
$sql = "INSERT INTO $tableName
VALUES(1, '1@q','Pikachu', 3),
(2, '1@q','Caterpie', 5),(3, '1@q', 'Rayquaza', 1)";
*/
$stmt = sqlsrv_query($conn, $sql);
	echo "<br/> ";
	if($stmt===false)
	{
		die(print_r(sqlsrv_errors(), true)); 
	}		
	else
		echo "<br/>Data added to " . $tableName;
	sqlsrv_free_stmt($stmt);