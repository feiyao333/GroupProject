<?php
	session_start();

	$serverName = "itkmssql";
    $connectionOptions = array(
	//*****************************
        "Database" => "GroupProject3",
        "Uid" => "IT353F914",
        "PWD" => "special82"
    );
	
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);

	$sql = "delete from Cart where Cart.EMAIL='$cartid'";

	$stmt = sqlsrv_query($conn, $sql);

		if($stmt===false)
			{
				die(print_r(sqlsrv_errors(), true)); 
				echo "<p>something worry</p>";
			}	
			
		else{
			if($row = sqlsrv_fetch_array($stmt)){
				$email=$row[0];
				$psw=$row[1];
				$name=$row[2];
				$add=$row[3];		
				
				$_SESSION["email"]=$email;
				$_SESSION["psw"]=$psw;
				$_SESSION["name"]=$name;
				$_SESSION["add"]=$add;				
				echo "<p>validation success</p>";
				echo "<a href='myAccount.php'>My Account</a>";
				exit;
			}

			else{
				echo "<p>user or psw error</p>";
				echo "<a href='login.php'>Login</a>";
				exit;
			}			
		}
?>