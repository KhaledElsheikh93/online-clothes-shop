<?php

 
 	include "connection.php";

 	
 	$name     =$_POST['name'];
 	$phone    =$_POST['phone'];
 	$email    =$_POST['email'];
 	$message  =$_POST['message']; 
 	$date     =date("Y-m-d");

 	$insert_message="INSERT INTO messages( name, phone, email, message, message_date) VALUES ('$name','$phone','$email','$message','$date')";
 	$conn->query($insert_message);
 	header("Location:../contact.php");
 