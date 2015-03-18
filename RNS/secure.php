 <?php
 session_start();
 if(!isset($_COOKIE['user'])) {
    header("Location: /index1.php");
} else {
    
	$_SESSION["user"] = $_COOKIE['user'];
	
}
  include('header.php');
  include('auto.php');
  include('body1.php');
  include('footer.php');
  ?>