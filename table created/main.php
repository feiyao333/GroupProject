<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISU Texbook Market</title>
    <link href="bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
  </head>
<body>

<?php
	include('header.php')
?>
	<div class="container">
        <div class="col-md-3">      
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Catagories</h3>
				</div>
				<div class="panel-body">
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">Business</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">English</a></li>
						<li><a href="#">Science</a></li>
						<li><a href="#">Art</a></li>
					</ul>
				</div>
			</div>  

			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title">Another Section</h3>
				</div>
				<div class="panel-body">
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">Section</a></li>
						<li><a href="#">Section</a></li>
					</ul>
				</div>
			</div>       
		</div>

        <div class="col-md-9">   
			<h1>Textbook Market</h1> 
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
				
				$tableName = "Item";	
				$sql = "select *from Item where title LIKE 'Sci%';";
				
				
				$stmt = sqlsrv_query($conn, $sql);
				while($row = sqlsrv_fetch_array($stmt)){
					echo"
					<tr>
						<td><input type='checkBox' name='index[]' value='10'></td>
						<td><image src='images/science/$row[2].jpg'></td>
						<td>$row[0]</td>
						<td>$row[1]</td>
						<td><button><a href='#'><img src='images/edit16.png' > Add to cart</a><button></td>
					</tr>";
				}
			?>	
		</div>
         
	</div>  <!-- end container -->


<?php
	include('footer.php')
?> 
  </body>
</html>
