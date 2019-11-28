<?php 
include "conn.php";
$id=$_POST['id'];
$slkcart="SELECT * FROM cart WHERE user_id=1 AND product_id=$id";
$slkcartres=$conn->query($slkcart);
$showrow=$slkcartres-> num_rows;
if ($showrow ==0) {
	$slkproduc="SELECT * FROM products WHERE id=$id";
	$result=$conn->query($slkproduc);
	$roow=$result->fetch_assoc();
	$img= $roow['img'];
	$proname=$roow['product_name'];
	$proprice=$roow['product_price'];
	echo '<li class="header-cart-item">
			<div class="header-cart-item-img">
				<img src="admin/fun/uploads/' . $img . '" alt="IMG">
			</div>

			<div class="header-cart-item-txt">
				<a href="#" class="header-cart-item-name">
					' . $proname . '
				</a>

				<span class="header-cart-item-info">
					<span class="quantity"> 1 </span> x $<span class="pricee">' . $proprice . '</span>
				</span>
			</div>
		</li>';
}

	 

