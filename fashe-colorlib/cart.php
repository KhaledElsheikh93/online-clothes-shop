<?php 
  include "includes/header.php";
  
?>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-01.jpg);">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-70">Quantity</th>
							<th class="column-5">Total</th>
						</tr>
						<?php 
                          $select_cart="SELECT * FROM cart";
                          $result_cart=$conn->query($select_cart);

                          foreach ($result_cart as $row) {
                          	$pro_id=$row['product_id'];                          

                          $cat="SELECT * FROM products WHERE id = $pro_id";
                          $result_cat=$conn->query($cat);
                          foreach ($result_cat as $row_cat) {
                          	
                          
                         

						?>

						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="../Admin/Fun/uploads/<?php echo $row_cat['images']; ?>" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2"><?php echo $row_cat['product_name']; ?></td>
							<td class="column-3"><?php echo $row_cat['price'] ?></td>
							<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="<?php echo $row['quantity']; ?>">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>
							<td class="column-5">$<?php echo $row['total_price']?></td>
							<td class="column-6"> <button data-id = "<?php echo $row['product_id']?>" value="<?php echo $row['quantity']?>" class="btn btn-info updateee">Update</button> </td>
						
						</tr>
						<?php } } ?>
					




					
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button>
					</div>
				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<button name="upp" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4 updatee">
						Update Cart
					</button>
					</a>
				</div>
			</div>


			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
			  <?php
					function total_price(){
						 include "connection.php";
						  $quantity=$_POST['quantity'];
						  $id=$_POST['id'];
					 	

					 	$total=0;

					 	

					     // From cart table
					 	$select_price="SELECT * FROM cart WHERE user_id='$id'";
					 	$result_price=mysqli_query($conn, $select_price);
					 	while ($row_price=mysqli_fetch_array($result_price)) {

					 	$product_id=$row_price['product_id'];

					 	// Using (product_id) to made relation between cart table and product table
					 	$select_product_price="SELECT * FROM products WHERE id='$product_id'";
					 	$result_product_price=mysqli_query($conn ,$select_product_price);
					 	while ($row_product_price=mysqli_fetch_array($result_product_price)){

					 		$product_price=array($row_product_price['product_price']);

					 		$values=array_sum($product_price);

					 		$total +=$values;
					 		}
					 	}
					 	echo $total. "$";
					 }
		    ?>
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							There are no shipping methods available. Please double check your address, or contact us if you need any help.
						</p>

						<span class="s-text19">
							Calculate Shipping
						</span>

						<div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
							<select class="selection-2" name="country">
								<option>Select a country...</option>
								<option>US</option>
								<option>UK</option>
								<option>Japan</option>
							</select>
						</div>

						<div class="size13 bo4 m-b-12">
						<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="State /  country">
						</div>

						<div class="size13 bo4 m-b-22">
							<input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Postcode / Zip">
						</div>

						<div class="size14 trans-0-4 m-b-10">
							<!-- Button -->
							<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
								Update Totals
							</button>
						</div>
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						$39.00
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Proceed to Checkout
					</button>
				</div>
			</div>
		</div>
	</section>

 <?php 

 include "includes/footer.php";
 ?>

	
	