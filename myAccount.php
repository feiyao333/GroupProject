<?php
session_start();
?>

<!-- My Account webpage -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISU Textbook Market</title>
    <link href="bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">
    <link href="IT353group.css" rel="stylesheet">
	<script type="text/javascript" src="IT353 project.js"></script>
  </head>
  <body>
<?php
	include('headerLog.php');
?>
  		<div class="container">
		  	
		  <div class="row">
				<div class="col-md-3">
					<img style="width: 40%;" src="images/shot pict/redbirdISU.jpg" alt="redbird">
				</div>
				<div class="col-md-5">
					<table class="table table-bordered" style="	font-weight: bold;font-size: 15px;">
						<caption class="results__caption">Account</caption>
						<tr>
						<br/>
						<br/>
						</tr>
						<tr>
							<td >Email</td>    
							<td > <?php echo $_SESSION["email"] ;?></td> 
						</tr>
						<tr>
						</tr>
						<tr>
							<td >Name</td>    
							<td > <?php echo $_SESSION["name"] ;?></td> 
						</tr>
						<tr>
						</tr>
						<tr>
							<td >Address </td>    
							<td > <?php echo $_SESSION["add"]; ?></td> 
						</tr>
					</table>
				</div>
				
				<div class="col-md-4">
					<section class="results">
						<br/>
						<br/>
						<p><strong>My Item</strong></p>
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
							
							$id=$_SESSION["email"];
							$tableName = "Item";	
							$sql = "select * from Item where Item.own='$id';";
							
							$stmt = sqlsrv_query($conn, $sql);
							while($row = sqlsrv_fetch_array($stmt)){
								echo "<div class='panel panel-default'>
									<div class='panel-body'>
										<div class='card text-center' >";
											$name= $row[0];
											$num= $row[2];
											if(strpos($name,'Bus') !== false){ 
												$package='business';
											}
											if(strpos($name,'Tec') !== false){ 
												$package='technology';
											}
											if(strpos($name,'Eng') !== false){ 
												$package='english';
											}
											if(strpos($name,'Sci') !== false){ 
												$package='science';
											}
											if(strpos($name,'Art') !== false){ 
												$package='art';
											}
											echo"<tr><td><img src='images/$package/$num.jpg' class='pic'></td>";
										echo"</div>";
										echo "<td>" . $name . "</td>
									</div>
								</div>";
							}
						?>
					</section>
				</div>
			</div>

			<div class = "row">
					<form action="insert validation.php" method="POST" role="form" class="form-horizontal" >
						<div class="page-header">
							<h2>Selling things</h2>
						</div>
						
						<div class="form-group">
							<label for="title" class="col-md-3 control-label">Title</label>
							<div class="col-md-9">
								<input type="title" class="form-control" name="title" />
							</div>
						</div>
							
						<div class="form-group">
							<label for="price" class="col-md-3 control-label">Price</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="price" />
							</div>
						</div>
		
						<div class="form-group">
							<label for="number" class="col-md-3 control-label">Number</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="number"/>
							</div>
						</div>
  
						<div class="form-group">
							<div class="col-md-offset-3 col-md-9">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="privacy" > I agree to the policy</a>
									</label>
								</div>
							</div>
						</div>     

						<div class="form__box">
							<div class="col-md-offset-3 col-md-9">
								<input type="submit" class="form__btn"> <input type="reset" value="Clear Form" class="form__btn">
							</div>
						</div>
					</form>
			</div>
<?php
	include('footer.php');
?>
  </body>
  </html>  