<?php
include "conn.php";
$id=$_GET['id'];
$deladmin="DELETE FROM admins WHERE id =$id";
$conn->query($deladmin);
header('location:../index.php');
