<?php 

include "Fun/connection.php";
$id=$_GET['id'];

$edit_blog="SELECT * FROM blogs WHERE id=$id ";
$result_edit=$conn->query($edit_blog);
foreach ($result_edit as $row_blog) {
	
?>

<form method="post" action="Fun/update_blog.php" enctype="multipart/form-data">
	<input type="hidden" name="id" value="<?php echo $row_blog['id'] ?>">
	<br>
	<div class="form-group">
		<label>Title</label>
		<input type="text" name="blog_title" class="form-control" value="<?php echo $row_blog['blog_title'] ?>">
	</div><br>
	<div class="form-group">
		<label>Content</label>
		<input type="text" name="content" class="form-control" value="<?php echo $row_blog['content'] ?>">
	</div><br>
	<div class="form-group">
		<label>Author</label>
		<input type="text" name="author" class="form-control" value="<?php echo $row_blog['author'] ?>">
	</div><br>
	<div class="form-group">
		<label>Images</label>
		<img style="width: 100px; height: auto;" src="fun/uploads/<?php echo $row_blog['images'] ?>">
		<input type="file" name="images" class="form-control">
	</div><br>

	<input type="submit" name="submit" value="Edit" class="btn btn-info">
</form>
<?php } ?>