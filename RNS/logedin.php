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
 
   $usn=$_GET['usn'];  
   $pass=$_GET['pass'];
   
       if($dbconn==true) 
      {   
           //echo "we have sucessfully loged on to the server","<br>";
          $dbquery="SELECT password,firstname,lastname FROM studentlogin
			  where usn='$usn'
	      ";
	     $dbfetch=mysqli_query($dbconn,$dbquery);
		
	     if($dbfetch==false) echo $dberror;
		 $row=mysqli_fetch_assoc($dbfetch);//WHY ASSOC?
		 
		 if($row['password']===$pass)
	     {  
		    session_start();
			$_SESSION["user"] = $usn;
			$_SESSION["fname"] = $row['firstname'];
			$_SESSION["lname"] = $row['lastname'];
			$cookie_name = "user";
            $cookie_value = $usn;
            setcookie($cookie_name, $cookie_value, time()+30000000,'/'); // 86400 = 1 day
		   header("Location: http:/RNSIT/secure.php");
	       
	     }
		 else
           header("Location: http:/RNSIT/pop6.php");

     } 
	  else
       header("Location: http:/RNSIT/first.php");
	   
    $dbconn->close();
   
   //header("Location: http://localhost/RNSIT/logedin.php");
	  
 
?>