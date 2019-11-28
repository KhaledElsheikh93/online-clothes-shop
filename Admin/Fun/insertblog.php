<?php 
if (isset($_POST['add'])) {
include "conn.php";
$tittle=$_POST['tittle'];
$content=$_POST['content'];
$comment=$_POST['comment'];
$author=$_POST['author'];
$date=date("y-m-d");
$img=$_FILES['img']['name'];
$img_tmp=$_FILES['img']['tmp_name'];
move_uploaded_file($img_tmp, "uploads/$img");
$insblog="INSERT INTO blogs (blog_tittle,content,img,blog_comments,bdate,author)VALUES('$tittle','$content','$img','$comment','$date','$author')";
$conn->query($insblog);
header('location:../blogs.php');

}


 