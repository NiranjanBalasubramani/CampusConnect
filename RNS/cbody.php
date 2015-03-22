<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";
$dberror="oops could't been able connect to the server";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die(header("Location: http:/RNSIT/poseq.php"));

      if($dbconn==true) 
      {   
           //echo "we have sucessfully loged on to the server","<br>";
           $dbquery="SELECT count(*) FROM connect
			  
	        ";
	       $dbfetch=mysqli_query($dbconn,$dbquery);
	       if($dbfetch==false) echo $dberror;
		   $row=mysqli_fetch_assoc($dbfetch);
		 
		   $n=$row['count(*)']+1;
		   
	 }
	  if($dbconn==true) 
      {   
           //echo "we have sucessfully loged on to the server","<br>";
           $dbquery="SELECT * FROM connect
			  
	        ";
	       $dbfetch=mysqli_query($dbconn,$dbquery);
	       if($dbfetch==false) echo $dberror;
		   
		   
	 }
		   
for($i=1;$i<$n;$i++){
$myfile = fopen("connect/cs/qus$i/qus.txt", "r") or die("Unable to open file!");
?>

<div class="container">

<div class="row" >
<div class="container">
<div class=" col-lg-2 col-md-8 col-sm-8 ">
<div class="well">


<?php
$row=mysqli_fetch_assoc($dbfetch);
		 
		   $usn=$row['usn'];
		   $qno=$row['qno'];
		   echo $usn;
		
?>
<br><br>

<br><br>
</div>
</div> 
  <div class="col-lg-9 col-md-8 col-sm-8 ">
   <div class="well">
<h3><font color=green>NAME</h3></font>

<?php
echo file_get_contents("connect/cs/qus$i/qus.txt");
fclose($myfile);


?>

<br><br>
<div class="container " >
<div class="col-lg-2 col-xs-12 col-md-4">
<a class="btn btn-primary btn-block btn-md" href="answer.php?value=<?php echo $usn ?>?value=<?php echo $qno ?>">Answer</a></div>
<div class="col-lg-2 col-xs-12 col-md-4">
<a class="btn btn-primary btn-block btn-md" href="answers.php?value=$usn">View answer</a></div>
<div class="col-lg-2 col-xs-12 col-md-4">
<a class="btn btn-primary btn-block btn-md" href="upvote.php?value=$usn">UPVOTE</a></div>
<div class="col-lg-2 col-xs-12 col-md-4">
<a class="btn btn-primary btn-block btn-md" href="downvote.php?value=$usn">DOWNVOTE</a></div>
</div>

</div>
   </div>
   </div>
    
	 </div>
	 </div>
	 </div>
	 <?php
	 }
	 ?>



	


</body>
</html>
<?php
$x= " SELECT firstname,lastname from studentlogin where usn=$usn";
  $d1=mysqli_query($dbconn,$x);
	       if($d1==false) echo $dberror;
		   $ro1=mysqli_fetch_assoc($d1);
		   $f=$ro1['firstname'];
		   $l=$ro1['lastname'];
		 
		   echo $f;
?>