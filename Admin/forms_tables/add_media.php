<form method="post" action="Fun/insert_media.php" enctype="multipart/form-data">
	<br>
	<div class="form-group">
		<label>Media Channel</label>
		<input type="text" name="media_name" class="form-control">
	</div><br>
	<div class="form-group">
		<label>Content</label>
		<input type="text" name="content" class="form-control">
	</div><br>
	<div class="form-group">
		<label>Images</label>
		<input type="file" name="images" class="form-control">
	</div><br>

	<input type="submit" name="submit" value="Add Channel" class="btn btn-info">
</form>