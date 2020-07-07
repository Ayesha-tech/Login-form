<?php
    session_start()
    sdb = mysqli_connect("localhost","root","","authentication");
?>


<!DOCTYPE html>
<html>
<head>
<title>Register and login</title>
</head>
<body>
<div clas ="header">
<h1> Register and login </h1>
</div>
<form method="post" action="register.php" >
    <table>
        <tr>
        	<td>Username:</td>
        	<td><input type ="text" name ="Username" class="textInput"></td>
        </tr>
        <tr>
        	<td>Username:</td>
        	<td><input type ="text" name ="Username" class="textInput"></td>
        </tr>
        <tr>
        	<td>Email:</td>
        	<td><input type ="email" name ="Username" class="textInput"></td>
        </tr>
        <tr>
        	<td>Password:</td>
        	<td><input type ="password" name ="password" class="textInput"></td>
        </tr>
        <tr>
        	<td>Password again:</td>
        	<td><input type ="password" name ="password2" class="textInput"></td>
        </tr>
        <tr>
        	<td></td>
        	<td><input type ="submit" name ="register btn" value="Register"></td>
        </tr>
            </table>
</form>
</body>        	
</html>