<?php 
if (isset($_POST['submit'])) {
session_start();
include"conn.php";
$username=$_POST['username'];
$password=$_POST['password'];

$slk="SELECT * FROM users WHERE username='$username' AND password='$password'";
$slkres=$conn -> query($slk);

$count=$slkres -> num_rows;

if ($count > 0) {
	
	$fe=$slkres->fetch_assoc();
	$id=$fe['id'];
	$_SESSION['login']=$id;


	echo "string";
	header("location:../index.php");

}
else{
	echo "no";
	header("location:../login.php");
}
}


