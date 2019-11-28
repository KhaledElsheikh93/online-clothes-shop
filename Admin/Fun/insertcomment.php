<?php 
if (isset($_POST['add'])) {
	# code...

include "conn.php";
$id=$_POST['id'];
$userid=$_POST['user id'];
$blogid=$_POST['blog id'];
$comment=$_POST['comment'];
$date=date("y-m-d");
$incomment="INSERT INTO comments(user_id,blog_id,comment,com_date)VALUES('$userid','$blogid','$comment','$date')";
$conn->query($incomment);
header('location:../comments.php');

}

 ?>