<?php
include('header.php');
 session_start();
 if(!isset($_COOKIE['user'])) {
    header("Location: /index.php");
}
?>
<html>
	<head>
		<title>Pose Questions</title>
	</head>
	<body>
	<table>
     <tr>
	 <td>
	  </tr>
	 </td>
	 </table>
	<center>
	 <table  width=980px bgcolor=white>
     <tr>
	 <td>
	 <fieldset >
		<form action="submit.php" method="GET"><br>
	    Select the Department: <br><br>
            <input type="radio" name="department" value="gn" checked/>General<br>		
            <input type="radio" name="department" value="ec"/>Electronics and Communication<br>
			<input type="radio" name="department" value="cs"/>Computer Science<br>
			<input type="radio" name="department" value="is"/>Information Science<br>
			<input type="radio" name="department" value="me"/>Mechanical<br>
			<input type="radio" name="department" value="it"/>Instrumentation Technology<br>
			<input type="radio" name="department" value="ce"/>Civil<br>
			<br>
			What's your Question? <br><br>

		    <textarea name="question" style="width: 300px; height: 150px;" placeholder="enter your QUESTION here...max in 140 characters"></textarea><br><br>
			<input   type="hidden" value="0" name="smail">
			<input type="checkbox" name="smail" value="1"/>Notify  me via mail when answered<br><br>
			
			<input type="submit" name="submit" value="Submit"/><br>
		</form>
	</fieldset >
	
     </tr>
	 </td>
	 </table>
	</body>
	</html>