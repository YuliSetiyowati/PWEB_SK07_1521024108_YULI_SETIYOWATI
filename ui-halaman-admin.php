<?php
	// Start the session
	session_start();
	if (empty($_SESSION['username'])){
		header('location:ui-login.php');
	}
	//koneksi database
	include("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>AKN Bojonegoro</title>
</head>
<body>
	<h2>HALAMAN ADMIN</h2>
	<a href="logout.php">logout</a>
</body>
</html>