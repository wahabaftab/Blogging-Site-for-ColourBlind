<!DOCTYPE html>
<?php
	
		session_start();
		$name=$_SESSION['fullName'];
		session_destroy();
	
?>
<html>
<head>
	<title>Logging Out!</title>
	<link rel="stylesheet" href="LoginStyle.css">
</head>

<body>
<meta http-equiv="refresh" content="2;url=Login.php">
<div class=login-page>
<div class=form>
<h1><font size=4 color=black><i>Logging</i></font></h1>
<h1><font size=9 color=red><b><?php echo $name;?></b></font></h1>
<h1><font size=4 color=black><i> Out...</i></font></h1>
</div>
</div>
</body>
</html>