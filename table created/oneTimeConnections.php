<?php  
$server = 'itkmssql';
$dbName = 'master';
//*******************************
$uid = 'IT353F914';
$pwd = 'special82';

$options = array("Database"=>$dbName, "UID"=>$uid, "PWD"=>$pwd);
$conn = sqlsrv_connect($server, $options);
if($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
else
{
	echo "Connected successfully";
}
//Indicate the name of your database. Should be lastNameProj6
//**************************8
$tableName = 'GroupProject3';
$query = "CREATE DATABASE $tableName";

$stmt = sqlsrv_query($conn, $query);
if($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}
else{
	echo "Database created";
}
sqlsrv_free_stmt($stmt);


	
	

?>  
  
