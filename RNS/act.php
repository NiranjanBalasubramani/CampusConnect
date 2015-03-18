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
		   
for($i=1;$i<$n;$i++){
$myfile = fopen("connect/cs/qus$i/qus.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
echo "<td><a href='update$i.php'>view</a></td>";}
?>