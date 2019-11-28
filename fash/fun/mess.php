<?php
include "conn.php";

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];

$daate=date("y-m-d");
$messins="INSERT INTO message (full_name,phone_number,emmail,messae_body,date_time)VALUES('$name','$phone','$email','$message','$daate')";
$resss=$conn->query($messins);
