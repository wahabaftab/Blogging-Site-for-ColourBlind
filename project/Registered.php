<!DOCTYPE html>
<?php
	
		session_start();
		$name=$_SESSION['fullName'];
		session_destroy();
	
?>
<html>
<head>
	<title>Successfuly Registered</title>
	<link rel="stylesheet" href="LoginStyle.css">
</head>

<body>
<meta http-equiv="refresh" content="3;url=Login.php">
<div class=login-page>
<div class=form>
<h1><font size=4 color=black><i>Succesfuly Registered.</i></font></h1>
<h1><font size=4 color=black><i>Please Sign-in using new credentials</i></font></h1>
</div>
</div>
</body>
</html>