<?php $dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";
$dberror="oops could't been able connect to the server";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die(header("Location: http:/cc/sign.php"));
  
    $fname=$_GET['first_name'];  
    $lname=$_GET['last_name'];
    $usn=$_GET['usn'];
    $email=$_GET['email'];
	$pass=$_GET['password'];
	$cpass=$_GET['cpassword'];
	$loc=0;
    $ccode=rand(1000,9999);
  if($pass==$cpass)
  {
   if($dbconn==true)
   {  
    $sql = "INSERT INTO studentlogin(firstname,lastname,usn,email,password)
VALUES ('$fname','$lname','$usn','$email','$pass')";
	if ($dbconn->query($sql) === TRUE) 
	{
       $cookie_name = "user";
       $cookie_value = $usn;
       setcookie($cookie_name, $cookie_value, time()+30000000,'/'); // 86400 = 1 day
	   header("Location: http:/cc/index.php");
    }  
	else 
	{
       header("Location: http:/cc/errorsame details.php");
    }

    $dbconn->close();
   }
   else
    header("Location: http:/cc/sign.php");
 }
 else
   header("Location: http:/cc/passeroor.php"); 
  
?>