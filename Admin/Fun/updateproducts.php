<?php 
if (isset($_POST['edit'])) {
	include "conn.php";
	$id=$_POST['id'];
	$name=$_POST['name'];
	$oldprice=$_POST['oldprice'];
	$price=$_POST['price'];
	$des=$_POST['des'];
	$catid=$_POST['catid'];
	$img=$_FILES['img']['name'];
	$temp_img=$_FILES['img']['tmp_name'];
	
	if (!empty($img)) {
		move_uploaded_file($temp_img, "uploads/$img");
		$imgup="UPDATE products SET img='$img' WHERE id=$id";
		$conn->query($imgup);
	}
  $uppro="UPDATE products SET product_name='$name', old_price='$oldprice',product_price='$price',product_des='$des',cat_id='$catid' WHERE id=$id";
  
  $conn->query($uppro);
  header('location:../products.php');


 

}



 