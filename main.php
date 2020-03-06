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
        <div class="col-md-3">      
			<div class="panel panel-info">
				<div class="panel-heading">
					<h3 class="panel-title">Catagories</h3>
				</div>
				<div class="panel-body">
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">Business</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">English</a></li>
						<li><a href="#">Science</a></li>
						<li><a href="#">Art</a></li>
					</ul>
				</div>
			</div>  

			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title">Another Section</h3>
				</div>
				<div class="panel-body">
					<ul class="nav nav-pills nav-stacked">
						<li><a href="#">Section</a></li>
						<li><a href="#">Section</a></li>
					</ul>
				</div>
			</div>       
		</div>



        <div class="col-md-9">   
			<h1>Textbook Market</h1> 
			<p><strong>content</strong></p>
		</div>
         
	</div>  <!-- end container -->


<?php
	include('footer.php')
?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.0.0/assets/js/jquery.js"></script>
    <script src="bootstrap-3.0.0/dist/js/bootstrap.min.js"></script>    
  </body>
</html>