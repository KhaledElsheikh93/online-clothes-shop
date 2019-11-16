<?php 

  include "Fun/connection.php";
  $id=$_GET['id'];

  $edit_cat  ="SELECT * FROM category WHERE id=$id ";
  $result_cat =$conn->query($edit_cat);
  $row_cat    =$result_cat->fetch_assoc();
?>
<form method="post" action="Fun/update_cat.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row_cat['id'] ?>">
	<br>
	<div class="form-group">
		<label>Cat Name</label>
		<input type="text" name="cat_name" class="form-control" value="<?php echo $row_cat['cat_name'] ?>">
	</div><br>
	<div>
		<label>Image</label>
		<img style="width: 50px; height: auto" src="Fun/uploads/<?php echo $row_cat['image'] ?>">
		<input type="file" name="image" class="form-control">
	</div><br>
	


	<input type="submit" name="submit" value="Edit" class="btn btn-info">
	
</form>