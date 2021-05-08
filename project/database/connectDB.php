<?php
	$db = new mysqli("localhost","root","","webproject");
	if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
  }
?>