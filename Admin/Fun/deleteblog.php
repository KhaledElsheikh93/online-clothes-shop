<?php 
include "conn.php";
$id=$_GET['id'];
$del="DELETE FROM blogs WHERE id=$id";
$conn->query($del);
header('location:../blogs.php');


