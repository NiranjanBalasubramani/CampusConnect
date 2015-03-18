<html>
<body bgcolor=666666>
<?php
include('header.php');
?>
<table height=1px >
<td>
</td>
</table>
<center>
<table width=980px bgcolor=0066cc >
<td>
<form action="signup.php" method="GET">
<center>
<table width=500px bgcolor=whiter >
<td><br>
<input type="hidden" value="sign" name="svalue" placeholder="Last name" align="right"/>
FIRST NAME &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp <input type="text" value="" name="fname" placeholder="First name"  pattern="(.){3,25}" align="right" required/>
<br><br>LAST NAME &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : &nbsp &nbsp &nbsp <input type="text" value="" name="lname" placeholder="Last name" align="right"/>
<br><br>USN &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :&nbsp&nbsp&nbsp&nbsp &nbsp <input type="text" value="" name="usn" placeholder="1RNXXXXXXX"  pattern="1[R][N]1[2-6][CI][S][0-9][0-9][0-9]" align="right" required/>
<br><br>EMAIL ID &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp: &nbsp &nbsp &nbsp <input type="email" value="" name="email" placeholder="your@email.com"  align="right" required/>
<!--<br><br>PASSWORD &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp: &nbsp &nbsp &nbsp <input type="password" value="" name="name" placeholder="PASSWORD" align="right" required/>
<br><br>CONFIRM PASSWORD &nbsp &nbsp &nbsp: &nbsp &nbsp &nbsp <input type="password" value="" name="name" align="right" required/>-->
<br><br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp
<input type="submit" name="submit" value="NEXT >"></center></center>
</td>
</table>
</td>
</table>

</body>
</html>