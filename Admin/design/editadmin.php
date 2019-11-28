<form method="post" action="fun/updateadmin.php">
	
	<?php
	include "fun/conn.php";
	$id=$_GET['id'];
	$slkted="SELECT * FROM admins WHERE id = $id";
	$edresult=$conn->query($slkted);
	foreach ($edresult as  $edrow) {?>
		<input type="hidden" name="id" value="<?php echo $id ?>" >
		<div class="form-group">
			<label>name</label>
		<input class="form-control" type="text" name="name" value="<?php echo $edrow['name']; ?>">
		</div>
			<div class="form-group">
			<label>password</label>
		<input class="form-control" type="password" name="password" value="<?php echo $edrow['password']; ?>">
		</div>
		<input type="submit" name="edit" class="btn btn-primary">
		
		
	<?php }?>

	 
</form>