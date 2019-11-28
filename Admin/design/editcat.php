<form method="post" action="fun/updatecat.php" enctype="multipart/form-data">
	<?php 
	include"fun/conn.php";
	$id=$_GET['id'];
	
	$slcat="SELECT * FROM categeory WHERE id=$id";
	$rr=$conn->query($slcat);
	$rowcat=$rr->fetch_assoc();
	?>
	<input type="hidden" name="id" value="<?php echo $rowcat['id']; ?>">
		<div class="form-group">
			<label>categorey name</label>
			<input  class="form-control" type="text" name="name" value="<?php echo $rowcat['cat_name'];?> ">
		</div>
		<div class="form-group">
			<label>categorey img</label>
			<input  class="form-control" type="file" name="img" value="<?php echo $rowcat['img'];?> ">
		</div>
		<input type="submit" name="edit" class="btn btn-danger">
	



	
	

</form>