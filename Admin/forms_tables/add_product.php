<form method="post" action="Fun/insert_product.php"  enctype="multipart/form-data">
	<div class="form-group">
		<label>Product</label>
		<input type="text" name="product_name" class="form-control">
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
	</div><br>
	<div class="form-group">
		<label>Old Price</label>
		<input type="text" name="old_price" class="form-control" >
	</div><br>
	<div class="form-group">
		<label>New Price</label>
		<input type="text" name="price" class="form-control">
	</div><br>
	<div class="form-group">
		<label>Images</label>
		<input type="file" name="image" class="form-control">
	</div><br>
	<div class="form-group">
		<label>Description</label>
		<input type="text" name="descr" class="form-control">
	</div><br>


	<input type="submit" name="submit" value="Add" class="btn btn-info">
</form>