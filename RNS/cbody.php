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
	  if($dbconn==true) 
      {   
           //echo "we have sucessfully loged on to the server","<br>";
           $dbquery="SELECT * FROM connect
			  
	        ";
	       $dbfetch=mysqli_query($dbconn,$dbquery);
	       if($dbfetch==false) echo $dberror;
		   
		   
	 }
		   
for($i=1;$i<$n;$i++){
$myfile = fopen("connect/cs/qus$i/qus.txt", "r") or die("Unable to open file!");
echo"<table height=0px>
<td>
<tr>
</td>
</tr>
</table>
<table  width=980px align=center bgcolor=3a4eff >
    <tr>
	   <td>
	    <div id='nav'>
<h3><center><font color=green> posed by</font></h3></center>";

$row=mysqli_fetch_assoc($dbfetch);
		 
		   $usn=$row['usn'];
		   $qno=$row['qno'];
		   echo $usn;



echo"</div>


<div id='section'>
<h3><font color=green>question</h3></font>
<p>";
echo file_get_contents("connect/cs/qus$i/qus.txt");
fclose($myfile);
echo"</p>
</div>
	   <table  width=980px height=40px align=center bgcolor=3a4eff >
        <tr>
	     <td>

<a href='up.php?$qno' style='text-decoration:none'><div id='part1'>
<h3><font color=green>upvote</h3></font>
<p>
</p>
</div></a>

<div id='space'>
<p>
</p>
</div>


<a href='down.php?$qno' style='text-decoration:none'><div id='part1'>
<h3><font color=green>downvote</h3></font>
<p>
</p>
</div></a>


<div id='space'>
<p>
</p>
</div>


<div id='part2'>
<h3><font color=green>answered by</h3></font>
<p>
</p>
</div>


<div id='space'>
<p>
</p>
</div>


<a href='posta.php?$qno' style='text-decoration:none'><div id='part1'>
<h3><font color=green>post answer</h3></font>
<p>
</p>
</div></a>

<div id='space'>
<p>
</p>
</div>


<a href='view.php?qnop='$qno'' style='text-decoration:none'><div id='part1'>
<h3><font color=green>view answers</h3></font>
<p>
</p>
</div></a>
		 </td>
</tr>
</table>
</td>
</tr>
</table>
<style>
/* mouse over link */
a:hover {
    color: #FF00FF;
}
#nav {
    line-height:15px;
    background-color:#eeeeee;
    height:300px;
    width:250px;
    float:left;
    padding:5px;
}
#section {
    width:600px;
	height:300px;
	align=justify;
    float:left;
    padding:10px;
}
#part1 {
    line-height:15px;
    background-color:#eeeeee;
    height:40px;
    width:150px;
    float:left;
    padding:5px;
}
#part2 {
    line-height:15px;
    background-color:#eeeeee;
    height:40px;
    width:320px;
    float:left;
    padding:5px;
}
#space {
    line-height:1px;
    background-color:#3a4eff;
    height:40px;
    width:1px;
    float:left;
    padding:0px;
}

</style>";}
?>