<?php
if (isset($_POST['submit'])) {
	session_start();
	include "connection.php";
	$username=$_POST['username'];
	$password=$_POST['password'];
	$select="SELECT * FROM users WHERE username='$username', password='$password'";
	$result=$conn->query($select);


	$count=$row->num_rows();
	 if ($count>0) {
	 	$row=$result->fetch_assoc();
	 	$id=$row['id'];
        $_SESSION['login']=$id;
	 	header("Location:../index.php");
	 }else{
	 	header("Location:../login.php");
	 }
}