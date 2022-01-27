<?php 
session_start();

if (isset($_SESSION['username'])) {
	// code...
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Main Page</title>
	<link rel="stylesheet" href="style.css">
	<style>

		a{
	
    color:#16437E;
	cursor: pointer;
/* 	padding: 12px 10px; */
/* 	float:right; */
	text-decoration: none;
	position: fixed;
	right: 10px;
	top: 5px;
	font-size: 25px;
}

	</style>
</head>
<body>
	
	<h1>Hello , <?php echo $_SESSION['username']; ?> </h1><a href="login.php">Logout</a>

</body>
</html>

<?php
}else{
	header("Location:mainpage.php");
	exit();
}
 ?>
