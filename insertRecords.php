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
	
$tableName = "Item";
$sql = "INSERT INTO $tableName
VALUES('Business Book basic', 20, 1,'1@Q'),
('Business Book regular', 30, 2,'2@q'),('Business Book advance', 40,3,'1@Q'),

('English Book basic', 29,1,'2@q'),
('English Book regular', 37,2,'2@q'),('English Book advance', 45,3,'1@Q'),

('Science Book basic', 26,1,'2@q'),
('Science Book regular', 33,2,'1@Q'),('Science Book advance', 41,3,'2@q'),

('Technology Book basic', 22,1,'1@Q'),
('Technology Book regular', 32,2,'2@q'),('Technology Book advance', 46,3,'2@q'),

('Art Book basic', 24,1,'1@Q'),
('Art Book regular', 35,2,'2@q'),('Art Book advance', 45,3,'2@q')";
	

/*
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