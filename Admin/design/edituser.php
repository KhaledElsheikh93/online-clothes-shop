<?php
include "fun/conn.php";
$id=$_GET['id'];
$sllk="SELECT * FROM users WHERE id=$id";
$slkres=$conn->query($sllk);
foreach ($slkres as  $usrow) {?>
	





<form method="post" action="fun/updateuser.php">
	<input type="hidden" name="id" value="<?php echo $usrow['id']?>">
	<div class="form-group">
		<label>username</label>
		<input class="form-control" type="text" name="username" value="<?php echo $usrow['username'];?> " >
	</div>
	<div class="form-group">
		<label>password</label>
		<input class="form-control" type="password" name="password" value="<?php echo $usrow['password'];?> " >
	</div>
	<div class="form-group">
		<label>firstname</label>
		<input class="form-control" type="text" name="firstname" value="<?php echo $usrow['firstname'];?> " >
	</div>
	<div class="form-group">
		<label>lastname</label>
		<input class="form-control" type="text" name="lastname" value="<?php echo $usrow['lastname'];?> " >
	</div>
	
	
	<div class="form-group">
		<label>email</label>
		<input class="form-control" type="text" name="email" value="<?php echo $usrow['email'];?> " >
	</div>
	<div class="form-group">
		<label>address</label>
		<input class="form-control" type="text" name="address" value="<?php echo $usrow['addresss'];?> " >
	</div>
	<div class="form-group">
		<label>phone</label>
		<input class="form-control" type="text" name="phone" value="<?php echo $usrow['phone'];?> " >
	</div>
	<div class="form-group">
		<label>gender</label>
		<input class="form-control" type="text" name="gender" value="<?php echo $usrow['gender'];?> " >
	</div>
	<div class="form-group">
		<label>age</label>
		<input class="form-control" type="text" name="age" value="<?php echo $usrow['age'];?> " >
	</div>
	<input class="btn btn-danger" type="submit" name="edit" value="edit">
<?php } ?>

</form>