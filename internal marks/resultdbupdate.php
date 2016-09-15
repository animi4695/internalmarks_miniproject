<?php
	define('HOST','localhost');
	define('USERNAME', 'root');
	define('PASSWORD','');
	
	$con = mysqli_connect(HOST,USERNAME,PASSWORD);
	if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
	}
	mysqli_select_db($con,"internalmarks")or die( "<p><span style=\"color: red;\">Unable to select database</span></p>");
	$id = $_POST['id'];
	$subject = $_POST['subject'];
	$marks = $_POST['marks'];
	$sql = "INSERT INTO `results` (`id`, `subject`, `dept`, `year`, `password`) VALUES
			('$id', '$name', '$dept', '$year', '$password')";