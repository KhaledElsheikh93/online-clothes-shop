<?php

 if (isset($_POST['submit'])) {
 	include "connection.php";

 	$media    =$_POST['media_name'];
 	$content  =$_POST['content'];
 	$images    =$_FILES['images']['name'];
 	$img_tmp =$_FILES['images']['tmp_name'];
 	move_uploaded_file($img_tmp,"uploads/images");

 	$insert_media="INSERT INTO media (media_name, content, images) VALUES ('$media', '$content', '$images')";
 	$conn->query($insert_media);

 	header("Location:../media.php");
 }