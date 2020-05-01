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
  </head>
  <body>
<?php
	include('header.php');
?>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<img style="width: 40%;" src="images/shot pict/redbirdISU.jpg" alt="redbird">
				</div>
				<div class="col-md-9">
					<form action="register validation.php" method="POST" role="form" class="form-horizontal" >
						<div class="page-header">
							<h2>Register Account</h2>
							<p>If you already have an account with us, please login at the login page.</p>   
						</div>
						
						<div class="form-group">
							<label for="email" class="col-md-3 control-label">Email</label>
							<div class="col-md-9">
								<input type="email" class="form-control" name="email" />
							</div>
						</div>
							
						<div class="form-group">
							<label for="name" class="col-md-3 control-label">Name</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="name" />
							</div>
						</div>
		
						<div class="form-group">
							<label for="address" class="col-md-3 control-label">Address</label>
							<div class="col-md-9">
								<input type="text" class="form-control" name="address"/>
							</div>
						</div>
							
						<div class="form-group">
							<label for="password1" class="col-md-3 control-label">Password</label>
							<div class="col-md-9">
								<input type="password" class="form-control" name="password1"/>
							</div>
						</div>
							
						<div class="form-group">
							<label for="password2" class="col-md-3 control-label">Password Confirm</label>
							<div class="col-md-9">
								<input type="password" class="form-control" name="password2"/>
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
			</div>
        </div>
<?php
	include('footer.php');	
?>
  </body>
</html>
