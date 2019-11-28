<?php 
include "conn.php";
$id=$_GET['id'];
$del="DELETE FROM products WHERE id=$id";
$conn->query($del);
header('location:../products.php');


