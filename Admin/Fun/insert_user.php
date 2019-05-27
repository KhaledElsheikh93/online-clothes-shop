<?php 
if (isset($_POST['submit'])) {
	include "connection.php";

	$username= $_POST['username'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email =$_POST['email'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$adress=$_POST['adress'];
	$phone=$_POST['phone'];
	$age=$_POST['age'];
	$nationality=$_POST['nationality'];
     
    $u_date= date("y-m-d");

    $insert_admin="INSERT INTO users (username, firstname, lastname, email, password, gender, adress, phone, age, nationality, u_date) VALUES ('$username', '$firstname', '$lastname', '$email','$password', '$gender','$adress', '$phone', '$age', '$nationality', '$u_date')";
    $conn->query($insert_admin);
    header("Location:../users.php");

}