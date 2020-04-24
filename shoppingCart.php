<?php
session_start();
//$mail=$_SESSION["email"];
?>

<!-- Shopping Cart webpage html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISU Textbook Market</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="IT353group.css" rel="stylesheet">
	<script type="text/javascript" src="IT353 project.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->   
</head>

<body>
<?php
	include('header.php');	
?>
	<div class="container">
		<div class="page-header">
			<h2>View Cart</h2>
		</div>
		<table class="table table-condensed">
			<tr>
            <th>Image</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
			<th></th>
			</tr>
		
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
			
			$id='1@q';
			$tableName = "Item";	
			$sql = "select * from Account join Cart on Account.EMAIL=Cart.EMAIL join Item on Cart.title=Item.title where Account.EMAIL='$id';";
			$subtotal=0;
			$i=0;
			$quantity=1;
			$taxRate=.01;
			
			$stmt = sqlsrv_query($conn, $sql);
			while($row = sqlsrv_fetch_array($stmt)){
				$name= $row[6];
				$price= $row[9];
				$num= $row[10];
				$quantity=$row[7];
				
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
		
				$subtotal += outputCartRow($package, $num, $name, $quantity, $price);
			}

			function outputCartRow($package, $file, $product, $quantity, $price) {
				$amount = $quantity*$price;
				
		
				echo"<tr><td><img src='images/$package/$file.jpg' class='pic'></td>";
				echo "<td>" . $product . "</td>";
				echo "<td>" . $quantity . "</td>";
				echo "<td>" . number_format($price, 2) . "</td>";
				echo "<td>" . number_format($amount, 2) . "</td>";
				echo "<td> <button type='button' class='btn btn-primary' >Remove</button></td></tr>";
				return $amount;
			}
		
			$tax = $subtotal*$taxRate;
			$grandTotal = $subtotal + $tax;
			
			echo "<tr class='success strong'>
					<td colspan='4' class='moveRight'>Subtotal</td>
					<td>" . number_format($subtotal, 2) . "</td>
				</tr>";
			
			echo "<tr class='active strong'>
					<td colspan='4' class='moveRight'>Tax</td>
					<td>" . number_format($tax, 2) . "</td>
				</tr>";
				
			echo "<tr class='warning strong text-danger'>
					<td colspan='4' class='moveRight'>Grand Total</td>
					<td>" . number_format($grandTotal, 2) . "</td>
				</tr>";				
		?>

			<tr>
				<td colspan="5" class="moveRight"><a href="main.php"><button type="button" class="btn btn-primary" >Continue Shopping</button></a></td>
				<td><a href="checkout.php"><button type="button" class="btn btn-success" >Checkout</button></a></td>
			</tr>
		</table>  
	</div> 
  
  
  

<?php
	include('footer.php')
?>
  </body>
            


