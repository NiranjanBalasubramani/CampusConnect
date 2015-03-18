<?php
$to='nakul.yadava@gmail.com';
$subject='testing sucess';
$message='finally got it';
$headers='From:akshayprasad008@gmail.com'."\r\n".
         'Reply-To:akshayprasad008@gmail.com'."\r\n".
		 'MIME-Version:1.0'."\r\n".
		 'Content-type:text/html; charset=iso-8859-1'."\r\n".
		 'X-Mailer: PHP/'. phpversion();
if(mail($to,$subject,$message,$headers))
   echo "sucess";
else
   echo "failure";
?>