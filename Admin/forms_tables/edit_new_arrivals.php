 <?php 

  include "Fun/connection.php";
  $id=$_GET['id'];

  $edit_coll  ="SELECT * FROM collection WHERE id=$id ";
  $result_coll =$conn->query($edit_coll);
  $row_coll    =$result_coll->fetch_assoc();
?>
<form method="post" action="Fun/update_new_arrivals.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row_coll['id'] ?>">
	<br>
	<div class="form-group">
		<label>Collection Name</label>
		<input type="text" name="collection_name" class="form-control" value="<?php echo $row_coll['collection_name'] ?>">
	</div><br>
	<div>
		<label>Image</label>
		<img style="width: 50px; height: auto" src="Fun/uploads/<?php echo $row_coll['images'] ?>">
		<input type="file" name="images" class="form-control">
	</div><br>
	


	<input type="submit" name="submit" value="Edit" class="btn btn-info">
	
</form>