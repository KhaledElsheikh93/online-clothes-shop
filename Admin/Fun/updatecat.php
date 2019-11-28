<?php 
include "conn.php";
$id=$_POST['id'];
$name=$_POST['name'];
$img=$_FILES['img']['name'];
$tmpimg=$_FILES['img']['tmp_name'];
if (! empty($img)) {
	move_uploaded_file($tmpimg, 'uploads/$img');
	$slki="UPDATE categeory SET img = '$img'  WHERE id=$id";
	$conn->query($slki);
}
$oi="UPDATE categeory SET cat_name='$name' WHERE id='$id'";
$conn->query($oi);
header('location:../categoery.php');





 ?>