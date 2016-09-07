<?php 
$db = new mysqli('localhost', 'root', '', 'internalmarks');
session_start();
    if($_POST['id']!="" && $_POST['password']!=""):
        extract($_POST);
        $username=mysqli_real_escape_string($db,$_POST['id']);
        $pass_encrypt=md5(mysqli_real_escape_string($db,$_POST['password']));
        $fetch=$db->query("SELECT * FROM `users` WHERE username='$username' AND `password` = '$pass_encrypt'");
        $count=mysqli_num_rows($fetch);
        if($count==1) :
           $row=mysqli_fetch_array($fetch);
           $_SESSION['loginid']=$row['id'];    
           echo 1;  
        else :
          echo 0;
        endif;
    else :
        header("Location:index.php");
    endif;
?>