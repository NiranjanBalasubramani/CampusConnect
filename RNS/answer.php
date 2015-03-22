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
include('links1.php');
 session_start();
 if(!isset($_COOKIE['user'])) {
    header("Location: /index.php");
}
?>
<body>
<div class="col-lg-8 col-md-8 col-sm-8 col-sm-offset-2 col-md-offset-3 col-lg-offset-2">
<div class="well">
	 <fieldset >
		    <form action="submita.php" method="GET"><br>
		echo 
		$myfile = fopen("connect/cs/qus$qno/qus.txt", "r") or die("Unable to open file!");
		file_get_contents("connect/cs/qus$qno/qus.txt");
        fclose($myfile);
			What's your Answer? <br><br>

		    <textarea name="question" style="width: 250px; height: 150px;" placeholder="enter your QUESTION here...max in 140 characters" required></textarea><br><br>
			<input   type="hidden" value="<?php echo $usn ?>" name="usn">
			<input   type="hidden" value="<?php echo $qno ?>" name="qno">
			
			<input type="submit" name="submit" value="Submit"/><br>
		</form>
	</fieldset >
</div>
</div>
	
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>