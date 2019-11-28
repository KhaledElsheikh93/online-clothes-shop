<?php 
if (isset($_POST['add'])) {
	# code...

include"conn.php";
$name=$_POST['by'];
$caption=$_POST['caption'];
$img = $_FILES['img']['name'];
	$img_tmp = $_FILES['img']['tmp_name'];
	move_uploaded_file($img_tmp, "uploads/$img");

$inspro="INSERT INTO  instgram(byy,caption,img)VALUES('$name','$caption','$img')";

$conn->query($inspro);
	 header('location:../smedia.php');

}
 ?>