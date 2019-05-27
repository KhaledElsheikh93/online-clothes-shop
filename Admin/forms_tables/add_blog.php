
<form method="post" action="fun/insert_blog.php"  enctype="multipart/form-data">
	<br>
	<div class="form-group">
		<label>Title</label>
		<input type="text" name="blog_title" class="form-control">
	</div><br>
	<div class="form-group">
		<label>Content</label>
		<input type="text" name="content" class="form-control">
	</div><br>
	<div class="form-group">
		<label>Author</label>
		<input type="text" name="author" class="form-control">
	</div><br>
	<div class="form-group">
		<label>Images</label>
		<input type="file" name="images" class="form-control">
	</div><br>
	<div class="form-group">
		<label>Comments</label>
		<input type="text" name="comment" class="form-control">
	</div>

	<input type="submit" name="submit" value="Add" class="btn btn-info">
</form>