<html>
<body bgcolor=gray>
<?php
include('header.php');
?>
<?php $dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";
$dberror="oops could't been able connect to the server";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die(header("Location: http:/RNSIT/sign.php"));
 
   $ccode=$_GET['ccode'];  
   $pass=$_GET['pass'];
   $cpass=$_GET['cpass'];
   if($pass==$cpass)
   {
       if($dbconn==true) 
      {   
           //echo "we have sucessfully loged on to the server","<br>";
          $dbquery="SELECT count(*) FROM studentlogin
			  where ccode='$ccode'
	      ";
	     $dbfetch=mysqli_query($dbconn,$dbquery);
	     if($dbfetch==false) echo $dberror;
		 $row=mysqli_fetch_assoc($dbfetch);
		 
		 if($row['count(*)']==1)
	     {  
		    $dbquery="SELECT * FROM studentlogin
			  where ccode='$ccode'";
		   $dbfetch=mysqli_query($dbconn,$dbquery);
	       if($dbfetch==false) echo $dberror;
		   $row=mysqli_fetch_assoc($dbfetch);
		  
           $usn=$row['usn'];
		   
            $sql = "UPDATE studentlogin SET password='$pass' WHERE usn='$usn'";

          if ($dbconn->query($sql) === TRUE) {
            echo "Record updated successfully";
          } else {
          echo "Error updating record: " . $dbconn->error;
          }
         	
	     }
		 else
		  header("Location: http:/RNSIT/pop4.php");
	    $dbconn->close();
	  }

     } 
	  else
       header("Location: http:/RNSIT/pop5.php");
    
   
   $cookie_name = "user";
   $cookie_value = $usn;
   setcookie($cookie_name, $cookie_value, time()+30000000,'/'); // 86400 = 1 day
   header("Location: http://localhost/RNSIT/secure.php");
	  
 
?>