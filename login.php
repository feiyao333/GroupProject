<!-- login webpage -->



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
			<div class="row">
				<div class="col-md-3">
					<img style="width: 100%;" src="images/shot pict/redbirdISU.jpg" alt="redbird">
				</div>
				<div class="col-md-9">
					<div class="page-header">
						<h2>Login Account</h2>
						<p>If you do not have an account with us, please register at the register page.</p>   
					</div>
					
					<form action="login validation.php" method="post">	
						<div class="form-group">
							<label for="email" class="col-md-3 control-label">Email</label>
							<div class="col-md-9">
								<input type="email" class="form-control" name="email">
							</div>
						</div>

						<div class="form-group">
							<label for="password1" class="col-md-3 control-label">Password</label>
							<div class="col-md-9">
								<input type="password" class="form-control" name="password1">
							</div>
						</div>
							
						<div class="form-group">
							<div class="col-md-offset-9 col-md-3">
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
						</div> 
					</form>
				</div>
			</div>
        </div>
<?php
	include('footer.php')
?>
  </body>



