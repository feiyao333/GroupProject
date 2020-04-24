<!-- Checkout wegpage -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISU Texbook Market</title>
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
  <form class="form"  id="checkout" action="payment.php" method="POST">
  <div class="form-group">
							<label for="paymentOption" class="col-md-3 control-label">Choose Payment</label>
							<div class="col-md-9">
<select name="paymentOption">
  <option value="1">Visa</option>
  <option value="2">Mastercard</option>
  <option value="3">Paypal</option>
</select>
</div>
</div>
          <div class="form-group">
				<label for="accountInfo" class="col-md-3 control-label">Account Number</label>
				<div class="col-md-9">
				<input type="text" class="form-control" name="accountInfo">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-offset-9 col-md-3">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div> 
</div>
</div>
</form>
<?php
	include('footer.php')
?>
  </body>
 </html>
            


