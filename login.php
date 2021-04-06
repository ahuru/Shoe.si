<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysql_query("select * from user where username = '$username' and password = '$password'");
$cek = mysql_num_rows($login);

if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = $login;
	header("location:index2.html");
}
else{
	header("location:login2.php");
}
?>
	

