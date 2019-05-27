<?php

if (isset($_POST['submit'])) {
	include "connection.php";

	$id         =$_POST['id'];
	$username   =$_POST['username'];
	$firstname  =$_POST['firstname'];
	$lastname   =$_POST['lastname'];
	$email      =$_POST['email'];
	$password   =$_POST['password'];
	$gender     =$_POST['gender'];
	$adress     =$_POST['adress'];
	$phone      =$_POST['phone'];
	$age        =$_POST['age'];
	$nationality=$_POST['nationality'];
	$u_date     =date("Y-m-d");


	$update="UPDATE users SET username='$username', firstname='$firstname', lastname='$lastname', email='$email' , password='$password', gender='$gender', adress='$adress', phone='$phone', age='$age', 
	       nationality='$nationality', u_date='$u_date' WHERE id=$id";

	$conn->query($update);

	header("Location:../users.php");

}