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
					<img style="width: 40%; height = auto;" src="images/shot pict/redbirdISU.jpg" alt="redbird">
				</div>
				<div class="col-md-6">
                <h1>Search Results</h1> 
                  <table class="table table-condensed">
                <thead>
		    <tr>
			    <th colspan="2"></th>
			    <th title = "Title">Title</th> 
				<th title = "Price">Price</th> 
				<th title = "User">User</th> 
				<th></th>
		    </tr>
		</thead>
		<tbody>
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
	 	 
   if(isset($_POST['priceSearch'])) 
    {
	   $price = $_POST['priceSearch'];
	   $tableName = "Item";	
				$sql = "select * from Item where price LIKE '$price'";
	   
	  
	   $stmt = sqlsrv_query($conn, $sql);
	
	  if ( $row = sqlsrv_fetch_array($stmt))
	  {
	  	echo"
					<tr>
						<td><input type='checkBox' name='index[]' value='10'></td>
						<td><image src='images/science/$row[2].jpg' class='pic'></td>
						<td>$row[0]</td>
						<td>$row[1]</td>
						<td>$row[3]</td>
						<td><button><a href='#'><img src='images/edit16.png' > Add to cart</a></button></td>
					</tr>";
	  }
	  else
	  {
		  echo "no result";
	  }
	}
sqlsrv_free_stmt($stmt);
?>
		  </tbody>		
	    </table>
		</div>
</div>
</div>
</div>
  </body>
  </html>
<?php
	include('footer.php')
?>