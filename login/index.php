<?php
include("flag.php");
if (isset($_GET['passwd'])) {
        if (hash("md5", $_GET['passwd']) == '0e514198428367523082236389979035')        {
                echo $flag;
        } 
} else {
    echo '<!DOCTYPE html>
<html>
<head>
	<title>Login Bypass | Null Ahmedabad</title>
</head>
<body style="background-color: #000000">
<h2 style="color: green">Login bypass</h2>

<form action="/ctf/login">

<table style="color: green;">
	<tr>
		<td>
			Password:
		</td>
		<td>
			<input type="Password" name="passwd" value="">
		</td>
	</tr>
	<tr>
		<td></td>
		<td><button type="submit">login</button></td>
	</tr>
</table>
</form>
</body>
</html>';
} 
?>

