 <?php
 session_start();
 if(!isset($_COOKIE['user'])) {
    header("Location: /index.php");
} else {
    
	$_SESSION["user"] = $_COOKIE['user'];
	
}
  include('header.php');
  include('links1.php');
  include('body1.php');
  include('footer.php');
  ?>