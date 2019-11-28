<?php
if (isset($_POST['add'])) {
	# code...

include "conn.php";
$name=$_POST['name'];
$img=$_FILES['img']['name'];
$tmpimg=$_FILES['img']['tmp_name'];
move_uploaded_file($tmpimg, "uploads/$img");
$caadd="INSERT INTO categeory (cat_name,img)VALUES('$name','$img')";
$conn->query($caadd);
header('location:../categoery.php');

}