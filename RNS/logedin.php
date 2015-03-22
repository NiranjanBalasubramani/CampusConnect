<?php $dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";
$dberror="oops could't been able connect to the server";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die(header("Location: http:/cc/sign.php"));
 
   $usn=$_GET['usn'];  
   $pass=$_GET['pass'];
   $one=1;
   
       if($dbconn==true) 
      {   
           //echo "we have sucessfully loged on to the server","<br>";
          $dbquery="SELECT password,firstname,lastname,reg FROM studentlogin
			  where usn='$usn'
	      ";
	     $dbfetch=mysqli_query($dbconn,$dbquery);
	     if($dbfetch==false) echo $dberror;
		 $row=mysqli_fetch_assoc($dbfetch);
		 
		 if($row['password']===$pass)
	     { 
		 if($row['reg']==$one)
		  { 
		    session_start();
			$_SESSION["user"] = $usn;
			$_SESSION["fname"] = $row['firstname'];
			$_SESSION["lname"] = $row['lastname'];
			$cookie_name = "user";
            $cookie_value = $usn;
            setcookie($cookie_name, $cookie_value, time()+30000000,'/'); // 86400 = 1 day
		   header("Location: http:/cc/secure.php");
		  }
		  else
		  header("Location: http:/RNSIT/nor.php");
	       
	     }
		 else
           header("Location: http:/RNSIT/uop.php");

     } 
	 else
       header("Location: http:/cc/index.php");
	   
    $dbconn->close();
   
   
	  
 
?>