<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    
  </head>
<?php
   include('header.php');
   include('links.php');
   
?>
<div class="well">
<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-lg-3 col-sm-offset-2 col-md-offset-3">
	<form role="form" action="signup.php" method="GET">
			<hr class="colorgraph">
			<div class="form-group">
				<input type="text" name="usn" id="usn" class="form-control input-lg" placeholder="USN" pattern="1[R][N]1[2-6][CI][S][0-9][0-9][0-9]" tabindex="3" required>
			</div>
			<hr class="colorgraph">
			
			<div class="container">
				<div class="col-xs-12 col-sm-8 col-md-6 col-lg-3"><input type="submit" value="SEND CONFIRMATION LINK" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
			</div>
	</form>
	</div>
</div>
</div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>