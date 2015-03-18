<?php $dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";
$dberror="oops could't been able connect to the server";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die(header("Location: http:/RNSIT/sign.php"));
 
   $usn=$_GET['usn'];  
   $ccode=rand(1000,9999);
    if($dbconn==true)
  {  
    $sql = "UPDATE studentlogin SET ccode='$ccode' WHERE usn='$usn'";

   if ($dbconn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $dbconn->error;
    }
    
    $dbconn->close();
  
     header("Location: http:/RNSIT/rrcode.php");
  }
?>