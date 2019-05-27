<?php

include "fun/connection.php";

   $id=$_GET['id'];
   $select_edit_admin="SELECT * FROM admin WHERE id = $id";
   $result_edit_admin=$conn->query($select_edit_admin);
   foreach ($result_edit_admin as $row_admin) {
?>

<form method="post" action="fun/update_admin.php">
	<br>
	<input type="hidden" name="id" value="<?php echo $id ; ?>">
	<div class="form-group">
		<label>Edit Admin</label>
		<input class="form-control" type="text" name="name" value="<?php echo $row_admin['name']; ?>">
	</div><br>
	<div class="form-group">
		<label>Edit Password</label>
		<input class="form-control"type="password" name="password" value="<?php echo $row_admin['password'];?>">
	</div><br>
	<input class="btn btn-info" type="submit" name="submit" value="Edit">
</form>

<?php } ?>