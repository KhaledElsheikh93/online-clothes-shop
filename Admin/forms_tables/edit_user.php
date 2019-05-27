<?php
 include "fun/connection.php";
 $id=$_GET['id'];
 
 $edit_user="SELECT * FROM users WHERE id=$id";
 $result_user_edit =$conn->query($edit_user);
 $row_user=$result_user_edit->fetch_assoc();
 	?>

 <form method="post" action="fun/update_user.php">
        <input type="hidden" name="id" value="<?php echo $row_user['id']?>">
 	    <br>
 	<div class="form-group">
 		<label>Username</label>
 		<input class="form-control" type="text" name="username" value="<?php echo $row_user['username'] ?>">
 	</div><br>
 	<div class="form-group">
 		<label>First Name</label>
 		<input class="form-control" type="text" name="firstname" value="<?php echo $row_user['firstname'] ?>">
 	</div><br>
 	<div class="form-group">
 		<label>Last Name</label>
 		<input class="form-control" type="text" name="lastname" value="<?php echo $row_user['lastname'] ?>">
 	</div><br>
 	<div class="form-group">
 		<label>E-Mail</label>
 		<input class="form-control" type="text" name="email" value="<?php echo $row_user['email'] ?>">
 	</div><br>
 	<div class="form-group">
 		<label>Password</label>
 		<input class="form-control" type="password" name="password" value="<?php echo $row_user['password'] ?>">
 	</div><br>
 	<div class="form-group">
 		<label>Gender</label>
 		<input class="form-control" type="text" name="gender" value="<?php echo $row_user['gender'] ?>">
 	</div><br>
 	<div class="form-group">
 		<label>Adress</label>
 		<input class="form-control" type="text" name="adress" value="<?php echo $row_user['adress'] ?>">
 	</div><br>
 	<div class="form-group">
 		<label>Phone</label>
 		<input class="form-control" type="text" name="phone" value="<?php echo $row_user['phone'] ?>">
 	</div><br>
 	<div class="form-group">
 		<label>Age</label>
 		<input class="form-control" type="text" name="age" value="<?php echo $row_user['age'] ?>">
 	</div><br>
 	<div class="form-group">
 		<label>Nationality</label>
 		<input class="form-control" type="text" name="nationality" value="<?php echo $row_user['nationality'] ?>">
 	</div><br>

 	<input type="submit" name="submit" value="Edit" class="btn btn-primary">

 	</form>
  