<?php
	session_start();
	$email=$_POST["email"];
	$psw=$_POST["password1"];
	$name=$_POST["name"];
	$add=$_POST["address"];
	$psw2=$_POST["password2"];
	
	if($psw===$psw2){		
		$serverName = "itkmssql";
		$connectionOptions = array(
		//*****************************
			"Database" => "GroupProject3",
			"Uid" => "IT353F914",
			"PWD" => "special82"
		);
		
		//Establishes the connection
		$conn = sqlsrv_connect($serverName, $connectionOptions);

		$tableName = "Account";	
		$sql = "select * from $tableName where EMAIL='$email'";

		$stmt = sqlsrv_query($conn, $sql);

			if($stmt===false)
				{
					die(print_r(sqlsrv_errors(), true)); 
					echo "<p>something worry</p>";
				}	
				
			else{
				if($row===sqlsrv_fetch_array($stmt)){
					$sql = "Insert INTO $tableName
					VALUES
					('$email', '$psw',     '$name', '$add')";					
	
					$_SESSION["email"]=$email;
					$_SESSION["psw"]=$psw;
					$_SESSION["name"]=$name;
					$_SESSION["add"]=$add;

					$stmt = sqlsrv_query($conn, $sql);
					echo "<p>Account created</p>";
					echo "<a href='myAccount.php'>My Account</a>";
					exit;
				}

				else{
					echo "<p>user exits. Please change your mail or login</p>";
					echo "<a href='createAccount.php'>Create My Account</a></br>";
					echo "<a href='login.php?'>Login</a>";
					exit;
				}			
			}
	}
	else{
		echo "<p>Password are not same</p>";
		echo "<a href='createAccount.php'>Create My Account</a>";
	}
?>