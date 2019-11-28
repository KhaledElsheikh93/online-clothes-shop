<?php
include "conn.php";
$id=$_GET['id'];
$deuser="DELETE FROM users WHERE id=$id";
$conn->query($deuser);
header('location:../users.php');
