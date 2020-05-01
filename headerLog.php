<header>
   <div id="topHeaderRow" >
      <div class="container" >
         <nav class="navbar navbar-inverse " role="navigation" >
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
               <p class="navbar-text">Welcome to <strong>ISU Textbook Market</strong></p>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse pull-right">
				<ul class="nav navbar-nav">
					<li><a href="mainLog.php"><span class="glyphicon glyphicon-home"></span> Homepage</a></li>
					<li><a href="myAccount.php"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
					<li><a href="shoppingCart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a></li>
               <li><a href="main.php"><span class="glyphicon glyphicon-shopping-cart"></span> Log out</a></li>                      
				</ul>
            <?php 
               $email=$_SESSION["email"];
               $_SESSION["email"]=$email;
            ?>
            </div>
         </nav>
      </div>
	  
	  <div style="height: 180px; display:flex; align-items:center; justify-content:center;">
		<img style="height: 50%;"src="images/shot pict/sealISU.png" alt="test">
	  </div>
   </div>  
  
</header>   