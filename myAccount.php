<!-- My Account webpage -->
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
  <main>
   <div class="container"> 
    <section class="results">
    
    <table>
      <caption class="results__caption">Account</caption>
      <tr>
        <td class="results__label">First Name </td>    
        <td class="results__value"> <?php echo $_POST["firstName"] ?></td> 
      </tr>
	  <tr>
        <td class="results__label">Last Name </td>    
        <td class="results__value"> <?php echo $_POST["lastName"] ?></td> 
      </tr>
	  <tr>
        <td class="results__label">Address1 </td>    
        <td class="results__value"> <?php echo $_POST["address1"] ?></td> 
      </tr>
      <tr>
        <td class="results__label">Address2 </td>    
        <td class="results__value"><?php echo $_POST["address2"]; ?></td> 
      </tr>
      <tr>
        <td class="results__label">City </td>    
        <td class="results__value"><?php echo $_POST['city'] ?></td> 
      </tr>
	  <tr>
        <td class="results__label">State </td>    
        <td class="results__value"><?php echo $_POST['state'] ?></td> 
      </tr>
	  <tr>
        <td class="results__label">Zip Code </td>    
        <td class="results__value"><?php echo $_POST['zipCode'] ?></td> 
      </tr>
      <tr>
        <td class="results__label">Email </td>    
        <td class="results__value"><?php echo $_POST['emailAddress'] ?></td> 
      </tr>
             
    </table>
	</section>
  </div>
  </div>
<?php
	include('footer.php')
?>
  </body>
            

