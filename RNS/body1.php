<!DOCTYPE html>
<html lang="en">
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
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-sm-4 col-md-4 ">

<div class="well">
<h3><center><font color=green> WELCOME </font></h3></center>
<?php
echo $_SESSION["user"];
?>
<br><br>
<a href="poseq.php"  style="text-decoration:none" ><font color=red>POSE QUESTION</a></font><br><br>
<?php
include('stat.php');
?>
<br>
<img src="images/duck.jpg" alt=duck></img>
<br>NO OF MEMBERS ONLINE : 

<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";
$dberror="oops could't been able connect to the server";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die();
 
       if($dbconn==true) 
      {   

          $dbquery="SELECT count(*) FROM studentlogin
			  where chon >= NOW() - 300
	      ";
	     $dbfetch=mysqli_query($dbconn,$dbquery);
	     if($dbfetch==false) echo $dberror;
		 $row=mysqli_fetch_assoc($dbfetch);
		 
		echo $row['count(*)'];
		  
     }
 
?>
</div>
  </div>
  
  <div class="col-lg-8 col-md-8 col-sm-8 ">
   <div class="well">
<h3><font color=green>NOTIFICATIONS</h3></font>
<p>
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 

</p>
</div>
   </div>
    
	 </div>
	 </div>



	


</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>




