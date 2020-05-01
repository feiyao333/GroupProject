<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISU Textbook Market</title>
    <link href="bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
    <link href="IT353project.css" rel="stylesheet">	
	<script type="text/javascript" src="IT353 project.js"></script>
</head>
<body>
    <?php
    include('header.php')
    ?>

    <div class="container">
        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Categories</h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked">
						<li><a href="technology.php">Technology</a></li>
						<li><a href="english.php">English</a></li>
						<li><a href="business.php">Business</a></li>
						<li><a href="art.php">Art</a></li>
                    </ul>
                </div>
            </div>

           <div class="panel panel-danger">
				<div class="panel-heading">
				<h3 class="panel-title">Search by Title</h3>
				</div>
				<div class="panel-body">
					<ul class="nav nav-pills nav-stacked">
						<li><a href="Search.php">Search By Title</a></li>
						<li><a href="SearchPrice.php">Search By Price</a></li>
					</ul>
				</div>
			</div>       
		</div>

        <div class="col-md-9">
            <table class="table table-condensed">
			<caption><font color="#000000">Science Textbook</font></caption>

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
						<td><image src='images/science/$row[2].jpg' class='pic'></td>
						<td>$row[0]</td>
						<td>$row[1]</td>
						<td>$row[3]</td>
						<td><button><a href='#'><img src='images/edit16.png' > Add to cart</a></button></td>
					</tr>";
				}
			?>	
		  </tbody>		
	    </table>
        </div>
    </div>  <!-- end container -->
    <?php
    include('footer.php')
    ?>
    <script src="bootstrap-3.0.0/assets/js/jquery.js"></script>
    <script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>