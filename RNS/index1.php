<?php
// Start the session
session_start();
// Set session variables
$_SESSION["user"] = "nakul";

?>
<html>
<body>

<?php

if(!isset($_COOKIE['user'])) {
    header("Location: http:/RNSIT/first.php");
} else {
    
	$_SESSION["user"] = $_COOKIE[$cookie_name];
	header("Location: http:/RNSIT/first.php");
}
?>

</body>
</html> 