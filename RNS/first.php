<?php
session_start();

if($_SESSION["user"] == 'nakul')
{
  include('header.php');
  include('auto.php');
  include('body.php');
  include('footer.php');
}
else
 header("Location: http:/RNSIT/secure.php");

?>