<!-- Search -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISU Textbook Market</title>
   
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
					<img style="width: 40%;" src="images/shot pict/redbirdISU.jpg" alt="redbird">
				</div>
                <h1>Search by Title</h1> 
                
<form class="form"  id="searchForm" action="searchResults.php" method="POST">
   <fieldset class="form__panel">
</br>
</br>
<label>enter title</label>
<input type="text" class="textbox" name="bookSearch" value="">
</br>
</br>
<button type="submit" class="btn btn-primary">Submit</button>
</fieldset>
</form>
</div>
</div>
</div>
<?php
	include('footer.php')
?>
  </body>
  </html>