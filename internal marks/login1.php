<?php 
$db = new mysqli('localhost', 'root', '', 'internalmarks');
session_start();
	
    if($_POST['id']!="" && $_POST['password']!=""){
        extract($_POST);
        $username=mysqli_real_escape_string($db,$_POST['id']);
        $pass=mysqli_real_escape_string($db,$_POST['password']);
		$sql = "SELECT * FROM `admin` WHERE id = '$username' and password = '$pass'";
		$result = mysqli_query($db,$sql);
		$row = mysqli_fetch_array($result);
		if(!empty($row['id']) AND !empty($row['password']))
		{
			 $_SESSION['loginid'] = $username;
			 header("location: hello.php");
		}
		else {
			echo $error = "Your Login Name or Password is invalid";
		}
	}
    else {
		//echo $_POST['id'];
        header("Location:index.html");
		session_destroy();
    }
?>

