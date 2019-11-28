<?php 
if (isset($_POST['add'])) {
	include "conn.php";
	$username=$_POST['username'];
	$password=$_POST['password'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
 	$email=$_POST['email'];
 	$address=$_POST['address'];  
 	$phone=$_POST['phone'];	
 	$gender=$_POST['gender']; 
 	$age=$_POST['age'];
 	$inuser="INSERT INTO users(username,password,firstname,lastname,email,addresss,phone,gender,age) VALUES('$username','$password','$firstname','$lastname','$email','$address','$phone','$gender','$age')";
 	$conn->query($inuser);
 	header('location:../users.php');
}
