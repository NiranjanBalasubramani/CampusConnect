<?php
// Start the session
session_start();
// Set session variables
$_SESSION["fav"] = "green";
$_SESSION["favanimal"] = "cat";
echo $_SESSION['fav'];
?>