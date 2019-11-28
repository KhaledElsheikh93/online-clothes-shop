<?php 
include "conn.php";
$id=$_GET['id'];
$del="DELETE FROM instgram WHERE id=$id";
$conn->query($del);
header('location:../smedia.php');


