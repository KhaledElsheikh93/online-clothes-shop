<?php

 if (isset($_POST['submit'])) {
 	include "connection.php";
 	
 	$id      =$_POST['id'];
 	$user_id =$_POST['user_id'];
 	$blog_id =$_POST['blog_id'];
 	$comment =$_POST['comment'];

 	$update="UPDATE comments SET user_id='$user_id', blog_id='$blog_id', comment='$comment' WHERE id='$id' ";
 	$conn->query($update);

 	header("Location:../comments.php");
 }