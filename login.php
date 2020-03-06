<!-- login webpage html -->
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
  <div>
<div class="container">
         <div class="row">
            <div class="col-md-8">
                <h1>Textbook Market</h1> 
                <h1>LOGIN</h1> 
               <form class="form"  id="loginForm" action="myAccount.php" method="POST">
					<fieldset class="form__panel">
                 
                   <label>Email address</label>
                   <input type="email" class="form__input form__input--large" name="email" value="">
                   </br>
                   <label>Password</label>
                   <input type="password" class="form__input form__input--large" name="password" > 
				   </br>
				   <input type="submit" class = "login" name="submit" >
                 </div>
            </div>
            </div>
  </div>
  </fieldset>
  </form>
  
<?php
	include('footer.php')
?>
  </body>



