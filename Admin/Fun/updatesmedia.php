<?php
if (isset($_POST['edit'])) {
	
	include "conn.php";
	$id = $_POST['id'];
	$by = $_POST['by'];
	$caption=$_POST['caption'];
	
	$img=$_FILES['img']['name'];
	$img_tmp=$_FILES['img']['tmp_name'];
	if (!empty($img)) {
		move_uploaded_file($img_tmp,"uploads/$img");
		$imgslk="UPDATE instgram SET img ='$img' WHERE id='$id'";
		$conn->query($imgslk);
	}
	$blogsup="UPDATE instgram SET byy='$by',caption='$caption' WHERE id='$id'";
	$conn->query($blogsup);

header('location:../smedia.php');

}