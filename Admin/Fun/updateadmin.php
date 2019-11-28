<?php
if (isset($_POST['edit'])) {
	include "conn.php";
	$id=$_POST['id'];
	$name=$_POST['name'];
	$password=md5($_POST['password']);
	$upadmin="UPDATE admins SET  name='$name',password='$password' WHERE id ='$id' ";
	$upresult=$conn->query($upadmin);
	header('location:../index.php');

}