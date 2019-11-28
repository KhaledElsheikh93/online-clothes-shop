<?php 
include "conn.php";
$id=$_GET['id'];
$decat="DELETE FROM categeory WHERE id=$id";
$conn->query($decat);
header('location:../categoery.php');




 ?>