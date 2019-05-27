<?php 

 if (isset($_POST['submit'])) {
 	include "connection.php";
 

 	$blog_title=$_POST['blog_title'];
 	$content =$_POST['content'];
 	$author =$_POST['author'];
 	$images=$_FILES['images']['name'];
 	$img_tmp=$_FILES['images']['tmp_name'];
 	move_uploaded_file($img_tmp,"uploads/images");
 
 	$b_date=date("Y-m-d");
 	$comment=$_POST['comment'];


 	$insert_blogs="INSERT INTO blogs (blog_title, content, author, images, b_date, comment)
 	               VALUES ('$blog_title','$content','$author','$images', '$b_date','$comment')";

 	$conn->query($insert_blogs);

 	header("Location:../blogs.php");
 }

 