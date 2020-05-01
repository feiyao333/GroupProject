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
					<img style="width: 50%; heigth: auto"  src="images/shot pict/redbirdISU.jpg" alt="redbird">
				</div>
                <h1>Search Results</h1> 
<?php

try {   $connString = "mysql:host=localhost; dbname=ISUtextbooks";   
        $user = "root"; 
        $pass = "";
   $pdo = new PDO($connString,$user,$pass);   
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $book = $_Post
   $sql = "select * from Categories order by CategoryName";   
   $result = $pdo->query($sql);

   while ($row = $result->fetch()) {         echo $row['Title'] . " - " . $row['Price'] . "<br/>";      } $pdo = null; } catch (PDOException $e) {   die( $e->getMessage() ); }
?>


/*
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
	   $tableName = "Item";	
				$sql = "select *from Item where title LIKE '$book'";
	   
	  
	   $stmt = sqlsrv_query($conn, $sql);
	
	  if ( $row = sqlsrv_fetch_array($stmt))
	  {
        echo "Title: ".$row[0]."<br/>"."Price ".$row[1]."<br/>"."Number of Books ".$row[2]."<br/>"."Owner: ".$row[3]."<br/>";
	  }
	  else
	  {
		  echo "no result";
	  }
	}

sqlsrv_free_stmt($stmt);
*/
?>
</div>
</div>
</div>
  </body>
  </html>
<?php
	include('footer.php')
?>
