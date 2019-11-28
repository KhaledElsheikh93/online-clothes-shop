<form method="post" action="fun/updateproducts.php" enctype="multipart/form-data">
	<?php
	include "fun/conn.php";
	$id=$_GET['id'];
	$uppro="SELECT * FROM products WHERE id=$id";
	$ress=$conn->query($uppro) ;
	foreach ($ress as  $rrow) {?>

	
	<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $rrow['id'] ?>">
		<label>product name</label>
		<input class="form-control" type="text" name="name" value="<?php echo $rrow['product_name'] ;?>"	>
	</div>
	<div class="form-group">
		<label>old price</label>
		<input class="form-control" type="text" name="oldprice" value="<?php echo $rrow['old_price']; ?>"	>

	</div>
	<div class="form-group">
		<label>produc price</label>
		<input class="form-control" type="text" name="price" value="<?php echo $rrow['product_price']; ?>"	>
	</div>
	
	<div class="form-group">
		<label>produt des</label>
		<input class="form-control" type="text" name="des" value="<?php echo $rrow['product_des']; ?>"	
	</div>
	<div class="form-group">
		<label>img</label>
		<img style="height: 70px;width: 100px" src="fun/uploads/<?php echo $rrow['img'];?>">
		<input class="form-control" type="file" name="img" "	>
	</div><br>
	
	<div class="form-group">
		<label>cat id</label>
		<input class="form-control" type="text" name="catid" value="<?php echo $rrow['cat_id']; ?>"	>
	</div>
	
	
	<input type="submit" name="edit" value="edit" class="btn btn-success">






		
	<?php } ?>
	 
</form>