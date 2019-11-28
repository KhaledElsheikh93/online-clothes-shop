<?php
if (isset($_POST['edit'])) {
	
	include "conn.php";
	$id = $_POST['id'];
	$tittle = $_POST['tittle'];
	$content=$_POST['content'];
	$comment=$_POST['comment'];
	$author=$_POST['author'];
	$img=$_FILES['img']['name'];
	$img_tmp=$_FILES['img']['tmp_name'];
	if (!empty($img)) {
		move_uploaded_file($img_tmp,"uploads/$img");
		$imgslk="UPDATE blogs SET img ='$img' WHERE id='$id'";
		$conn->query($imgslk);
	}
	$blogsup="UPDATE blogs SET blog_tittle='$tittle',content='$content',blog_comments='$comment',author='$author' WHERE id='$id'";
	$conn->query($blogsup);

header('location:../blogs.php');

}