<form method="post" action="fun/updateblog.php" enctype="multipart/form-data">
	
<?php 
include "fun/conn.php";
$id=$_GET['id'];
$sslk="SELECT * FROM blogs WHERE id=$id";
$ressu=$conn->query($sslk);
foreach ($ressu as $value) { ?>
	<input type="hidden" name="id" value="<?php echo $value['id'] ?>">
	<div class="form-group">


		<label>tittle</label>
		<input class="form-control" type="text" name="tittle" value="<?php echo $value['blog_tittle']?>">
	</div>
	<div class="form-group">


		<label>content</label>
		<input class="form-control" type="text" name="content" value="<?php echo $value['content'] ?>">
	</div>
	<div class="form-group">


		<label>img</label>

		<input  class="form-control" type="file"  name="img">
		<img style="height: 100px;width: 100px" src="fun/uploads/<?php echo $value['img'] ?> ">
	</div>
	<div class="form-group">


		<label>comment</label>
		<input class="form-control" type="text" name="comment" value="<?php echo $value['blog_comments'] ?>">
	</div>
	<div class="form-group">


		<label>author</label>
		<input class="form-control" type="text" name="author" value="<?php echo $value['author'] ?>">
	</div>
	
          <input class="btn btn-primary" type="submit" name="edit">
<?php } ?>


 
	

</form>