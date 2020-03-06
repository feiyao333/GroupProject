<!-- Shopping Cart webpage html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISU Texbook Market</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.0.0/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="IT353group.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

   
</head>

<body>
<?php
	include('header.php')
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
			function outputCartRow($file, $product, $quantity, $price) {
				$amount = $quantity*$price;
		
				echo"<tr><td><img src='images/product/$file'></td>";
				echo "<td>" . $product . "</td>";
				echo "<td>" . $quantity . "</td>";
				echo "<td>" . number_format($price, 2) . "</td>";
				echo "<td>" . number_format($amount, 2) . "</td>";
				echo "<td> <button type='button' class='btn btn-primary' >Edit</button><button type='button' class='btn btn-primary' >Remove</button></td></tr>";
				return $amount;
			}
			
			$subtotal=0;
			$i=0;
			include('data.php');
			$subtotal += outputCartRow($file, $product, $quantity, $price);
			$subtotal += outputCartRow($file, $product, $quantity, $price);
			$subtotal += outputCartRow($file, $product, $quantity, $price);
			for(;$i<$n;$i++){
				$subtotal += outputCartRow($file[i], $product[i], $quantity[i], $price[i]);
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
            


