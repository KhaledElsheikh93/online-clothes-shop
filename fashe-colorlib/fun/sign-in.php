<?php
if (isset($_POST['submit'])) {
	session_start();
	include "fun/connection.php";
	$username=$_POST['username'];
	$password=$_POST['password'];
	$select="SELECT * FROM users WHERE username='$username', password='$password'";
	$result=$conn->query($select);
	$count=$rows->num_rows();
	 if ($count>0) {
	 	$SESSION['username']=$username;

	 	header("Location:../index.php");
	 }else{
	 	header("Location:../login.php")
	 }
}