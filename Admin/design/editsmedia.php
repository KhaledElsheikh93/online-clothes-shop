<form method="post" action="fun/updatesmedia.php" enctype="multipart/form-data">
	
<?php 
include "fun/conn.php";
$id=$_GET['id'];
$sslk="SELECT * FROM instgram WHERE id=$id";
$ressu=$conn->query($sslk);
foreach ($ressu as $value) { ?>
	<input type="hidden" name="id" value="<?php echo $value['id'] ?>">
	<div class="form-group">


		<label>by</label>
		<input class="form-control" type="text" name="by" value="<?php echo $value['byy']?>">
	</div>
	<div class="form-group">


		<label>caption</label>
		<input class="form-control" type="text" name="caption" value="<?php echo $value['caption'] ?>">
	</div>
	<div class="form-group">


		<label>img</label>

		<input  class="form-control" type="file"  name="img">
		<img style="height: 100px;width: 100px" src="fun/uploads/<?php echo $value['img'] ?> ">
	</div>
	
          <input class="btn btn-primary" type="submit" name="edit">
<?php } ?>


 
	

</form>