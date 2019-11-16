<?php
 include "connection.php";
 $product_id=$_POST['id'];

 $select ="SELECT * FROM cart WHERE user_id = 1 AND product_id=$product_id";
 $result =$conn->query($select);
 $row =$result-> num_rows();

 if ($rows==0) {
 	$select_product="SELECT * FROM products WHERE id=$product_id";
    $result_product=$conn->query($select_product);
    $row_product=$result_product->fetch_assoc();

    $images= $row_product['images'];
	$product_name=$row_product['product_name'];
	$price=$row_product['price'];
	echo '<li class="header-cart-item">
			<div class="header-cart-item-img">
				<img src="Admin/Fun/uploads/' . $images . '" alt="IMG">
			</div>

			<div class="header-cart-item-txt">
				<a href="#" class="header-cart-item-name">
					' . $product_name . '
				</a>

				<span class="header-cart-item-info">
					<span class="quantity"> 1 </span> x $<span class="price">' . $price . '</span>
				</span>
			</div>
		</li>';
 }