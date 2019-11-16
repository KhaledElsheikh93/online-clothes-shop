<?php 
  if (isset($_POST['submit'])) {
  	 include "connection.php";

  	 $id      =$_POST['id'];
  	 $media   =$_POST['media_name'];
  	 $images  =$_FILES['images']['name'];
  	 $img_tmp =$_FILES['images']['tmp_name'];

  	 if (!empty($images)) {
  	 	move_uploaded_file($img_tmp, "uploads/images");

  	 	$update_images="UPDATE media SET images='$images' WHERE id='$id'";
  	 	$conn->query($update_images);
  	 }

  	 $update_media="UPDATE media SET media_name='$media', content='$content' WHERE id=$id ";
  	 $conn->query($update_media);

  	 header("Location:../media.php");
  }