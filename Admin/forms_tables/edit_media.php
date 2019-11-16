<?php 
 include "Fun/connection.php";
 $id=$_GET['id'];

 $edit_media="SELECT * FROM media WHERE id=$id ";
 $result_media=$conn->query($edit_media);
 foreach ($result_media as $row) {
?>
<form method="post" action="Fun/update_media.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
	<br>
	<div class="form-group">
		<label>Media Channel</label>
        <input type="text" name="media_name" class="form-control" value="<?php echo $row['media_name'] ?>">
	</div><br>
	<div class="form-group">
		<label>Content</label>
		<input type="text" name="content" class="form-control" value="<?php echo $row['content'] ?>">
	</div><br>
	<div class="form-group">
		<label>Imagse</label>
		<img style="width: 100px; height: auto;" src="Fun/uploads/<?php echo $row['images'] ?>">
		<input type="file" name="images" class="form-control">
	</div><br>

	<input type="submit" name="submit" value="Edit" class="btn btn-info">
</form>

<?php } ?>