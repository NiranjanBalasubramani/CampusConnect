<?php
$dp=$_GET['department'];  
$txt=$_GET['question'];
$smail=$_GET['smail'];

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
		 
		   $qno=$row['count(*)']+1;
		   mkdir("connect/$dp/qus$qno");
		
	   
		  
		   
           $usn=$_COOKIE['user'];
          
           $sql = "INSERT INTO connect(usn)
           VALUES ('$usn')";
		   if ($dbconn->query($sql) === TRUE) 
			{
              echo "sucess";
            }  
	        else 
			{
             echo "error ";
            }
	  }

$dbconn->close();

$myfile = fopen("connect/$dp/qus$qno/qus.txt", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
fclose($myfile);
?> 