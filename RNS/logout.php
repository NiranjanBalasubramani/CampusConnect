<?php
// set the expiration date to one hour ago
  $cookie_name = "user";
  setcookie($cookie_name, "", time()-3600,'/'); 
   header("Location:/index.php");


?>
