<!-- Search Results -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISU Textbook Market</title>
   
    <link href="bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">

    <link href="IT353group.css" rel="stylesheet">
  </head>
  <body>
<?php
	include('header.php')
?>
<div class="container">
			<div class="row">
				<div class="col-md-3">
					<img style="width: 100%;" src="images/shot pict/redbirdISU.jpg" alt="redbird">
				</div>
                <h1>Search Results</h1> 
<?php
    $serverName = "itkmssql";
    $connectionOptions = array(
         "Database" => "GroupProject3",
        "Uid" => "IT353F914",
        "PWD" => "special82"
    );
	
    $conn = sqlsrv_connect($serverName, $connectionOptions);
	 if($conn===false)
     {
	  die(print_r(sqlsrv_errors(), true));
     }
	 	 
   if(isset($_POST['bookSearch'])) 
    {
	   $book = $_POST['bookSearch'];
	   $tableName = "Account";	
				$sql = "select *from Account";
	   
	   $stmt = sqlsrv_query($conn, $sql);
	
	  if ( $row = sqlsrv_fetch_array($stmt))
	  {
        echo "1: ".$row[0]."<br/>"."2 ".$row[1]."<br/>"."3".$row[2]."<br/>"."4".$row[3]."<br/>";
	  }
	  else
	  {
		  echo "no result";
	  }
	}

sqlsrv_free_stmt($stmt);
?>
</div>
</div>
</div>
  </body>
  </html>
<?php
	include('footer.php')
?>

            
            


