<?php

include './config.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query($connection,"select * from users where username='$username' and password='$password'");
 
$user = mysqli_num_rows($query);

 
if($user > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/index.php");
}else{
	header("location:index.php?denied=true");
}