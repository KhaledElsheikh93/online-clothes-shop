<?php
include "conn.php";
$id=$_GET['id'];
$del="DELETE  FROM message where id=$id";
$resa=$conn->query($del);
header('location:../message.php');
