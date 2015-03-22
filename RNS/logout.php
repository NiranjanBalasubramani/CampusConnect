<?php

	
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";
$dberror="oops could't been able connect to the server";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die();
 
       if($dbconn==true) 
      {   
          
		    $usn=$_COOKIE["user"];
			
            $sql = "UPDATE studentlogin SET chon='now()-500' WHERE usn='$usn'";
			
	  }
	    if ($dbconn->query($sql) === TRUE) {
            //echo "Record updated successfully";
          } else {
          //echo "Error updating record: " . $dbconn->error;
          }
	

// set the expiration date to one hour ago
  $cookie_name = "user";
  setcookie($cookie_name, "", time()-3600,'/'); 
   header("Location:/cc/index.php");	
?>
