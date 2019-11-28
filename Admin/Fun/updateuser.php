<?php
if (isset($_POST['edit'])) {
	include "conn.php";
	$id=$_POST['id'];
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$upuser="UPDATE users SET username='$username',password='$password',firstname='$firstname',lastname='$lastname',email='$email',phone='$phone',addresss='$address',gender='$gender',age='$age' WHERE id=$id";
	$conn->query($upuser);
	header('location:../users.php');

}