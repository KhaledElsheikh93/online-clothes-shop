<form method="post" action="fun/update_comments.php">
	<?php 
      include "fun/connection.php";
      $id=$_GET['id'];
      $select_comment="SELECT * FROM comments WHERE id='$id'";
      $result_comment=$conn->query($select_comment);
      foreach ($result_comment as $row_com) {
	?>

	<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $row_com['id']; ?>">
	</div><br>
	<div class="form-group">
		<label>User ID</label>
		<input class="form-control" type="text" name="user_id" value="<?php echo $row_com['user_id']; ?>">
	</div><br>
	<div class="form-group">
		<label>Blog ID</label>
		<input class="form-control" type="text" name="blog_id" value="<?php echo $row_com['blog_id'] ;?>">
	</div><br>
	<div class="form-group">
		<label>Comments</label>
		<input class="form-control" type="text" name="comments" value="<?php echo $row_com['comment']; ?>">
	</div>

	<input class="btn btn-success" type="submit" name="submit" value="Edit">
</form>
<?