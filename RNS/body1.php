<html>

<table height=0px>
<td>
<tr>
</td>
</tr>
<table  width=980px align=center bgcolor=3a4eff >
    <tr>
	   <td>
	   <div id="nav">
<h3><center><font color=green> WELCOME </font></h3></center>
<?php


echo $_SESSION["user"];
?>
<br><br>
<a href="poseq.php"  style="text-decoration:none" ><font color=red>POSE QUESTION</a></font><br><br>
<?php
include('stat.php');
?>
<br>
<img src="images/duck.jpg" alt=duck></img>
<br>NO OF MEMBERS ONLINE : 



<?php
if(!isset($_COOKIE['user'])) {
      echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
      echo "Cookie '" . 'user'. "' is set!<br>";
      echo "Value is: " . $_COOKIE['user'];
}
?>




</div>


<div id="section">
<h3><font color=green>NOTIFICATIONS</h3></font>
<p>

</p>
</div>
</tr>
</td>
</table>
</body> 
 <style>
/* mouse over link */
a:hover {
    color: #FF00FF;
}
#nav {
    line-height:15px;
    background-color:#eeeeee;
    height:360px;
    width:300px;
    float:left;
    padding:5px;
}
#section {
    width:600px;
	height:350px;
	align=justify;
    float:left;
    padding:10px;
}

</style>

