<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";
$dberror="oops could't been able connect to the server";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die(header("Location: http:/RNSIT/poseq.php"));

      if($dbconn==true) 
      {   
           //echo "we have sucessfully loged on to the server","<br>";
           $dbquery="SELECT count(*) FROM connect
			  
	        ";
	       $dbfetch=mysqli_query($dbconn,$dbquery);
	       if($dbfetch==false) echo $dberror;
		   $row=mysqli_fetch_assoc($dbfetch);
		 
		   $n=$row['count(*)']+1;
		   
	 }
		   
for($i=1;$i<$n;$i++){
$myfile = fopen("connect/cs/qus$i/qus.txt", "r") or die("Unable to open file!");
echo"<table  width=980px align=center bgcolor=3a4eff >
    <tr>
	   <td>
	   <div id='nav'>
<h3><center><font color=green> WELCOME </font></h3></center>







</div>


<div id='section'>
<h3><font color=green>NOTIFICATIONS</h3></font>
<p>

</p>
</div>
</tr>
</td>
</table>
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

</style>";
echo fgets($myfile);
fclose($myfile);
echo "<td><a href='update$i.php'>view</a></td>";}
?>