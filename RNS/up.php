<?php 
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";
$dberror="oops could't been able connect to the server";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die(header("Location: http:/RNSIT/sign.php"));
 
   $qno=$_GET['qnop'];
       if($dbconn==true)
  {  
    $sql = "UPDATE connect SET upvote=upvote+1 WHERE qno='$qno'";

   if ($dbconn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $dbconn->error;
    }
    
 }  
	  
 
?>