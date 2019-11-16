<?php 

  include "fun/connection.php";
  $id=$_GET['id'];

  $edit_product   ="SELECT * FROM products WHERE id=$id";
  $result_product =$conn->query($edit_product);
  $row_product    =$result_product->fetch_assoc();
?>
<form method="post" action="fun/update_product.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row_product['id'] ?>">
	<br>
	<div class="form-group">
		<label>Product</label>
		<input type="text" name="product_name" class="form-control" value="<?php echo $row_product['product_name'] ?>">
	</div><br>
	<div class="form-group">
		<label>Category</label>
		<select class="form-control" name = "cat">
			<option selected=""></option>
			<?php 
			include "Fun/connection.php"; 
			$sel = "SELECT * FROM category";
			$result = $conn->query($sel);
			foreach ($result as $key) {
				?>
				<option value="<?php echo $key['id'] ?>" ><?php echo $key['cat_name']; ?></option>
				<?php 
		 	} 
		 	?>
		 </select>
	<div class="form-group">
		<label>Old Price</label>
		<input type="text" name="old_price" class="form-control" value="<?php echo $row_product['old_price'] ?>">
	</div><br>
	<div class="form-group">
		<label>New Price</label>
		<input type="text" name="price" class="form-control" value="<?php echo $row_product['price'] ?>">
	</div><br>
	<div class="form-group">
		<label>Images</label>
		<img style="width: 50px; height: auto" src="fun/uploads/<?php echo $row_product['images'] ?>">
		<input type="file" name="images" class="form-control">
	</div><br>
	<div class="form-group">
		<label>Description</label>
		<input type="text" name="descr" class="form-control" value="<?php echo $row_product['descr'] ?>">
	</div>


	<input type="submit" name="submit" value="Edit" class="btn btn-info">
	
</form>