<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <script type="text/javascript">

      window.onload = function(){

           if ( document.getElementById('showModal') ){

               alert('Box'); //replace with your own handler

           }

      }
	  window.onload = function(){

           if ( document.getElementById('showModale') ){

               alert('Error in upload,Sorry, your file was not uploaded.Sorry, only JPG, JPEG, PNG & GIF files are allowed.Sorry, your file is too large.File is not an image.'); //replace with your own handler
           }

      }


   </script>
  </head>
    <body>
<?php
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
      ?>
         <input type="hidden" id="showModale" />
    <?php
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
   ?>
         <input type="hidden" id="showModale" />
    <?php
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
   ?>
         <input type="hidden" id="showModale" />
    <?php
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "JPG" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   ?>
         <input type="hidden" id="showModale" />
    <?php
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    ?>
         <input type="hidden" id="showModale" />
    <?php
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {?>
	
    <input type="hidden" id="showModal" />
        
  <?php  } else {?>
         <input type="hidden" id="showModale" />
    <?php }
}
?>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>