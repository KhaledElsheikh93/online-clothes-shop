

<form method="post" action="fun/insertblog.php" enctype="multipart/form-data">
	<br>
	<div class="form-group">
		<label>title</label>
		<input class="form-control" type="text" name="tittle">
	</div><br>
	<div class="form-group">
		<label>content</label>
		<input class="form-control" type="text" name="content">
	</div><br>
	<div class="form-group">
		<label>comment</label>
		<input class="form-control" type="text" name="comment">
	</div><br>

	<div class="form-group">
		<label>author</label>
		<input class="form-control" type="text" name="author">
	</div><br>
	<div class="form-group">
		<label>img</label>
		<input class="form-control" type="file" name="img">
	</div><br>
	
	
	<input type="submit" name="add" value="Add" class="btn btn-info">
</form>