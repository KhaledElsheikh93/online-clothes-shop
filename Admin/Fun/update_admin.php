

<?php

if(isset($_POST['submit'])) {
	include "connection.php";

    $id      = $_POST['id'];
	$name    = $_POST['name'];
	$password= $_POST['password'];

	$update="UPDATE admin SET name='$name', password='$password' WHERE id=$id";
	$conn->query($update);

	header("Location:../index.php");
}