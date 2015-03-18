<html>
<head>
<style>

.form-signin
{
max-width: 330px;
padding: 15px;
margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
margin-bottom: 10px;
}
.form-signin .checkbox
{
font-weight: normal;
}
.form-signin .form-control
{
position: relative;
font-size: 16px;
height: auto;
padding: 10px;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
.form-signin .form-control:focus
{
z-index: 2;
}
.form-signin input[type="text"]
{
margin-bottom: -1px;
border-bottom-left-radius: 0;
border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
margin-bottom: 10px;
border-top-left-radius: 0;
border-top-right-radius: 0;
}
.account-wall
{
margin-top: 20px;
padding: 40px 0px 20px 0px;
background-color: #f7f7f7;
-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
color: #555;
font-size: 18px;
font-weight: 400;
display: block;
}
.profile-img
{
width: 96px;
height: 96px;
margin: 0 auto 10px;
display: block;
-moz-border-radius: 50%;
-webkit-border-radius: 50%;
border-radius: 50%;
}
.need-help
{
margin-top: 10px;
}
.new-account
{
display: block;
margin-top: 10px;
} 

</style>
</head> 
<body>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-sm-4 col-md-4 ">

<div class="account-wall">
<h1 class="text-center login-title">Sign in </h1>
<img class="profile-img" src="images/login.jpg"
alt="">
<form role="form" class="form-signin" action="logedin.php" method="GET">
<input type="text" class="form-control" name="usn" placeholder="1RN12XXXXX" required>
<input type="password" class="form-control" name="pass" placeholder="Password" required>
<button class="btn btn-lg btn-primary btn-block" type="submit">
Sign in</button>
<label class="checkbox pull-left">
&nbsp&nbsp&nbsp&nbsp&nbsp <input type="checkbox" value="remember-me">
Remember me
</label>
<a href="rpass.php" class="pull-right need-help">forgot password? </a><span class="clearfix"></span>
</form>

<a href="sign.php" class="text-center new-account">Create an account </a>			
         <img src="images/duck.jpg" alt=duck></img>
         <br>&nbsp&nbsp&nbsp&nbsp&nbspNO OF MEMBERS ONLINE : 
		 
<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";
$dberror="oops could't been able connect to the server";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die();
 
       if($dbconn==true) 
      {   

          $dbquery="SELECT count(*) FROM studentlogin
			  where chon >= NOW() - 300
	      ";
	     $dbfetch=mysqli_query($dbconn,$dbquery);
	     if($dbfetch==false) echo $dberror;
		 $row=mysqli_fetch_assoc($dbfetch);
		 
		echo $row['count(*)'];
		  
     }
 
?>
</div>
  </div>
  
  <div class="col-lg-8 col-md-8 col-sm-8 ">
   <div class="well">
<h3><font color=green>NOTIFICATIONS</h3></font>
<p>
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
Bootstrap provides custom events for most plugins' unique actions. Generally, 
</p>
</div>
   </div>
    
	 </div>
	 </div>



	


</body>
</html>


