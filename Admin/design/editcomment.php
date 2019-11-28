<form method="post" action="fun/updatecomment.php">
	<?php
	include "fun/conn.php";
	$id=$_GET['id'];
	$ucomm="SELECT * FROM comments WHERE id=$id";
	$ress=$conn->query($ucomm) ;
	foreach ($ress as  $rrow) {?>

	
	<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $rrow['id'] ?>">
		<label>user id</label>
		<input class="form-control" type="text" name="userid" value="<?php echo $rrow['user_id'] ;?>"	>
	</div>
	<div class="form-group">
		<label>blog id</label>
		<input class="form-control" type="text" name="blogid" value="<?php echo $rrow['blog_id']; ?>"	>

	</div>
	<div class="form-group">
		<label>comment</label>
		<input class="form-control" type="text" name="comment" value="<?php echo $rrow['comment']; ?>"	>
	</div>
	
	
	
	<input type="submit" name="edit" value="edit" class="btn btn-success">






		
	<?php } ?>
	 
</form>