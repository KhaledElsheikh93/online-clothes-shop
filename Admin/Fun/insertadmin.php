<?php
if (isset($_POST['add'])) {

	include "conn.php";
	$name=$_POST['name'];
	$password=md5($_POST['password']);

	$addadmin="INSERT INTO admins (name,password) VALUES ('$name','$password') ";
	$conn->query($addadmin);
	header('location:../index.php');


}