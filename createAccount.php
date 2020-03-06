<!-- Create Account webpage html -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISU Texbook Market</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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
  <div>
<div class="container">
         <div class="row">
            <div class="col-md-8">
                <h1>Textbook Market</h1> 
                <h1>Create Account</h1> 
                <form class="form"  id="createAcountForm" action="myAccount.php" method="POST">
			   
                   <label>First Name</label>
                   <input type="text" class="form__input form__input--large" name="firstName" value="">
				   </br>
                   <label>Last Name</label>
                   <input type="text" class="form__input form__input--large" name="lastName" value="">
				    </br>
                   <label>Address</label>
                   <input type="text" class="form__input form__input--large" name="address1" value="">
				   </br>
				  <label>Address</label>
                   <input type="text" class="form__input form__input--large" name="address2" value="">
				   </br>
				   
				   <label>City</label>
                   <input type="text" class="form__input form__input--large" name="state" value="">
                  </br>
				   
                   <label>State</label>
                   <input type="text" class="form__input form__input--large" name="state" value="">
                  </br>
				  
				  <label>Zip Code</label>
                   <input type="text" class="form__input form__input--large" name="zipcode" value="">
                  </br>
				  
                   <label>Email address</label>
                   <input type="email" class="form__input form__input--large" name="emailAdress" value="">
                   </br>
				   
                   <label>Password</label>
                   <input type="password" class="form__input form__input--large" name="password" > 
				   </br>
				   
				   <label>Re-enter Password</label>
                   <input type="password" class="form__input form__input--large" name="password" > 
				   </br>
				    <div class="form__box"> 
					<input type="submit" class="form__btn"> <input type="reset" value="Clear Form" class="form__btn">      
					</div>
                 </div>
            </div>
            </div>
  </div>
<?php
	include('footer.php')
?>
  </body>



