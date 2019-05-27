<?php

 if (isset($_POST['submit'])) {
 	include "connection.php";

 	$id       =$_POST['id'];
 	$user_id  =$_POST['user_id'];
 	$blog_id  =$_POST['blog_id'];
 	$comment  =$_POST['comment'];
 	$date     =date("Y-m-d");

 	$insert_comment="INSERT INTO comments (user_id,blog_id,comment,com_date) VALUES ('$user_id','$blog_id','$comment','$date')";
 	$conn->query($insert_comment);
 	header("Location:../comments.php");
 }