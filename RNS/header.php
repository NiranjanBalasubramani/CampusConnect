<html>
<head>
<style>
.gray{
 background-color: #ccc;
 padding :20px;
 }

@media (max-width: 979px) {
   .img { 
      display: none;
   }
   
} 

 </style>
</head> 
<body>

<?php
if(isset($_COOKIE['user'])) 
{	
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="login";
$dberror="oops could't been able connect to the server";
$dbconn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die();
 
       if($dbconn==true) 
      {   
          
		    $usn=$_COOKIE["user"];
            $sql = "UPDATE studentlogin SET chon=now() WHERE usn='$usn'";
			
	  }
	    if ($dbconn->query($sql) === TRUE) {
            //echo "Record updated successfully";
          } else {
          //echo "Error updating record: " . $dbconn->error;
          }
	}		
?>  
   <header>  
      <div class="gray">
	  <div class="container">
       <div class="well">
         <center> <img src="images/logo.jpg" height=118px alt="R.N.S. INSTITUTE OF TECNOLOGY"><img src="images/header.jpg" class="img" alt="R.N.S. INSTIOTUTE OF TECNOLOGY">
         <span class="containerdiv visible-sm visible-xs hidden-md hidden-lg" src="images/header.jpg"><br>R.N.S. INSTITUTE OF TECNOLOGY</span>
		 </center> 
       </div>
	   </div>
    </div>
   </header> 


</body>

</html>
