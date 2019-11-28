<?php 
 if (isset($_POST['edit'])) {
 	# code...
 
include "conn.php";
$id=$_POST['id'];
$userid=$_POST['userid'];
$blogid=$_POST['blogid'];
$comment=$_POST['comment'];
$upcomm="UPDATE comments SET user_id='$userid',blog_id='$blogid',comment='$comment' WHERE id='$id'";
$conn->query($upcomm);
header('location:../comments.php');
}


 ?>