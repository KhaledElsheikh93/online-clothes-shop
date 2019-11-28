<?php
if (isset($_POST['add'])) {
	include "conn.php";
	$productname=$_POST['name'];
	$oldprice=$_POST['oldprice'];
	$productprice=$_POST['price'];
	
	$productdes=$_POST['des'];
	
	$img = $_FILES['img']['name'];
	$img_tmp = $_FILES['img']['tmp_name'];
	move_uploaded_file($img_tmp, "uploads/$img");

	$catid=$_POST['catid'];
	$date=date("y-m-d");
	$inspro="INSERT INTO  products (product_name,old_price,product_price,product_date,product_des,img,cat_id) VALUES('$productname','$oldprice','$productprice','$date','$productdes','$img','$catid')";
	$conn->query($inspro);
	header('location:../products.php');





}