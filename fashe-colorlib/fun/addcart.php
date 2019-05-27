<?php
 include "connection.php";


 $product_id=$_POST['id'];
 $price=$_POST['price'];

 $select = "SELECT *FROM cart WHERE user_id = 1 AND product_id=$product_id";
 $result_select = $conn->query($select);
 $num_rows = $result_select-> num_rows;

 if ($num_rows > 0) {
 	echo "exist";
 	 }else{
 	 	$insert="INSERT INTO cart(user_id, product_id, quantity, price, total_price) VALUES (1, $product_id, 1, 
 	 	$price, $price)";
 	 	$result=$conn->query($insert);
 	 	if ($insert == true) {
 	 		$select_product = "SELECT * FROM cart WHERE user_id = 1";
 	 		$result_pro = $conn->query($select_product);
 	 		$rows = $result_pro-> num_rows;
 	 		 echo $rows;
 	 	}
 	 }