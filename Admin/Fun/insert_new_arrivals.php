<?php 

 if (isset($_POST['submit'])) {
 	include "connection.php";

 	$collection=$_POST['collection_name'];
 	$image     =$_FILES['images']['name'];
 	$image_tmp =$_FILES['images']['tmp_name'];
 	move_uploaded_file($image_tmp, "uploads/image");

 	$insert_collection="INSERT INTO collection (collection_name ,images) VALUES ('$collection','$image') ";
 	$conn->query($insert_collection);
 	header("Location:../new_arrivals.php");
 }