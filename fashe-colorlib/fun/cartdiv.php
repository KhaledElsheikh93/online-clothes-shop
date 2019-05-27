<?php
 include "connection.php";
 $product_id=$_POST['id'];

 $select ="SELECT * FROM cart WHERE user_id = 1 AND product_id=$product_id";
 $result =$conn->query($select);
 $row =$result-> num_rows;

 if (!$rows > 0) {
 	$select="SELECT * FROM cart WHERE id=$product_id";
 }