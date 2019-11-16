<?php

if (isset($_POST['submit'])) {
	include "connection.php";

	$id      =$_POST['id'];
	$blog    =$_POST['blog_title'];
	$content =$_POST['content'];
	$author  =$_POST['author'];
	
	$images  =$_FILES['images']['name'];
	$img_tmp =$_FILES['images']['tmp_name'];
	if (!empty($images)) {
		move_uploaded_file($img_tmp, "uploads/images");
		$update_img="UPDATE blogs SET images='$images' WHERE id='$id'";
		$conn->query($update_img);	
	}
	$update_blogs="UPDATE blogs SET blog_title='$blog' ,content='$content' ,author='$author' WHERE id=$id";
	$conn->query($update_blogs);
	header("Location:../blogs.php");
}