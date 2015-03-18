<html>
<body bgcolor=gray>
<?php
include('header.php');
?>


<center>
<table width=980px bgcolor=0066cc >
<td><br>
<h3><center>A Confirmation Code is sent your email id. Please enter that code.</h3></center>


<form action="resetp.php" method="GET">
<center>
<table width=500px bgcolor=0066cc >
<td><br>
<input type="hidden" value="$usn" name="usna"  >
<br><br>CONFIRMATION CODE &nbsp&nbsp&nbsp: &nbsp &nbsp<input type="text" value="ENTER CODE " name="ccode" pattern="(.){4,6}"  align="right" required/>
<br><br>PASSWORD &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp&nbsp: &nbsp&nbsp <input type="password" value="" name="pass" pattern="(.){6,10}" align="right" required/>
<pre>                          min of 6 and max of 10 character</pre>
CONFIRM PASSWORD &nbsp &nbsp&nbsp&nbsp: &nbsp &nbsp<input type="password" value="" name="cpass"  pattern="(.){6,10}" align="right" required/>
<br><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp
<input type="submit" name="submit" value="SIGN IN"></center></center>
</td>
</table>
</td>
</table>

</body>
</html>